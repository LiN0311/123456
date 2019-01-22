<?php

class PersonController extends Zend_Controller_Action
{

    protected $_thisUser = null;

    public function init()
    {
        /* Initialize action controller here */

		     // check auth and get user
    		if(Zend_Auth::getInstance()->hasIdentity()){
    			$mapper = new Application_Model_Mappers_RawUser();
    			$this->_thisUser = $mapper->fetchSingleById(Zend_Auth::getInstance()->getStorage()->read()->ID);
    			$this->view->thisUser = $this->_thisUser;
    		}
    }

    public function indexAction()
    {

    }

    public function listAction()
    {
        // action body

		// if already logged in otherwise redirect to start page
		if(!$this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'index', 'action' => 'index', null), 'default', true));

		// create mapper for model person
		$mapper = new Application_Model_Mappers_RawPerson();

		// get all user from table RAW_USER via mapper
		$rows = $mapper->fetchList();

		// pass the results to the view
		$this->view->persons   = $rows;

		// now you can work with the array 'users' in
		// the view SUPERAPP\application\views\scripts\user\list.phtml
		// (and in all other views :-))
    }

    public function viewAction()
    {
        // action body

    // if already logged in otherwise redirect to start page
  if(!$this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'index', 'action' => 'index', null), 'default', true));

    // create mapper for model person
    $mapper = new Application_Model_Mappers_RawPerson();

    // get id from querystring
    $id = $this->getRequest()->getParam('id');

    // if id is not avaliable redirect to person list
    if(!$id) $this->redirect($this->getHelper('url')->url(array('controller' => 'person', 'action' => 'list', null), 'default', true));

    // get data from database via mapper
    $row = $mapper->fetchSingleById($id);

    if (!$row){
      return $this->_redirect($this->getHelper('url')->url(array('controller' => 'person', 'action' => 'list', null), 'default', true));
    }

    // pass the results to the view
    $this->view->person = $row;

    // now you can work with the array 'person' in
    // the view SUPERAPP\application\views\scripts\person\view.phtml
    // (and in all other views :-))
    }

}
