<?php
/**
 * Created by PhpStorm.
 * User: tarciso.torres
 * Date: 09/21/2017
 * Time: 7:25
 */

namespace CodeBot;

use CodeBot\Build\Solid;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{
    private $pageAccessToken = 'EAAbHbEMVJFMBAFE7CLbRBQApaI2wEVeDQC09zYGcO5krsGCyVzwBZBsFxiv0A9RiI5slvhOGyFFjxiBEQZByJUrHoGFb2y909ABiKY4iX0kia1Xo9xqehGZAeoeZCk247LDRlMFLBZAKAPzE6h8nfSXl5LDnSiAN38k68ZAkvcxQZDZD';

    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->addGetStartedButton('iniciar');

        $this->AssertTrue(true);
    }

    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::pageAccessToken($this->pageAccessToken);
        $bot->removeGetStartedButton();

        $this->AssertTrue(true);
    }
}