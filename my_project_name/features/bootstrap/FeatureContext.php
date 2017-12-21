<?php

use Behat\Gherkin\Node\PyStringNode;
use Behat\Behat\Context\Context;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    private $count;
    private $client;
    private $electronic;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client();
    }

    /**
     * @Given I have the current electronics:
     */
    public function iHaveTheCurrentElectronics()
    {
        $response = $this->client->request("GET", 'http://localhost:8000/electronics');
        $this->count = count(json_decode($response->getBody()->getContents()));
    }

    /**
     * @Given want to add :
     */
    public function wantToAdd(PyStringNode $string)
    {
        $this->electronic = $string;
    }


    /**
     * @When /^I request "(GET|PUT|POST|DELETE|PATCH) ([^"]*)"$/
     * @param $httpMethod
     * @param $resource
     */
    public function iRequest($httpMethod, $resource)
    {
        if (isset($this->electronic)) {

            $this->response = $this->client->post('http://localhost:8000' . $resource,['body'=> $this->electronic]);

        } else {
            $this->response = $this->client->request($httpMethod, 'http://localhost:8000' . $resource);
        }
    }

    /**
     * @Then the response status code should be :statusCode
     * @param $statusCode
     */
    public function theResponseStatusCodeShouldBe($statusCode)
    {
        PHPUnit_Framework_Assert::assertEquals(
            $statusCode, $this->response->getStatusCode()
        );

    }

    /**
     * @Then the :contentType header should be :actualType
     * @param $contentType
     * @param $actualType
     */
    public function theHeaderShouldBe($contentType, $actualType)
    {
        PHPUnit_Framework_Assert::assertEquals(
            true, count($this->response->getHeaders()[$contentType]) != 0 ? true : false

        );
        PHPUnit_Framework_Assert::assertEquals(
            $actualType, $actualType, $this->response->getHeader($contentType)
        );

    }

    /**
     * @Then the body should contain :
     * @param PyStringNode $string
     */
    public function theBodyShouldContain(PyStringNode $string)
    {
        PHPUnit_Framework_Assert::assertEquals(
            json_decode($string), json_decode($this->response->getBody()->getContents())
        );

    }


    /**
     * @Then I should have one more electronic
     */
    public function iShouldHaveOneMoreElectronic()
    {
        $response = $this->client->request("GET", 'http://localhost:8000/electronics');
        $count = count(json_decode($response->getBody()->getContents()));
        PHPUnit_Framework_Assert::assertEquals(
            $this->count + 1, $count
        );
    }

}
