<?php

//namespace Lib\Action;

// 文件名是否要加.class , 还是 IndexAction.php 就可以了
// 会自动生成 namespace Lib\Action; 要把这句话去掉
// 不需要 使用Home 就可以访问到, 因为这个是默认的
// http://localhost/phpDemo/index.php/Index/index

// 普通模式、PATHINFO、REWRITE和兼容模式
 //  普通模式 (http://localhost/app/?m=module&a=action&var=value)
 //http://localhost/phpDemo/?m=Index&a=index (要注意大小写啊, 多模块的时候怎么写)
// PATHINFO模式  (http://localhost/app/index.php/module/action/var/value/)
// http://localhost/phpDemo/index.php/Index/index/var/value/
// 'URL_PATHINFO_DEPR'=>'-', // 更改PATHINFO参数分隔符  那么就是 http://localhost/app/index.php/module-action-var-value/
// REWRITE 可以去掉URL地址里面的入口文件index.php
// 兼容模式
// http://localhost/app/?s=/module/action/var/value/

class IndexAction  extends Action {
	
	public function index(){
// 		echo 'hello,world!';   这样为什么会在 前台 展示呢,他是使用了 什么模板？

		$this->name = 'thinkphp'; // 进行模板变量赋值
		$this->display();   // 这样会自动使用index.html 模板
	}
	
	public function show() {

		/**
		 * 好方便的说,这样几行语句就可以搞定了
		 */
		
		$Data  = M('Data');  
		$this->data = $Data->select();
		$this->display(); 
		
		
	}
	
	
}

?>