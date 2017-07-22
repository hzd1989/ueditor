<?php 

\think\Route::get('test/[:id]', "\\hzd\\ueditor\\UeditorController@index");

function test_composer(){
	return 'test_composer';
}