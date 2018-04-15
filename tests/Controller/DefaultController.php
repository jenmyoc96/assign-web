<?php
namespace App\Controller\Test;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
class DefaultControllerTest extends WebTestCase
{


    public function testHomePageHasLinkToNewChocolatePage()
    {
        // arrange
        $httpMethod = 'GET';
        $url = '/';
        $client = static::createClient();
        $crawler = $client->request($httpMethod, $url);
        $expectedContent = 'Create New Chocolate';
        $expectedContentLower = strtolower($expectedContent);

        // click link 'new'
        $linkText = 'new';
        $link = $crawler->selectLink($linkText)->link();

        // act
        $client->click($link);
        $content = $client->getResponse()->getContent();
        $contentLowerCase = strtolower($content);

        // aassert
        $this->assertContains($expectedContentLower, $contentLowerCase);

    }

}