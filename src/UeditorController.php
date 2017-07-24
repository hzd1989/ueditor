<?php 
namespace hzd\ueditor;

use Think\Controller;

class UeditorController extends Controller
{
	
	public function index($id = "")
    {
        echo $id;
    	$tpl = dirname(__FILE__).'/view/index.html';
        return $this->fetch($tpl);
    }
	
}

