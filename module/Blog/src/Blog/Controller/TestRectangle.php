<?php
namespace AlbumTest\Controller;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * arrayUnique() test case.
 */
class TestRectangle extends AbstractHttpControllerTestCase
{

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated TestRectangle::setUp()
    }
    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/album');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Album');
        $this->assertControllerName('Album\Controller\Album');
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TestRectangle::tearDown()
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
        //$this->assertNotNull()
    }

    /**
     * Tests arrayUnique()
     */
    /* public function testArrayUnique()
    {
        // TODO Auto-generated TestRectangle->testArrayUnique
        $this->markTestIncomplete("arrayUnique() test not implemented");
        $arr = array('s' => 123);
        arrayUnique($arr,$arr);
    } */
}

