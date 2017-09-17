<?php

/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 9/16/17
 * Time: 8:46 PM
 */

namespace CodeBot;

use PHPUnit\Framework\TestCase;

class GetStartedButtonTest extends TestCase
{
    public function testAddGetStartedButton()
    {
        $data = (new GetStartedButton())->add('iniciar');
        $callSendApi = new CallSendApi('AQUI_VAI_SEU_ACCESS_T0KEN');
        $result = $callSendApi->make($data, $callSendApi::URL_PROFILE);

        $this->assertTrue(is_string($result));
    }

    public function testRemoveGetStartedButton()
    {
        $data = (new GetStartedButton())->remove();
        $callSendApi = new CallSendApi('AQUI_VAI_SEU_ACCESS_T0KEN');
        $result = $callSendApi->make($data, $callSendApi::URL_PROFILE, 'DELETE');

        $this->assertTrue(is_string($result));
    }

}