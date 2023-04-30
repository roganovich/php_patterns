<?php
/**
 * Набор уникальных объектов со своими свойствами
*/
require __DIR__ . '/../vendor/autoload.php';

use NS\SingletonPoll\Factory;

function run()
{
    /**
     * Клиента сайта
    */
    class UserWebPhones extends Factory {
        public $phones = [];
    }
    /**
     * Клиент приложения
    */
    class UserAppPhones extends UserWebPhones {
    }

    UserWebPhones::getInstance()->phones[] = '111-111-11-11';
    UserAppPhones::getInstance()->phones[] = '222-222-22-22';

    UserWebPhones::getInstance()->phones[] = '333-333-33-33';
    UserAppPhones::getInstance()->phones[] = '444-444-44-44';

    /**
     * Как видим клиенты приложения заполняются независимо от клиентов сайта
    */

    echo 'UserWebPhones:';
    echo '<pre>';
    print_r(UserWebPhones::getInstance()->phones);
    echo '</pre>';
    echo 'UserAppPhones';
    echo '<pre>';
    print_r(UserAppPhones::getInstance()->phones);
    echo '</pre>';
}

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
echo \NS\HtmlTag::open('div', ['padding:10px']);
run();
echo \NS\HtmlTag::close('div');