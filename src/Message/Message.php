<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 08/09/2017
 * Time: 18:05
 */

namespace CodeBot\Message;


interface Message
{
    public function __construct(string $recipientId);
    public function message(string $messageText): array;
}