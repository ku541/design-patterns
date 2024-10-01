<?php

namespace Kusal\DesignPatterns\Behavioral\Strategy;

use Kusal\DesignPatterns\Behavioral\Strategy\SortStrategy;

class QuickSortStrategy implements SortStrategy
{
    public function sort(array $dataset): array
    {
        echo "Sorting using Quick Sort.\n";

        return $dataset;
    }
}