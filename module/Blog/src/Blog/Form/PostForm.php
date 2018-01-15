<?php
 // Filename: /module/Blog/src/Blog/Form/PostForm.php
 namespace Blog\Form;

 use Zend\Form\Form;

 use Zend\Captcha;
 use Zend\Captcha\AdapterInterface as CaptchaAdapter;
 class PostForm extends Form
 {
     public function __construct($name = null, $options = array())
     {
         parent::__construct($name, $options);

         $this->add(array(
             'name' => 'post-fieldset',
             'type' => 'Blog\Form\PostFieldset',
             'options' => array(
                 'use_as_base_fieldset' => true
             )
         ));

         $this->add(array(
             'name' => 'captha',
             'type' => 'Zend\Form\Element\Captcha',
             'options' => array(
                'label' => "Please verify captcha",
                'captcha' => new Captcha\Dumb()
             )
         ));

         $this->add(array(
             'type' => 'submit',
             'name' => 'submit',
             'attributes' => array(
                 'value' => 'Insert new Post'
             )
         ));
     }
 }