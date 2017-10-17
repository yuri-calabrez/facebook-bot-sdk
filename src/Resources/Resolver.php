<?php

namespace CodeBot\Resources;


use CodeBot\Bot;
use CodeBot\SenderRequest;

class Resolver
{
    private $resources = [];

    public function register(string $class)
    {
        if (!in_array($class, $this->resources)) {
            $this->resources[] = $class;
        }
    }

    public function resolver(SenderRequest $senderRequest, Bot $bot)
    {
        foreach ($this->resources as &$resource) {
            if ($this->instance($resource, $senderRequest, $bot)) {
                return true;
            }
        }

        return false;
    }

    private function instance(string $resource, SenderRequest $senderRequest, Bot $bot)
    {
        $interfaces = class_implements($resource);

        if (!isset($interfaces[ResourceInterface::class])) {
            throw new \Exception('Class must implements '.ResourceInterface::class.' interface');
        }

        $object = new $resource;
        return $object($senderRequest, $bot);
    }
}