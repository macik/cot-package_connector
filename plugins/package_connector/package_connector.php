<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=standalone
Tags=example.tpl:
[END_COT_EXT]
==================== */

/**
 * PackageConnector
 *
 * @package package_connector
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2015
 * @license Distributed under BSD license.
 * Made with «Extension Template» (https://github.com/macik/cot-extension_template)
 */

defined('COT_CODE') or die('Wrong URL.');
$plug_name = 'package_connector';
$base_path = $cfg['plugins_dir']."/$plug_name";
//$inc_path  = "$base_path/inc";
//$js_path   = "$base_path/js";
//$tpl_path  = "$base_path/tpl";
//$ajax_link = "plug.php?r=$plug_name";
//$pl_cfg = $cfg['plugin'][$plug_name];

//require cot_incfile('package_connector', 'plug', 'common');
//$t = new XTemplate(cot_tplfile('package_connector', 'plug'));
//$t = new XTemplate(cot_tplfile('package_connector.edit', 'plug'));


$plugin_body .= 'Plugin installed (file package_connector).<br/>';