<?php

class BasicTest extends PHPUnit_Framework_TestCase
{

    public function testDependencies()
    {
        require dirname(__FILE__).'/../PagSeguroLibrary/PagSeguroLibrary.php';
        $this->assertInstanceOf('PagSeguroLibrary', PagSeguroLibrary::init());
    }
}
