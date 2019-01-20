<?php

class Application_Form_UserRegister extends Zend_Form{

    public function init(){
        /* Form Elements & Other Definitions Here ... */
		$this->setMethod('POST');
		$this->setAttrib('class', 'form-signin');

    /* Firstname*/
		$this->addElement('text', 'user_firstname', array(
            'required'       => true,
            'label'          => 'Firstname',
            'description'    => '',
            'class'          => 'form-control',
			      'id'			       => 'inputFirstname',
            'filters'        => array('StringTrim'),
			      'placeholder'  	 => 'First name',
			      'autofocus'	 	 => true,
        ));
    /*Lastname*/
		$this->addElement('text', 'user_lastname', array(
            'required'       => true,
            'label'          => 'Lastname',
            'description'    => '',
            'class'          => 'form-control',
			      'id'			 => 'inputLastname',
            'filters'        => array('StringTrim'),
      			'placeholder'	 => 'Last name',
      			'autofocus'		 => false,
        ));

    /*Email*/
		$this->addElement('text', 'user_email', array(
            'required'       => true,
            'label'          => 'Email',
            'description'    => '',
            'class'          => 'form-control',
			      'id'			       => 'inputEmail',
            'filters'        => array('StringTrim'),
      			'placeholder'	   => 'Email',
      			'autofocus'		   => false,
        ));

    /*Password*/
		$this->addElement('password', 'user_password', array(
            'required'       => true,
            'label'          => 'Passwort',
            'description'    => '',
            'class'          => 'form-control',
			      'id'			 => 'inputPassword',
            'filters'        => array('StringTrim'),
			      'placeholder'	 => 'Passwort'
        ));

		/* $this->addElement('checkbox', 'user_remember', array(
            'class'          => 'checkbox',
			'id'			 => '',
			'options' => array(
				'label'      			=> 'A checkbox',
				'checked_value' 		=> 'good',
				'unchecked_value' 		=> 'bad'
			)
        )); */

        $this->addElement('Submit', 'user_submit', array(
            'label'         => 'Anmelden',
			      'class'         => 'btn btn-primary form-control',
        ));

		// remove decorators
		foreach($this->getElements() as $elem) {
			$elem->setDecorators(array(
			  array('ViewHelper'),
				array('Errors')
			));
		}

        /* $this->getElement('user_nickname')->getDecorator('Description')
            ->setOption('placement', 'prepend');
        $this->getElement('user_password')->getDecorator('Description')
            ->setOption('placement', 'prepend'); */
    }
}
