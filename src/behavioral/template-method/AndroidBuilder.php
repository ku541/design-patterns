<?php

namespace Kusal\DesignPatterns\Behavioral\TemplateMethod;

class AndroidBuilder extends Builder
{
    public function test()
    {
        echo "\nRunning Android tests.\n";
    }

    public function lint()
    {
        echo "Linting the Android code.\n";
    }

    public function assemble()
    {
        echo "Assembling the Android build.\n";
    }

    public function deploy()
    {
        echo "Deploying Android build to server.\n";
    }
}