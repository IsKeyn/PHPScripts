<?php
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__) . '/..');

/*
 * Комменда для запуска из консоли (пример):
 * /usr/bin/php /home/bitrix/ext_www/myproject.keyn/console_scripts/script.php
 *
 * Комманда для запуска с передачей переменных (пример):
 * /usr/bin/php /home/bitrix/ext_www/myproject.keyn/console_scripts/script.php a b c
 *
 * Запись для добавления в cron (пример): */
// */15 * * * * /usr/bin/php /home/bitrix/ext_www/myproject.keyn/console_scripts/script.php


@set_time_limit(0);
@ignore_user_abort(true);

ini_set('memory_limit', '1024M');

if (php_sapi_name() == 'cli') {
	print_r($argv);

	echo 'Hello World!' . PHP_EOL;

	error_log(date('Y/m/d H:i:s') . ': Сообщение' . PHP_EOL, 3, $_SERVER['DOCUMENT_ROOT'] . '/test_log.log');
} else {
	echo 'Скрипт запускается не из коммандной строки' . PHP_EOL;
}
