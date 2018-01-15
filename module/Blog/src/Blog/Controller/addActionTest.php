<?php

/**
 * addAction test case.
 */

class addActionTest extends \PHPUnit\Framework\TestCase
{

    /**
     *
     * @var addAction
     */
    private $addAction;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated addActionTest::setUp()
        
        $this->addAction = new addAction(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated addActionTest::tearDown()
        $this->addAction = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
        $this->assertResponseStatusCode(200);

    }
    public function testabc() {
        $this->assertResponseStatusCode(200);

    }
}

