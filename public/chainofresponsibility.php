<?php
/**
 * Цепочка ответственности
 *
 * Шаблон «Цепочка ответственности» позволяет создавать цепочки объектов.
 * Запрос входит с одного конца цепочки и движется от объекта к объекту,
 * пока не будет найден подходящий обработчик.
 */
require __DIR__ . '/../vendor/autoload.php';

use \NS\ChainOfResponsibility\VKAccount;
use \NS\ChainOfResponsibility\TelegramAccount;
use \NS\ChainOfResponsibility\WhatsAppAccount;
use \NS\ChainOfResponsibility\SmsAccount;

function run()
{
    \NS\Log::print(__FILE__);
    /**
     * Например, у нас есть отправка сообщения.
     * Нужно пройтись по всей цепочке возможных систем доставки сообщений и отправить первой способной это сделать
     * Начинаем с бесплатных, и заканчиваем платной СМС
     */
    $telegramm = new TelegramAccount(false);
    $vk = new VKAccount(false);
    $whatsapp = new WhatsAppAccount(false);
    $sms = new SmsAccount(true);

    $telegramm->setChild($vk);
    $vk->setChild($whatsapp);
    $whatsapp->setChild($sms);

    /**
     * 1. telegramm
     * 2. vk
     * 3. whatsapp
     * 4. sms
    */
    $telegramm->send();
}

\NS\Menu::getInstance()->getMenu();
run();
