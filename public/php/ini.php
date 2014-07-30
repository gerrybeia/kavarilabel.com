<?php 
    
    /* REQUEST - REDIRECTOR - SESSION - LAYOUT - ENTITY MANAGER
    =================================================================== */

    $this->fcR = Zend_Controller_Front::getInstance()->getRequest();
    $this->red = $this->_helper->getHelper('Redirector');
    $this->userSession = new Zend_Session_Namespace('user');
    $this->layout = Zend_Layout::getMvcInstance();
    $this->req = new Zend_Controller_Request_Http();
    $this->mess = $this->_helper->getHelper('FlashMessenger');
    $this->em = Zend_Registry::get('em');

    $this->view = $this->layout->getView();
    $this->view->userSession = $this->userSession;

    $this->view->addScriptPath(APPLICATION_PATH."/layouts/partials/");

    
    
?>