<?php

class Diarios_IndexController extends Zend_Controller_Action
{

    public function init()
    {
		$uri = $this->_request->getPathInfo();    	
		$activeNav = $this->view->navigation()->findByUri($uri);
		$activeNav->active = true;
		$activeNav->setClass("active");	
    }
	

    public function indexAction()
    {
    	$usersModel = new Model_Diary();
        $this->view->users = $usersModel->getUsers();
        
        $this->_helper->layout()->setLayout('layout_diarios');
        
        //$createSnippet = $this->view->render('/default/index/_sidebar.phtml');
        //$this->view->layout()->sideCol = $createSnippet ;

	}
    

}

