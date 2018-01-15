<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/MyException for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace MyException;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Log\Logger;
use Zend\Log\Write\Stream;

class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
		    // if we're in a namespace deeper than one level we need to fix the \ in the path
                    __NAMESPACE__ => __DIR__ . '/src/' . str_replace('\\', '/' , __NAMESPACE__),
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function onBootstrap(MvcEvent $e)
    {
      //  $eventManager        = $e->getApplication()->getEventManager();
      //  $eventManager->attach('dispatch', array($this, 'loadConfiguration' ), 100);
       
        $application   = $e->getApplication();
        $sm = $application->getServiceManager();
        $sharedManager = $application->getEventManager()->getSharedManager();
         
        $sharedManager->attach('Zend\Mvc\Application', 'dispatch.error',
             function($e) use ($sm) {
                if ($e->getParam('exception')){
                    $sm->get('Zend\Log\Logger')->crit($e->getParam('exception')->getMessage());
                    $url = $e->getRouter()->assemble(array(), array('name' => 'application'));
            
                $response=$e->getResponse();
                $response->getHeaders()->addHeaderLine('Location', $url);
                $response->setStatusCode(302);
                $response->sendHeaders();
                }
             }
        );
    }

    public function loadConfiguration(MvcEvent $e)
    {

/*    $sm  = $e->getApplication()->getServiceManager();
        /*print_r($e->getMessage());
        exit();
        $controller = $e->getRouteMatch()->getParam('controller');
        if (0 !== strpos($controller, __NAMESPACE__, 0)) {
            //if not this module
            return;
        }

        //if this module
    $exceptionstrategy = $sm->get('ViewManager')->getExceptionStrategy();
    $exceptionstrategy->setExceptionTemplate('error/errorcustom');*/
    }
}
