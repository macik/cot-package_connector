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
	$L['info_notes'] = 'Не требует дополнительных настроек. Просто используйте <a href="https://getcomposer.org/" target="_new">Composer</a> для установки пакетов. Подробнее читайте в файле README.md';

$pc_l10n_messages = array(
	'format_error' => 'Не возможно извлечь данные из файла "{$0}". Проверьте формат файла.',
	'no_autoload' => 'Не найден файл автозагрузки "{$0}".',
	'no_package' => 'Файл настроек (composer.json) не найден в каталоге пакета "{$0}".',
	'no_lock' => 'Файл composer.lock не найден.',
	'no_installed' => "Не найдены данные об установленных пакетах.",
	'not_found' => 'Файл "{$0}" не найден или пустой.',
	'not_utf8' => 'Файл "{$0}" не может быть обработан как JSON. Кодировка файла должна быть UTF-8.',
	'not_json' => 'Содержимое файла "{$file}" не может быть обработано как JSON: {$msg}.',
);

