<?php

class Foo
{
    private $_foobar;

    public function __construct()
    {
        $this->_foobar = 'Foo class';

        print $this->_foobar;
    }
}