<?php

namespace Astrogoat\Postscript;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Postscript\Postscript
 */
class PostscriptFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'postscript';
    }
}
