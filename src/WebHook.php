<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 8/16/17
 * Time: 12:57 PM
 */

namespace CodeBot;

class WebHook
{
    public function check(string $token)
    {
        $hubMode = filter_input(INPUT_GET, 'hub_mode');
        $hubVerifyToken = filter_input(INPUT_GET, 'hub_verify_token');
        if($hubMode === 'subscribe' and $hubVerifyToken === $token){
            return filter_input(INPUT_GET, 'hub_challenge');
        }
        return false;
    }
}