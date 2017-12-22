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
    private $toDelete;

    public function __construct()
    {
        $this->client = new GuzzleHttp\Client(['http_errors' => false]);
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
     * @param PyStringNode $string
     */
    public function wantToAdd(PyStringNode $string)
    {
        $this->electronic = $string;
    }

    /**
     * @Then Want to update with:
     * @param PyStringNode $string
     */
    public function wantToUpdateWith(PyStringNode $string)
    {
        $this->electronic = $string;;
    }



    /**
     * @When /^I request "(GET|PUT|POST|DELETE|PATCH) ([^"]*)"$/
     * @param $httpMethod
     * @param $resource
     */
    public function iRequest($httpMethod, $resource)
    {
        switch ($httpMethod) {
            case "POST":

                $this->response = $this->client->post('http://localhost:8000' . $resource,
                    ['body' => $this->electronic]);
                $this->toDelete = $this->response->getHeader('Location')[0] ?? false;
                break;
            case "DELETE":

                $this->response = $this->client->delete($this->toDelete);
                break;
            case "PUT":

                $this->response = $this->client->put($this->toDelete,
                    ['body' => $this->electronic]);
                break;
            case "GET":
                $this->response = $this->client->request($httpMethod, 'http://localhost:8000' . $resource);
                break;
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
        $this->count++;
        $response = $this->client->request("GET", 'http://localhost:8000/electronics');
        $count = count(json_decode($response->getBody()->getContents()));
        PHPUnit_Framework_Assert::assertEquals(
            $this->count, $count
        );
    }


    /**
     * @Then And I should have one less electronic
     */
    public function andIShouldHaveOneLessElectronic()
    {
        $this->count--;
        $response = $this->client->request("GET", 'http://localhost:8000/electronics');
        $count = count(json_decode($response->getBody()->getContents()));
        PHPUnit_Framework_Assert::assertEquals(
            $this->count, $count
        );
    }
    /**
     * @Then And I should have same number of electronics
     */
    public function andIShouldHaveSameNumberOfElectronics()
    {
        $response = $this->client->request("GET", 'http://localhost:8000/electronics');
        $count = count(json_decode($response->getBody()->getContents()));
        PHPUnit_Framework_Assert::assertEquals(
            $this->count, $count
        );
    }

}
