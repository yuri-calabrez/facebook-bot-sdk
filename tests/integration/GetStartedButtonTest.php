<?php

namespace CodeBot;


use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddStartedButton()
    {
        $data = (new GetStartedButton)->add('Iniciar');
        $sender = new CallSendApi('FACEBOOK_PAGE_ACCESS_TOKEN');
        $result = $sender->make($data, CallSendApi::URL_PROFILE);
        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {
        $data = (new GetStartedButton)->add('Iniciar');
         $sender = new CallSendApi('FACEBOOK_PAGE_ACCESS_TOKEN');
         $result = $sender->make($data, CallSendApi::URL_PROFILE);
        $this->assertTrue(is_string($result));
    }
}