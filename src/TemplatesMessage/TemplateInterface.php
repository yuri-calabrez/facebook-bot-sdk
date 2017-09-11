<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 11/09/2017
 * Time: 15:12
 */

namespace CodeBot\TemplatesMessage;


use CodeBot\Element\ElementInterface;
use CodeBot\Message\Message;

interface TemplateInterface extends Message
{
    public function add(ElementInterface $element);
}