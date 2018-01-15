<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/MyException for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace MyException\Controller;

use Zend\Mvc\Controller\AbstractActionController;



class MyExceptionController extends AbstractActionController
{
    public function indexAction()
    {
         $logger = new Logger();
        $write = new \Zend\Log\Writer\Stream('./data/log/teste.log');
        $logger->addWriter($write);
        $logger->log(Logger::INFO, "LOG MESSAGE");
        $logger->info('Infor msg');
        /*
        $logger = new Logger();
        $write = new Zend\Log\Writer\Stream('php://output');

        $logger->addWriter($write);
        exit();
        $logger->log(Logger::INFO, "LOG MESSAGE");
        $logger->info('Infor msg');*/
        return array();
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /myException/my-exception/foo
        return array();
    }
}
