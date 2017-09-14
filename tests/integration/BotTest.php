<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;
use CodeBot\Build\Solid;

class BotTest extends TestCase
{
	private $facebookPageAccessToken = 'FACEBOOK_PAGE_ACCESS_TOKEN';

	public function testAddGetStartedButton()
	{
		$bot = Solid::factory();
		Solid::setPageAccessToken($this->facebookPageAccessToken);
		$bot->addGetStartedButton('Iniciar');

		$this->assertTrue(true);
	}

	public function testRemoveGetStartedButton()
	{
		$bot = Solid::factory();
		Solid::setPageAccessToken($this->facebookPageAccessToken);
		$bot->removeGetStartedButton();

		$this->assertTrue(true);
	}

	public function testAddMenu()
	{
		$bot = Solid::factory();
		Solid::setPageAccessToken($this->facebookPageAccessToken);

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

		$bot->addMenu('default', false, $call_to_actions);

		$this->assertTrue(true);
	}

	public function testRemoveMenu()
	{
		$bot = Solid::factory();
		Solid::setPageAccessToken($this->facebookPageAccessToken);
		$bot->removeMenu();

		$this->assertTrue(true);
	}


}