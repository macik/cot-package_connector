<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=input
[END_COT_EXT]
==================== */
defined('COT_CODE') or die('Wrong URL.');

// Should be located in `$cfg['system_dir']/classes/`, otherwise exits
if (!is_file("{$cfg['system_dir']}/classes/PackageConnector.php")) return false;
// We can not use `plugins/plugin_name/classes/` as can't be located on cache unserialization

require cot_langfile('package_connector');

// Checks if class not yet exists or need to be reseted
if (!$cot_packages || $cot_packages->stateChanged())
{
	if (!$cot_packages) $cot_packages = new PackageConnector();

	$pc_l10n_messages && $cot_packages->messagesInit($pc_l10n_messages); // PackageConnector l10n
	$cot_packages->setup();

	$cache && $cache->db->store('cot_packages', $cot_packages, 'system');
}
else
{
	$pc_l10n_messages && $cot_packages->messagesInit($pc_l10n_messages);
}

// links Composer generated auto loader
if (!$cot_packages->connectAutoloader())
{
	cot_log($cot_packages->getLastError(),'system');
}

