<?php

namespace AlbumTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Zend\Test\PHPUnit\Controller;

class AlbumControllerTest extends \PHPUnit\Framework\TestCase
{
	private $me;
    public function setUp()
    {

		$sjk = new AbstractControllerTestCase();
		
		/*$sjk->setApplicationConfig(
            include '/var/www/zendProject/config/application.config.php'
        );
        parent::setUp();*/
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
}