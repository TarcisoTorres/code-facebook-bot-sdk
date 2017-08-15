<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/14/17
 * Time: 10:44 PM
 */

namespace CodeBot\Message;

class Text
{
    private $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id'=>$this->recipientId
            ],
            'message'=>[
                'text' => $messageText,
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
    }
}