<?php

/**
 * ControllerManager test case.
 */
class TestRectangle extends  \PHPUnit\Framework\TestCase
{

    /**
     *
     * @var ControllerManager
     */
    private $controllerManager;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated TestRectangle::setUp()
        
        $this->controllerManager = new ControllerManager(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TestRectangle::tearDown()
        $this->controllerManager = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests ControllerManager->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated TestRectangle->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->controllerManager->__construct(/* parameters */);
    }

    /**
     * Tests ControllerManager->validate()
     */
    public function testValidate()
    {
        // TODO Auto-generated TestRectangle->testValidate()
        $this->markTestIncomplete("validate test not implemented");
        
        $this->controllerManager->validate(/* parameters */);
    }

    /**
     * Tests ControllerManager->validatePlugin()
     */
    public function testValidatePlugin()
    {
        // TODO Auto-generated TestRectangle->testValidatePlugin()
        $this->markTestIncomplete("validatePlugin test not implemented");
        
        $this->controllerManager->validatePlugin(/* parameters */);
    }

    /**
     * Tests ControllerManager->injectEventManager()
     */
    public function testInjectEventManager()
    {
        // TODO Auto-generated TestRectangle->testInjectEventManager()
        $this->markTestIncomplete("injectEventManager test not implemented");
        
        $this->controllerManager->injectEventManager(/* parameters */);
    }

    /**
     * Tests ControllerManager->injectConsole()
     */
    public function testInjectConsole()
    {
        // TODO Auto-generated TestRectangle->testInjectConsole()
        $this->markTestIncomplete("injectConsole test not implemented");
        
        $this->controllerManager->injectConsole(/* parameters */);
    }

    /**
     * Tests ControllerManager->injectPluginManager()
     */
    public function testInjectPluginManager()
    {
        // TODO Auto-generated TestRectangle->testInjectPluginManager()
        $this->markTestIncomplete("injectPluginManager test not implemented");
        
        $this->controllerManager->injectPluginManager(/* parameters */);
    }

    /**
     * Tests ControllerManager->injectServiceLocator()
     */
    public function testInjectServiceLocator()
    {
        // TODO Auto-generated TestRectangle->testInjectServiceLocator()
        $this->markTestIncomplete("injectServiceLocator test not implemented");
        
        $this->controllerManager->injectServiceLocator(/* parameters */);
    }
}

