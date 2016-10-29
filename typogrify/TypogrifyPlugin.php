<?php
namespace Craft;

class TypogrifyPlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Typogrify');
    }

    function getVersion()
    {
        return '1.0.1';
    }

    function getDeveloper()
    {
        return 'Chief';
    }

    function getDeveloperUrl()
    {
        return 'http://withchief.com';
    }

    public function init()
    {
        Craft::import('plugins.typogrify.lib.smartypants', true);
        Craft::import('plugins.typogrify.lib.php-typogrify', true);
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.typogrify.twigextensions.TypogrifyTwigExtension');
        return new TypogrifyTwigExtension();
    }
}
