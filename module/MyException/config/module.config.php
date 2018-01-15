<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'MyException\Controller\MyException' => 'MyException\Controller\MyExceptionController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'my-exception' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/myException',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'MyException\Controller',
                        'controller'    => 'MyException',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Log\Logger' => function($sm){
                $logger = new Zend\Log\Logger;
                $writer = new Zend\Log\Writer\Stream('./data/log/'.date('Y-m-d').'-error.log');
                 
                $logger->addWriter($writer);  
                 
                return $logger;
            },
        ),
    ),
     'view_manager' => array(
        'exception_template'       => 'error/index',
        'template_map' => array(
            'error/index'             => __DIR__ . '/../view/error/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
