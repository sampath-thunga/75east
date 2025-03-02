<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class GridHtml extends ModuleGridEngine
{
	private $_values;
	private static $_columns;

	function __construct($type = null)
	{
		if ($type != null)
			parent::__construct($type);
		else
		{
			$this->name = 'gridhtml';
			$this->tab = 'administration';
			$this->version = '1.3.4';
			$this->author = 'PrestaShop';
			$this->need_instance = 0;

			Module::__construct();

			$this->displayName = $this->l('Simple HTML table display');
			$this->description = $this->l('Allows the statistics system to display data in a grid.');
		}
	}

	function install()
	{
		return (parent::install() AND $this->registerHook('GridEngine'));
	}

	public static function hookGridEngine($params, $grider)
	{
        static $divid = 1;

		$objModule = Module::getInstanceByName('gridhtml');
		self::$_columns = $params['columns'];
		if (!isset($params['emptyMsg']))
			$params['emptyMsg'] = $objModule->l('No records found.');

        $customParams = '';
        if (isset($params['customParams'])) {
            foreach ($params['customParams'] as $name => $value) {
                $customParams .= '&'.$name.'='.urlencode($value);
            }
        }

		$html = '
		<table class="table" id="grid_'.$divid.'">
			<thead>
				<tr>';
		foreach ($params['columns'] as $column)
			$html .= '<th class="'.((isset($column['align']) && $column['align']) ? $column['align'] : 'center').'" '.((isset($column['tooltip']) && $column['tooltip']) ? ('data-toggle="tooltip" title="'.$column['tooltip'].'"') : '').'><span class="title_box active">'.$column['header'].'</span></th>';
		$html .= '</tr>
			</thead>
			<tbody></tbody>
			<tfoot><tr><th colspan="'.count($params['columns']).'"></th></tr></tfoot>
		</table>
		<script type="text/javascript">
			function getGridData'.$divid.'(url)
			{
				$("#grid_'.$divid.' tbody").html("<tr><td style=\"text-align:center\" colspan=\"" + '.count($params['columns']).' + "\"><img src=\"../img/loadingAnimation.gif\" /></td></tr>");
				$.get(url, "", function(json) {
					$("#grid_'.$divid.' tbody").html("");
					var array = $.parseJSON(json);
					$("#grid_'.$divid.' tfoot tr th").html("'.addslashes($params['pagingMessage']).'");
					$("#grid_'.$divid.' tfoot tr th").html($("#grid_'.$divid.' tfoot tr th").html().replace("{0}", array["from"]));
					$("#grid_'.$divid.' tfoot tr th").html($("#grid_'.$divid.' tfoot tr th").html().replace("{1}", array["to"]));
					$("#grid_'.$divid.' tfoot tr th").html($("#grid_'.$divid.' tfoot tr th").html().replace("{2}", array["total"]));

					if (array["from"] > 1)
						$("#grid_'.$divid.' tfoot tr th").html($("#grid_'.$divid.' tfoot tr th").html() + " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style=\\"cursor:pointer;text-decoration:none\\" onclick=\\"gridPrevPage(\'"+ url +"\');\\">&lt;&lt;</a>");
					if (array["to"] < array["total"])
						$("#grid_'.$divid.' tfoot tr th").html($("#grid_'.$divid.' tfoot tr th").html() + " | <a style=\\"cursor:pointer;text-decoration:none\\" onclick=\\"gridNextPage(\'"+ url +"\');\\">&gt;&gt;</a>");
					var values = array["values"];
					if (values.length > 0)
						$.each(values, function(index, row){
							var newLine = "<tr>";';
			foreach ($params['columns'] as $column)
				$html .= '	newLine += "<td'.(isset($column['align']) ? ' align=\"'.$column['align'].'\"' : '').'>" + row["'.$column['dataIndex'].'"] + "</td>";';
			if (!isset($params['defaultSortColumn']))
				$params['defaultSortColumn'] = false;
			if (!isset($params['defaultSortDirection']))
				$params['defaultSortDirection'] = false;
			$html .= '		$("#grid_'.$divid.' tbody").append(newLine);
						});
					else
						$("#grid_'.$divid.' tbody").append("<tr><td class=\"center\" colspan=\"" + '.count($params['columns']).' + "\">'.$params['emptyMsg'].'</td></tr>");
				});
			}

			function gridNextPage(url)
			{
				var from = url.match(/&start=[0-9]+/i);
				if (from && from[0] && parseInt(from[0].replace("&start=", "")) > 0)
					from = "&start=" + (parseInt(from[0].replace("&start=", "")) + 40);
				else
					from = "&start=40";
				url = url.replace(/&start=[0-9]+/i, "") + from;
				getGridData(url);
			}

			function gridPrevPage(url)
			{
				var from = url.match(/&start=[0-9]+/i);
				if (from && from[0] && parseInt(from[0].replace("&start=", "")) > 0)
				{
					var fromInt = parseInt(from[0].replace("&start=", "")) - 40;
					if (fromInt > 0)
						from = "&start=" + fromInt;
					else
						from = "&start=0";
				}
				else
					from = "&start=0";
				url = url.replace(/&start=[0-9]+/i, "") + from;
				getGridData(url);
			}

			$(document).ready(function(){getGridData'.$divid.'("'.$grider.'&sort='.urlencode($params['defaultSortColumn']).'&dir='.urlencode($params['defaultSortDirection']).$customParams.'");});
		</script>';
		$divid++;
		return $html;
	}

	public function setColumnsInfos(&$infos)
	{
	}

	public function setValues($values)
	{
		$this->_values = $values;
	}

	public function setTitle($title)
	{
		$this->_title = $title;
	}

	public function setSize($width, $height)
	{
		$this->_width = $width;
		$this->_height = $height;
	}

	public function setTotalCount($totalCount)
	{
		$this->_totalCount = $totalCount;
	}

	public function setLimit($start, $limit)
	{
		$this->_start = (int)$start;
		$this->_limit = (int)$limit;
	}

	public function render()
	{
		echo json_encode(array(
			'total' => $this->_totalCount,
			'from' => min($this->_start + 1, $this->_totalCount),
			'to' => min($this->_start + $this->_limit, $this->_totalCount),
			'values' => $this->_values
		));
	}
}

