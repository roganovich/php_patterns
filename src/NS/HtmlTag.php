<?php

namespace NS;

class HtmlTag
{
    /**
     * Открыть HTML тег
     * @param string $tagName
     * @param array $style
     * @return string
     */
    public static function open(string $tagName, $style = array()): string
    {
        return sprintf('<%s style="%s">', $tagName, implode('; ', $style));
    }

    /**
     * Закрыть HTML тег
     * @param string $tagName
     * @return string
     */
    public static function close(string $tagName): string
    {
        return sprintf('</%s>', $tagName);
    }
}