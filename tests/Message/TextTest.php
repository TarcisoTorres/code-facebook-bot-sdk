<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/14/17
 * Time: 10:52 PM
 */

namespace CodeBot\Message;

use PHPUnit\Framework\TestCase;

class TextTest extends TestCase{
    public function testRetornaUmArray(){
        $actual = (new Text(1))->message('oiii');
        $expected = [
            'recipient' => [
                'id'=>1
            ],
            'message'=>[
                'text' => 'oiii',
                'metadata' => 'DEVELOPER_DEFINED_METADATA'
            ]
        ];
        $this->assertEquals($actual, $expected);
    }
}