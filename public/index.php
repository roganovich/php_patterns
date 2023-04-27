<?php
require __DIR__ . '/../vendor/autoload.php';

echo \NS\HtmlTag::open('div', ['padding:10px']);
echo \NS\Menu::getInstance()->getMenu();
echo \NS\HtmlTag::close('div');
echo __FILE__;
?>
