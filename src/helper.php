<?php 

\think\Route::get('test/[:id]', "\\hzd\\ueditor\\UeditorController@index");

function test_composer(){
	return 'test_composer';
}

function ueditor($element,$width,$height,$name,$config){
	$config = [
		'textarea' => $name,
		'initialFrameWidth' => $width,
		'initialFrameHeight' => $height
	];
	$html = '<script type="text/javascript" charset="utf-8" src="'.__DIR__.'/ueditor1.4.3/ueditor.config.js"></script>';
	$html .= '<script type="text/javascript" charset="utf-8" src="'.__DIR__.'/ueditor1.4.3/ueditor.all.min.js"></script>';
	$html .= '<script type="text/javascript" charset="utf-8" src="'.__DIR__.'/ueditor1.4.3/lang/zh-cn/zh-cn.js"></script>';
	$html .= '<script id="'.$element.'" type="text/plain"></script>';
	$html .= '<script>';
	$html .= 'var ue = UE.getEditor("'.$element.'",'.json_encode($config).')';
	$html .= '</script>';
	return $html;
}