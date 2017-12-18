<?php

use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use AppBundle\Entity\Electronic;
use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{

    /**
     * @Given I have the electronics:
     */
    public function iHaveTheElectronics(PyStringNode $string)
    {
        throw new PendingException();
    }

    /**
     * @When /^I request "(GET|PUT|POST|DELETE|PATCH) ([^"]*)"$/
     */
    public function iRequest($httpMethod, $resource)
    {
        // ...
    }

    /**
     * @Then the response status code should be :arg1
     */
    public function theResponseStatusCodeShouldBe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the :arg1 header should be :arg2
     */
    public function theHeaderShouldBe($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then the body should contain :
     */
    public function theBodyShouldContain(PyStringNode $string)
    {
        throw new PendingException();
    }

}
