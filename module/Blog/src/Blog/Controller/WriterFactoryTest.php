<?php
/**
 * WriterFactory test case.
 */
class WriterFactoryTest extends \PHPUnit\Framework\TestCase
{

    /**
     *
     * @var WriterFactory
     */
    private $writerFactory;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated WriterFactoryTest::setUp()
        
        $this->writerFactory = new WriterFactory(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated WriterFactoryTest::tearDown()
        $this->writerFactory = null;
        
        parent::tearDown();
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
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests WriterFactory->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated WriterFactoryTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->writerFactory->__construct(/* parameters */);
    }

    /**
     * Tests WriterFactory->__invoke()
     */
    public function test__invoke()
    {
        // TODO Auto-generated WriterFactoryTest->test__invoke()
        $this->markTestIncomplete("__invoke test not implemented");
        
        $this->writerFactory->__invoke(/* parameters */);
    }

    /**
     * Tests WriterFactory->createService()
     */
    public function testCreateService()
    {
        // TODO Auto-generated WriterFactoryTest->testCreateService()
        $this->markTestIncomplete("createService test not implemented");
        
        $this->writerFactory->createService(/* parameters */);
    }

    /**
     * Tests WriterFactory->setCreationOptions()
     */
    public function testSetCreationOptions()
    {
        // TODO Auto-generated WriterFactoryTest->testSetCreationOptions()
        $this->markTestIncomplete("setCreationOptions test not implemented");
        
        $this->writerFactory->setCreationOptions(/* parameters */);
    }
}

