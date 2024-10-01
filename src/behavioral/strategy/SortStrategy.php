<?php

namespace Kusal\DesignPatterns\Behavioral\Strategy;

interface SortStrategy
{
    public function sort(array $dataset): array;
}