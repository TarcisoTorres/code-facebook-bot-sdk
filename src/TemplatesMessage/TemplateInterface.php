<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/27/17
 * Time: 8:29 AM
 */

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\ElementInterface;
use CodeBot\Message\Message;

interface TemplateInterface extends Message
{

    public function add(ElementInterface $element);
}