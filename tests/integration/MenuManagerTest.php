<?php

namespace CodeBot;


use PHPUnit\Framework\TestCase;

class MenuManagerTest extends TestCase
{
    public function testMakeMenu()
    {
        $menu = new MenuManager('default');

        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer?',
                'parent_id' => 0,
                'value' => null
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Nosso site',
                'parent_id' => 0,
                'value' => 'https://www.google.com'
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer aprender Laravel e Vuejs?',
                'parent_id' => 1,
                'value' => 'https://sites.code.education/chatbot_laravel_vuejs/'
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais',
                'parent_id' => 1,
                'value' => 'Iniciar'
            ]
        ];

        foreach ($call_to_actions as $action) {
            $menu->callToAction($action['id'], $action['type'], $action['title'], $action['parent_id'], $action['value']);
        }

        $sender = new CallSendApi('FACEBOOK_PAGE_ACCESS_TOKEN');
        $result = $sender->make($menu->toArray(), CallSendApi::URL_PROFILE);
        $this->assertTrue(is_string($result));
    }
}