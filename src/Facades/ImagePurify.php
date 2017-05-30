<?php


namespace Despark\Laravel\ImagePurify\Facades;

use Despark\ImagePurify\Interfaces\ImagePurifierInterface;
use Illuminate\Support\Facades\Facade;

class ImagePurify extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ImagePurifierInterface::class;
    }

}