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
}
