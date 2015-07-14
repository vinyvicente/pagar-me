<?php

class CreateInstanceTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $this->assertInstanceOf('\\PagarMe\\PagarMe', \PagarMe\PagarMe::getInstance());
    }

    public function testSetApiKey()
    {
        $gateway = \PagarMe\PagarMe::getInstance();
        $gateway->setApiKey('s3cr3t');

        $this->assertTrue($gateway->isValidKey());

        $gateway->setApiKey(null);

        $this->assertFalse($gateway->isValidKey());
    }
}
