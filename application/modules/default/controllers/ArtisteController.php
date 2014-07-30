<?php

class ArtisteController extends Zend_Controller_Action
{
    public function init(){
        require_once APPLICATION_PUBLIC.'/php/ini.php';

    }

    /* LISTE DES ARTISTES
    ========================================================== */
    public function indexAction()
    {
        $this->view->hin = "msk";
    	$this->view->artistes = $this->em->getRepository('Entity\Artiste')->findAll();
	}

	/* CHAQUE ARTISTE
	========================================================== */
    public function viewAction(){
        $this->view->hin = "msk";
        $id = $this->fcR->getParam('id');

        $artiste = $this->em->find('Entity\Artiste',intval($id));

        if(is_null($artiste)) throw new Exception("Error Processing Request", 1);
        
        $this->view->artiste = $artiste;
    }
}

