<?php

/**
* Encoding     :   UTF-8
* Created on   :   2015-4-12 11:32:12 by 曹文鹏 , caowenpeng1990@126.com
*/
namespace library;

class PhpFunction
{
    /**
     * This method is called on any attempt to compile a function call
     */
    public function compileFunction($name, $arguments)
    {
        if (function_exists($name)) {
            return $name . '('. $arguments . ')';
        }
    }
}