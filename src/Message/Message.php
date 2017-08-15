<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/14/17
 * Time: 10:44 PM
 */

namespace CodeBot\Message;

interface Message
{

    public function __construct(string $recipientId);


    public function message(string $messageText) :array;
}