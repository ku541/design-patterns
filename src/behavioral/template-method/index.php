<?php

use Kusal\DesignPatterns\Behavioral\TemplateMethod\AndroidBuilder;
use Kusal\DesignPatterns\Behavioral\TemplateMethod\IosBuilder;

$androidBuilder = new AndroidBuilder;

$androidBuilder->build();

$iOSBuilder = new IosBuilder;

$iOSBuilder->build();