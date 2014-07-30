<?php

class MusicController extends Zend_Controller_Action
{
    public function init(){
        require_once APPLICATION_PUBLIC.'/php/ini.php';
    }
    public function viewAction()
    {
        $file = APPLICATION_PUBLIC."/music/timesvisit.txt";
        $current = file_get_contents($file);
        $current = intval($current);
        $current += 1;
        file_put_contents($file, $current);
    }
    public function downloadAction(){
    	
        $id = $this->fcR->getParam('id');

        if($id=='1'){
            $file = APPLICATION_PUBLIC."/music/times.txt";
            $current = file_get_contents($file);
            $current = intval($current);
            $current += 1;
            file_put_contents($file, $current);

            $file = APPLICATION_PUBLIC."/music/parrapport.mp3"; 
            $filename = "parrapport.mp3";
            header ("Content-type: octet/stream"); 
            header ("Content-disposition: attachment; filename=".$filename.";"); 
            header ("Content-Length: ".filesize($file)); 
            readfile($file); 
            exit;
        }
        if($id=='2'){
            $file = APPLICATION_PUBLIC."/music/timestr.txt";
            $current = file_get_contents($file);
            $current = intval($current);
            $current += 1;
            file_put_contents($file, $current);

            $file = APPLICATION_PUBLIC."/music/tableronde.mp3"; 
            $filename = "tableronde.mp3";
            header ("Content-type: octet/stream"); 
            header ("Content-disposition: attachment; filename=".$filename.";"); 
            header ("Content-Length: ".filesize($file)); 
            readfile($file); 
            exit;
        }
        
    }
}

