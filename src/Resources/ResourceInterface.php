<?php

namespace CodeBot\Resources;


use CodeBot\Bot;
use CodeBot\SenderRequest;

interface ResourceInterface
{
    public function __invoke(SenderRequest $senderRequest, Bot $bot): bool;
}