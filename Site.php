<?php

use Fol\Builder\App;

/**
 * Class to generate the site and serve files.
 */
class Site extends App
{
    protected $sourcesDir = 'source';
    protected $buildDir = 'build';

    public function __construct()
    {
        $this->addServer('pages', 'data/*.yml');
        $this->addServer('files', 'files/*');
    }
}