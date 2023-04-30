<?php
/**
 * Набор уникальных объектов со своими свойствами
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\SingletonPoll\UserWebPhones;
use NS\SingletonPoll\UserAppPhones;

function run()
{
    \NS\Log::print(__FILE__);

    /**
     * Клиента сайта
     */
    UserWebPhones::getInstance()->phones[] = '111-111-11-11';
    UserAppPhones::getInstance()->phones[] = '222-222-22-22';
    /**
     * Клиент приложения
     */
    UserWebPhones::getInstance()->phones[] = '333-333-33-33';
    UserAppPhones::getInstance()->phones[] = '444-444-44-44';
    /**
     * Как видим клиенты приложения заполняются независимо от клиентов сайта
     */
    \NS\Log::print(get_class(UserWebPhones::getInstance()));
    \NS\Log::print(json_encode(UserWebPhones::getInstance()->phones));

    \NS\Log::print(get_class(UserAppPhones::getInstance()));
    \NS\Log::print(json_encode(UserAppPhones::getInstance()->phones));
}

\NS\Menu::getInstance()->getMenu();
run();
