<?php 

class Schieben_View_Helper_ShowMessages extends Zend_View_Helper_Abstract
{
    public $view;
 	
 	/* SHOWS FLASH MESSAGES */

 	public function showMessages(){
 		
 		$m = '';
 		if ($this->view ->messages != null && !isset($this->userSession->temp)) 
	    {
	    	foreach ($this->view ->messages as $key => $value) 
	      	{
	        	foreach ($value as $key => $v){
	        		$m .= '
					<div class="alert alert-'.$key.'">'.$v.'</div>
	        		';
	       		}
	      	}
	    }
 		return $m;
 	}

    public function setView(Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}