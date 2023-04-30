<?php
/**
 * Адаптер
 *
 * «Адаптер» позволяет надстроить над классом интерфейс,
 * чтобы использовать его в системе, использующей иные соглашения вызова
 */
require __DIR__ . '/../vendor/autoload.php';

use NS\Adapter\Profile;
use NS\Adapter\WebUserAdapter;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, у нас есть класс клиента? но в разные системы нужно отдавать его в разном состоянии
     */
    $user1 = new Profile('Ivan', 'Ivanov', 'Ivanovich', 'Moscow', '79111234567');
    \NS\Log::print($user1->json());
    $webUser = new WebUserAdapter($user1);
    \NS\Log::print($webUser->json());
}

\NS\Menu::getInstance()->getMenu();
run();
