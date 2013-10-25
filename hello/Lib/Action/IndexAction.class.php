<?php
class IndexAction extends Action{
	
	
	// http://localhost/phpDemo/hello/?m=Index&a=index
	
    public function index($name='ThinkPHP') {
        $this->hello    =   'Hello,'.$name.'！';
        $this->display();
    }
}