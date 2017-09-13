<?php

namespace CodeBot\TemplatesMessage;


use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{
    public function testListWithTwoProducts()
    {
        $button = new Button('web_url', null, 'https://angular.io');
        $product = new Product('Produto 1', 'https://angular.io/assets/images/logos/angular/angular.png',
            'Curso Angular', $button);

        $button2 = new Button('web_url', null, 'https://vuejs.org');
        $product2 = new Product('Produto 2', 'https://vuejs.org/images/logo.png','Curso VueJs', $button2);

        $template = new ListTemplate(1234);
        $template->add($product);
        $template->add($product2);
        $actual = $template->message('xpto');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'elements' => [
                            [
                                'title' => 'Produto 1',
                                'subtitle' => 'Curso Angular',
                                'image_url' => 'https://angular.io/assets/images/logos/angular/angular.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://angular.io'
                                ],
                            ],
                            [
                                'title' => 'Produto 2',
                                'subtitle' => 'Curso VueJs',
                                'image_url' => 'https://vuejs.org/images/logo.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://vuejs.org'
                                ],
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);

    }
}