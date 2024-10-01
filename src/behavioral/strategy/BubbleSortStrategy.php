<?php

namespace Kusal\DesignPatterns\Behavioral\Strategy;

use Kusal\DesignPatterns\Behavioral\Strategy\SortStrategy;

class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using Bubble Sort.\n";

        return $dataset;
    }
}