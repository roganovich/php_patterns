<?php

namespace NS\Strategy;

class Bubble implements SortInterface
{
    public function sort(array $dataset): array
    {
        $size = count($dataset) - 1;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                if ($dataset[$k] < $dataset[$j]) {
                    list($dataset[$j], $dataset[$k]) = array($dataset[$k], $dataset[$j]);
                }
            }
        }

        return $dataset;
    }
}