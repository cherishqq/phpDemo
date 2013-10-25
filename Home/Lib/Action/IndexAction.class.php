<?php

namespace Lib\Action;

// 文件名是否要加.class , 还是 IndexAction.php 就可以了
// 会自动生成 namespace Lib\Action; 要把这句话去掉
// 不需要 使用Home 就可以访问到, 因为这个是默认的
// http://localhost/phpDemo/index.php/Index/index

class IndexAction  extends Action {
	
	public function index(){
		echo 'hello,world!';
	}
	
}

?>