<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/16/17
 * Time: 7:27 AM
 */

use PHPUnit\Framework\TestCase;
use CodeBot\Message\Text;
use CodeBot\CallSendApi;

class CallSendApiTest extends TestCase
{
    /**
     * @expectedException \GuzzleHttp\Exception\ClientException
     */
    public function testMakeRequest()
    {
        $message = (new Text(1))->message('oiii');
        (new CallSendApi('28sj82'))->make($message);
    }
}