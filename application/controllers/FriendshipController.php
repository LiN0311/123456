<?php

class FriendshipController extends Zend_Controller_Action
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

		// create mapper for model friendship
		//$mapper = new Application_Model_Mappers_MapFriendship();

		// get all user from table RAW_USER via mapper
		//$rows = $mapper->fetchList();

		// pass the results to the view
		$this->view->friendships   = $rows;

		// now you can work with the array 'users' in
		// the view SUPERAPP\application\views\scripts\user\list.phtml
		// (and in all other views :-))
    }

    public function viewAction()
    {
        // action body

    // if already logged in otherwise redirect to start page
  if(!$this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'index', 'action' => 'index', null), 'default', true));

    // create mapper for model friendship
    $mapper = new Application_Model_Mappers_MapFriendship();

    // get id from querystring
    $id = $this->getRequest()->getParam('id');

    // if id is not avaliable redirect to friendship list
    if(!$id) $this->redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'list', null), 'default', true));

    // get data from database via mapper
    $row = $mapper->fetchSingleById($id);

    if (!$row){
      return $this->_redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'list', null), 'default', true));
    }

    // pass the results to the view
    $this->view->friendship = $row;

    // now you can work with the array 'friendship' in
    // the view SUPERAPP\application\views\scripts\friendship\view.phtml
    // (and in all other views :-))
    }

    public function createAction()
    {

    //$mapper = new Application_model_mapper_MapFriendship();

    $form = new Application_Form_FriendshipRequest();

    $this->view->form = $form;

        // action body

    // if is NOT already done - then he can request
    // and create a new friendship
    // otherwise he already is a friend: then redirect to user dashboard or wherever you want
    if($this->_thisFriendship) $this->_redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'dashboard', null), 'default', true));
    }

    public function updateAction()
    {
      $form = new Application_Form_FriendshipConfirm();

      $this->view->form = $form;
        // action body

    // when user is logged in
    // then he can confirm the request
    //if(!$this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'index', 'action' => 'index', null), 'default', true));
    if($this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'dashboard', null), 'default', true));
    }

    public function deleteAction()
    {
      $form = new Application_Form_FriendshipDelete();

      $this->view->form = $form;
        // action body

    // only when user is logged in
    // otherwise redirect him to the start page
    if(!$this->_thisUser) $this->_redirect($this->getHelper('url')->url(array('controller' => 'index', 'action' => 'index', null), 'default', true));

    // create mapper for model friendship
    $mapper = new Application_Model_Mappers_MapFriendship();

    // get id from querystring
        $id = $this->getRequest()->getParam('id');

    // if id is not avaliable redirect to friendship list
    if(!$id) $this->redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'list', null), 'default', true));

    // get data from database via mapper
    $row = $mapper->fetchSingleById($id);

    // when friendship not found in database then return to friendship list
    if (!$row){
      return $this->_redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'list', null), 'default', true));
    }

    // get formular=request data
    $data = $this->getRequest()->getPost();

    // check, if formular has data AND has been submitted
    if(!empty($data) && !is_null($data['friendship_submit'])){
      // then delete friendship
      $mapper->delete($id);

      // and return to friendship list
      return $this->_redirect($this->getHelper('url')->url(array('controller' => 'friendship', 'action' => 'index'), 'default', true));
    }

    // --> if you reach this point, no formular has been shown
    // or submitted - so do it now

    // create new formular for deletion
    $form = new Application_Form_FriendshipDelete();

    // fill in the friendship data into the formular fields
    $form->setDefaults($row->toArray());

    //$form->setAction($this->getHelper('url')->url(array('id' => $id)));

    // pass the results to the view
    $this->view->friendship = $row;
    $this->view->form = $form;

    // now you can work with the array 'friendship' and the variabel 'form'
    // ('form' contains the complete HTML-code of the formular which is
    // set in the file SUPERAPP\application\forms\FriendshipDelete.php)
    // in the view SUPERAPP\application\views\scripts\friendship\delete.phtml
    // (and in all other views :-))
    }

}
