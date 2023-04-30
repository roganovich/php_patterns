<?php
/**
 * Реестр
 * Этот шаблон не относится к порождающим, хотя в чём-то близок к ним.
 * Реестр – это всего лишь хэш-таблица, а данные в ней могут быть получены при помощи обращения к статическому методу класса:
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Registry\Settings;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, можно храть данные настроек приложения после их инициализации
     */
    Settings::set('login', 'root');
    Settings::set('password', '123456');
    Settings::set('server', '127.0.0.1');
    Settings::set('method', 'GET');

    /**
     * И потом легко доставать для работы со сторонними апи или подключением к БД
     */
    \NS\Log::print(sprintf('curl %s %s@%s:%s',
        Settings::get('method'),
        Settings::get('server'),
        Settings::get('login'),
        Settings::get('password')));
}

\NS\Menu::getInstance()->getMenu();
run();
