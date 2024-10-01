<?php

namespace Kusal\DesignPatterns\Behavioral\Strategy;

use Kusal\DesignPatterns\Behavioral\Strategy\SortStrategy;

class Sorter
{
    public function __construct(private SortStrategy $sortStrategy) {}

    public function setSortStrategy(SortStrategy $sortStrategy)
    {
        $this->sortStrategy = $sortStrategy;
    }

    public function sort(array $dataset): array
    {
        return $this->sortStrategy->sort($dataset);
    }
}