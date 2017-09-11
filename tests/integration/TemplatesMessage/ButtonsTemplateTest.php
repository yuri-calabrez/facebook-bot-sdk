<?php


namespace CodeBot\TemplatesMessage;


use CodeBot\Element\Button;
use PHPUnit\Framework\TestCase;

class ButtonsTemplateTest extends TestCase
{
    public function testReturnPostbackType()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('postback', 'Resposta do bot', 'Resposta'));
        $actual = $buttonsTemplate->message('Exemplo de template com botões');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Exemplo de template com botões',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'Resposta do bot',
                                'payload' => 'Resposta'
                            ]

                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }

    public function testReturnWebUrlType()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('web_url', 'Resposta do bot', 'Resposta'));
        $actual = $buttonsTemplate->message('Exemplo de template com botões em url');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Exemplo de template com botões em url',
                        'buttons' => [
                            [
                                'type' => 'web_url',
                                'title' => 'Resposta do bot',
                                'url' => 'Resposta'
                            ]

                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}