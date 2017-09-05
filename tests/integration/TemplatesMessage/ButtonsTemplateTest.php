<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 9/5/17
 * Time: 5:14 PM
 */

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use PHPUnit\Framework\TestCase;

class ButtonsTemplateTest extends TestCase
{
    public function testRetornoComTipoPostback()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('postback', 'Que tal uma resposta do bot', 'resposta'));
        $actual = $buttonsTemplate->message('Olha um exemplo de templates com botões');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Olha um exemplo de templates com botões',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'Que tal uma resposta do bot',
                                'payload' => 'resposta',
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}