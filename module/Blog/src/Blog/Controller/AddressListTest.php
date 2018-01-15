<?php

/**
 * AddressList test case.
 */
class AddressListTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var AddressList
     */
    public function testIndexActionCanBeAccessed()
    {
        $this->dispatch('/album');
        $this->assertResponseStatusCode(200);
        
        $this->assertModuleName('Album');
        $this->assertControllerName('Album\Controller\Album');
        $this->assertControllerClass('AlbumController');
        $this->assertMatchedRouteName('album');
    }
    private $addressList;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated AddressListTest::setUp()
        
        $this->addressList = new AddressList(/* parameters */);
    }
    
    public function testIndexActionCanBeAccessed()
    {
        $this->assertResponseStatusCode(200);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated AddressListTest::tearDown()
        $this->addressList = null;
        
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
     * Tests AddressList->add()
     */
    public function testAdd()
    {
        // TODO Auto-generated AddressListTest->testAdd()
        $this->markTestIncomplete("add test not implemented");
        
        $this->addressList->add(/* parameters */);
    }

    /**
     * Tests AddressList->addMany()
     */
    public function testAddMany()
    {
        // TODO Auto-generated AddressListTest->testAddMany()
        $this->markTestIncomplete("addMany test not implemented");
        
        $this->addressList->addMany(/* parameters */);
    }

    /**
     * Tests AddressList->addFromString()
     */
    public function testAddFromString()
    {
        // TODO Auto-generated AddressListTest->testAddFromString()
        $this->markTestIncomplete("addFromString test not implemented");
        
        $this->addressList->addFromString(/* parameters */);
    }

    /**
     * Tests AddressList->merge()
     */
    public function testMerge()
    {
        // TODO Auto-generated AddressListTest->testMerge()
        $this->markTestIncomplete("merge test not implemented");
        
        $this->addressList->merge(/* parameters */);
    }

    /**
     * Tests AddressList->has()
     */
    public function testHas()
    {
        // TODO Auto-generated AddressListTest->testHas()
        $this->markTestIncomplete("has test not implemented");
        
        $this->addressList->has(/* parameters */);
    }

    /**
     * Tests AddressList->get()
     */
    public function testGet()
    {
        // TODO Auto-generated AddressListTest->testGet()
        $this->markTestIncomplete("get test not implemented");
        
        $this->addressList->get(/* parameters */);
    }

    /**
     * Tests AddressList->delete()
     */
    public function testDelete()
    {
        // TODO Auto-generated AddressListTest->testDelete()
        $this->markTestIncomplete("delete test not implemented");
        
        $this->addressList->delete(/* parameters */);
    }

    /**
     * Tests AddressList->count()
     */
    public function testCount()
    {
        // TODO Auto-generated AddressListTest->testCount()
        $this->markTestIncomplete("count test not implemented");
        
        $this->addressList->count(/* parameters */);
    }

    /**
     * Tests AddressList->rewind()
     */
    public function testRewind()
    {
        // TODO Auto-generated AddressListTest->testRewind()
        $this->markTestIncomplete("rewind test not implemented");
        
        $this->addressList->rewind(/* parameters */);
    }

    /**
     * Tests AddressList->current()
     */
    public function testCurrent()
    {
        // TODO Auto-generated AddressListTest->testCurrent()
        $this->markTestIncomplete("current test not implemented");
        
        $this->addressList->current(/* parameters */);
    }

    /**
     * Tests AddressList->key()
     */
    public function testKey()
    {
        // TODO Auto-generated AddressListTest->testKey()
        $this->markTestIncomplete("key test not implemented");
        
        $this->addressList->key(/* parameters */);
    }

    /**
     * Tests AddressList->next()
     */
    public function testNext()
    {
        // TODO Auto-generated AddressListTest->testNext()
        $this->markTestIncomplete("next test not implemented");
        
        $this->addressList->next(/* parameters */);
    }

    /**
     * Tests AddressList->valid()
     */
    public function testValid()
    {
        // TODO Auto-generated AddressListTest->testValid()
        $this->markTestIncomplete("valid test not implemented");
        
        $this->addressList->valid(/* parameters */);
    }
}

