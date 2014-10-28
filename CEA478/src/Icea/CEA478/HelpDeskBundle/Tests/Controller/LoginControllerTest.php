<?php

namespace Icea\CEA478\HelpDeskBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testLogin_check()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login_check');
    }

}
