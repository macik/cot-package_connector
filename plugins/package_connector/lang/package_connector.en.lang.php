<?php
/**
 * Localization file for PackageConnector
 * @author Andrey Matsovkin
 * @copyright Copyright (c) 2011-2015
 * @license Distributed under BSD license.
*/

defined('COT_CODE') or die('Wrong URL');

$L['plu_title'] = 'PackageConnector';
$L['info_desc'] ='Integration with Composer installed packages';
if (version_compare($cfg['version'], '0.9.12') > 0)
	$L['info_notes'] = 'No addition setup required. Use <a href="https://getcomposer.org/" target="_new">Composer</a> to install packages. See README.md';
