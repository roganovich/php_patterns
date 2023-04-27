<?php

namespace NS\Strategy;

interface SortInterface
{
    public function sort(array $dataset): array;
}