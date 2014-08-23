<?php 

class Schieben_View_Helper_InsertImg extends Zend_View_Helper_Abstract
{
    public $view;
 	
 	public function insertImg($c,$src){
 		return '<img class="'.$c.'" src="'.$this->view->baseUrl('/public/img/'.$src).'" alt="">';
 	}

    public function setView(Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}