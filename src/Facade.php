<?php

namespace xiaodi\ShoppingCart;

use think\Facade as BaseFacade;

class Facade extends BaseFacade
{
    protected static function getFacadeAccessor()
    {
        return Cart::class;
    }
}
