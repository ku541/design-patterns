<?php

namespace Kusal\DesignPatterns\Behavioral\TemplateMethod;

class IosBuilder extends Builder
{
    public function test()
    {
        echo "\nRunning iOS tests.\n";
    }

    public function lint()
    {
        echo "Linting the iOS code.\n";
    }

    public function assemble()
    {
        echo "Assembling the iOS build.\n";
    }

    public function deploy()
    {
        echo "Deploying iOS build to server.\n";
    }
}