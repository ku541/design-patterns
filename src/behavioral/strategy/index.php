<?php

use Kusal\DesignPatterns\Behavioral\Strategy\Sorter;
use Kusal\DesignPatterns\Behavioral\Strategy\BubbleSortStrategy;
use Kusal\DesignPatterns\Behavioral\Strategy\QuickSortStrategy;

$smallDataset = [5, 2, 6];
$bigDataset = [5, 3, 8, 4, 9, 0];

$sorter = new Sorter(new BubbleSortStrategy);

$sorter->sort($smallDataset);

$sorter->setSortStrategy(new QuickSortStrategy);

$sorter->sort($bigDataset);