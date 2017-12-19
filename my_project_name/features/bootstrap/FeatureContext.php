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
<<<<<<< HEAD

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

=======
    private $table;
    private  $currentCount;

    /**
     * @Given there are electronics:
     */
    public function thereAreElectronics(TableNode $table)
    {
        $this->table=$table->;
        
    }

    /**
     * @When I add a new one :arg1 to electronics
     */
    public function iAddANewOneToElectronics($arg1)
    {
        $this->table->addRow()
    }

    /**
     * @Then I should have :arg1 more electronic in electronics
     */
    public function iShouldHaveMoreElectronicInElectronics($arg1)
    {
        throw new PendingException();
    }
>>>>>>> 0c3df5406102d4009c6765f8ea2f4f4ce8be3134
}
