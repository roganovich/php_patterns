<?php

namespace NS\Strategy;

class QuickSort implements SortInterface
{
    public function sort(array $dataset): array
    {
        asort($dataset);

        return $dataset;
    }
}