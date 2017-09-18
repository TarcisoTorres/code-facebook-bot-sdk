<?php
/**
 * Created by PhpStorm.
 * User: tarciso.torres
 * Date: 09/18/2017
 * Time: 8:15
 */

namespace CodeBot\TemplatesMessage;

use CodeBot\MenuManager;
use PHPUnit\Framework\TestCase;

class MenuManagerTest extends TestCase
{
    public function makeMenuTest()
    {
        $menu = new MenuManager('default');

        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer',
                'parent_id' => 0,
                'value' => null,
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visite o nosso site',
                'parent_id' => 0,
                'value' => 'https://code.education/',
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer aprender laravel e vue?',
                'parent_id' => 1,
                'value' => 'https://sites.code.education/laravel-com-vuejs/',
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais',
                'parent_id' => 1,
                'value' => 'iniciar',
            ],
        ];

        foreach ($call_to_actions as $action) {
            $menu->callToAction($action['id'], $action['type'], $action['title'], $action['parent_id'], $action['value)']);
        }

        $callSendApi = new CallSendApi('AQUI_VAI_SEU_ACCESS_T0KEN');
        $result = $callSendApi->make($menu, $callSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }
}