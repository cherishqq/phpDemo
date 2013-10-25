<?php

// 项目的配置文件


$config1 = array(
		/* 数据库设置 */
		'DB_TYPE' => 'mysql', // 数据库类型
		'DB_HOST' => 'localhost',
		'DB_NAME' => 'zhiphp',
		'DB_USER' => 'root',
		'DB_PWD' => '',
		'DB_PREFIX' => 'think_',
	//	'DB_DSN' => 'mysql://root@localhost:3306/thinkphp',  不能同时拥有这个和上面几个
		'SHOW_PAGE_TRACE' => FALSE,
		'TOKEN_ON' => true, // 是否开启令牌验证
		'TOKEN_NAME' => '__hash__', // 令牌验证的表单隐藏字段名称
		'TOKEN_TYPE' => 'md5', //令牌哈希验证规则 默认为MD5
		'TOKEN_RESET' => FALSE, //令牌验证出错后是否重置令牌 默认为true
		/* 开发人员相关信息 */
		'AUTHOR_INFO' => array(
				'author' => 'leo.li',
				'author_email' => '281978297@qq.com',
		),
);

return $config1;

/**
return array(
		// '配置参数'     => '配置值',
		// 更多配置参数
		//..
);
**/

?>