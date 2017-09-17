<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 9/16/17
 * Time: 8:34 PM
 */

namespace CodeBot;


class GetStartedButton
{
    public function add(string $postback)
    {
        return [
            'get_started' => [
                'payload' => $postback
            ]
        ];
    }

    public function remove()
    {
        return [
            'fields' => [
                'get_started'
            ]
        ];
    }

}