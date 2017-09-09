<?php
/**
 * Created by PhpStorm.
 * User: tarciso
 * Date: 9/8/17
 * Time: 11:37 AM
 */

namespace CodeBot\TemplatesMessage;


use CodeBot\Element\Button;
use CodeBot\Element\Product;
use PHPUnit\Framework\TestCase;

class ListTemplateTest extends TestCase
{
    public function testListaComDoisProdutos()
    {
        $button = new Button('web_url', null, 'https://angular.io/');
        $product = new Product('Produto 1', 'https://cdn.worldvectorlogo.com/logos/angular-icon-1.svg', 'Curso de Angular', $button);
        $button = new Button('web_url', null, 'http://www.php.net/');
        $product2 = new Product('Produto 2', 'http://p9.storage.canalblog.com/95/52/388561/21464247.png', 'Curso de PHP', $button);

        $template = new ListTemplate('1234');
        $template->add($product);
        $template->add($product2);

        $actual = $template->message('qwe');

        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' =>[
                        'template_type' => 'list',
                        'buttons' => [
                            [
                                'title' => 'Produto 1',
                                'subtitle' => 'Curso de Angular',
                                'image_url' => 'https://cdn.worldvectorlogo.com/logos/angular-icon-1.svg',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://angular.io/',
                                ]
                            ],
                            [
                                'title' => 'Produto 2',
                                'subtitle' => 'Curso de PHP',
                                'image_url' => 'http://p9.storage.canalblog.com/95/52/388561/21464247.png',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'http://www.php.net/',
                                ]
                            ],
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}