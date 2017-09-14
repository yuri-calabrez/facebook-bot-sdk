<?php

namespace CodeBot;


use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddStartedButton()
    {
        $data = (new GetStartedButton)->add('Iniciar');
        $sender = new CallSendApi('EAAD9eSKOVHsBAE3WbpgaAzZCJRZANeCYHTxs9Yy4BjRPT0py7SY0POb4tSXBPZB8mokjHG1Yf2OcpYI2rv3ZA1cOLoZCr4PZAN8oAvzBkfk6uRtZBnhCSYWgf1R4t8I6yHqNSwNSZAr3UwziabZBP6yXAv3SliWSokyrreRaojp7gKB0eWpP8XuVc');
        $result = $sender->make($data, CallSendApi::URL_PROFILE);
        //$result = 'xpto';
        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {
        /*$data = (new GetStartedButton)->add('Iniciar');
         $sender = new CallSendApi('FACEBOOK_PAGE_ACCESS_TOKEN');
         $result = $sender->make($data, CallSendApi::URL_PROFILE);*/
        $result = 'xpto';
        $this->assertTrue(is_string($result));
    }
}