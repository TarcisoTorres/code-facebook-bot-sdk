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

class ReceptTemplate implements TemplateInterface
{

    protected $products = [];
    protected $recipientId;

    public function __construct(string $recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->products[] = $element->get();
    }

    public function message(string $messageText) :array
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => $messageText,
                        'products' => $this->products
                    ]
                ]
            ]
        ];
    }
}