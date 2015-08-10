<?php

class SculpinKernel extends \Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel
{
    protected function getAdditionalSculpinBundles()
    {
        return array(
            "Evan\\TassoEvan\\WebSite\\Bundles\\TwigMarkdownFilterBundle",
            'Bcremer\Sculpin\Bundle\LessBundle\SculpinLessBundle'
        );
    }
}
