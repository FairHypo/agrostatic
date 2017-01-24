<?php namespace Fairhypo\Agrostatic\Facades;


use Illuminate\Support\Facades\Facade;

class Agrostatic extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Agrostatic';
    }

}