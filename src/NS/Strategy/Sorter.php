<?php
namespace NS\Strategy;

class Sorter
{
    protected $sorter;

    public function __construct(SortInterface $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataset): array
    {
        return $this->sorter->sort($dataset);
    }
}