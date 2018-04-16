<?php
namespace App\Controller\Test;
use Symfony\Bundle\FrameworkBundle\Test\TestCase;
use Symfony\Component\HttpFoundation\Response;
class DefaultControllerTest extends WebTestCase
{

    public function testHomepage()
    {
        // arrange
        $httpMethod = 'GET';
        $url = '/';
        $client = static::createClient();
        $client->request($httpMethod, $url);
        $expectedResult = Response::HTTP_OK;

        // act
        $result = $client->getResponse()->getStatusCode();

        // aassert
        $this->assertEquals($expectedResult, $result);
    }
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
        $linkText = ' chocolate new';
        $link = $crawler->selectLink($linkText)->link();

        // act
        $client->click($link);
        $content = $client->getResponse()->getContent();
        $contentLowerCase = strtolower($content);

        // aassert
        $this->assertContains($expectedContentLower, $contentLowerCase);

    }
    public function testHomePageHasLinkToChocolateIndexPage()
    {
        // arrange
        $httpMethod = 'GET';
        $url = '/';
        $client = static::createClient();
        $crawler = $client->request($httpMethod, $url);
        $expectedContent = ' Chocolate index';
        $expectedContentLower = strtolower($expectedContent);

        // click link 'index'
        $linkText = ' index';
        $link = $crawler->selectLink($linkText)->link();

        // act
        $client->click($link);
        $content = $client->getResponse()->getContent();
        $contentLowerCase = strtolower($content);

        // aassert
        $this->assertContains($expectedContentLower, $contentLowerCase);

    }

}