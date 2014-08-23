<?php 

class Schieben_View_Helper_ShowSong extends Zend_View_Helper_Abstract
{
    public $view;
 	
 	public function showSong($v){
 		return '
		
		<div class="row-fluid song">
			<div class="span5">'.substr($v->getNom(),0,38).'</div>
			<div class="span3">
				<div class="badge badge-info">
					<i class="icon-play"></i> '.$v->getEcoutes()->count().'
				</div>
				<div class="badge badge-success">
					<i class="icon-download-alt"></i> '.$v->getDown().'
				</div>
			</div>

			<div class="span4">

				<button class="btn btn-mini"
				onclick="toplay(\''.$this->view->url(array('id'=>$v->getId()),'toplay',true).'\')">
					<i class="icon-play"></i> play
				</button>
				
				<button class="btn btn-mini" 
				onclick="add(\''.$this->view->url(array('id'=>$v->getId()),'toplaylist',true).'\')">
					<i class="icon-plus"></i> playlist
				</button>
				
				<a href="'.$this->view->url(array('id'=>$v->getId()),'download',true).'" class="btn btn-mini btn-success"><i class="icon-download-alt"></i></a>
				
			</div>
		</div>

 		';
 	}

    public function setView(Zend_View_Interface $view)
    {
        $this->view = $view;
    }
}