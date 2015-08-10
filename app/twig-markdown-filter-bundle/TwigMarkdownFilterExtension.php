<?php
namespace Evan\TassoEvan\WebSite\Bundles;

use \ParsedownExtra;
use \Twig_Extension;
use \Twig_Filter_Method;

class TwigMarkdownFilterExtension extends Twig_Extension
{
    private $parsedown;

    public function __construct()
    {
        $this->parsedown = new ParsedownExtra();
    }

    public function markdown($text, $inline = false)
    {
        if ( $inline ) {
            return $this->parsedown->line($text);
        } else {
            return $this->parsedown->parse($text);
        }
    }

    public function getFilters()
    {
        return [
            'markdown' => new Twig_Filter_Method($this, 'markdown', ['is_safe' => ['html']])
        ];
    }

    public function getName()
    {
        return 'markdown';
    }
}
