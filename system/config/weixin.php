<?php

$config['language_characteristic'] = array(
	// 某些动作的确认指令
	'ok' => array(
		'好', '好的', '是', '是的', '恩', '可', '可以', '行', '行啊', '中', '要', '哦', '嗯', '确认', '确定', 'yes', '更多'
	),
	
	// 某些动作提示的取消指令
	'cancel' => array(
		'不', '不要', '别', '算了', '取消', 'no', '否', "don't"
	),
	
	// 脏话词语定义
	'bad' => array(
		'fuck', 'shit', '狗屎', '婊子', '贱', '你妈', '你娘', '你祖宗', '滚', '你妹', '日', '操', '靠', '干'
	),
);

// 信息类提示语句，可以修改左侧中文文字。
// 输入词语命令系统没有结果，微信返回信息
$config['help_message'] = "以下指令可以帮助您更好的利用微信公众号:\n\n绑定状态 - 查询微信绑定状态\n解除绑定 - 解除微信绑定\n我的问题 - 显示我的提问\n最新问题 - 显示最新提问\n最新通知 - 显示最新通知";

// 输入一个问题标题，微信返回提示信息都不是你要的结果，需要继续提交问题到社区里（需要绑定帐号）。这里的回复确认命令同最顶上的确认命令列表。
$config['publish_message'] = "您的问题没有人提到过, 需要帮忙么? 回复 '是' 提交问题到社区";

// 通过指定命令或者查询无结果的时候继续提问，完成之后微信回复提示信息
$config['publish_success_message'] = "您的问题已提交，晚点您可以输入 '我的问题' 查看";

// 脏话提示信息
$config['bad_language_message'] = "说脏话都不是好孩子!";

// 指令类默认设置，可以修改左侧中文指令，记得修改之后同时变更信息类提示里面的解释说明。

// 注册指令, 不区分大小写
$config['command_register'] = 'reg';

// 最新问题指令
$config['command_new'] = '最新问题';

// 热门问题指令
$config['command_hot'] = '热门问题';

// 推荐问题指令
$config['command_recommend'] = '推荐问题';

// 最新通知指令
$config['command_notifications'] = '最新通知';

// 我的问题指令
$config['command_my'] = '我的问题';

// 绑定状态指令
$config['command_bind_info'] = '绑定状态';

// 解除绑定指令
$config['command_unbind'] = '解除绑定';


/****** 微信自定义菜单选项 ******/

$config['app_id'] = '';
$config['app_secret'] = '';

$config['menu_items'] = array(
	'button' => array(
		array(
			'name' => '与我相关',
			'sub_button' => array(
				array(
					'type' => 'click',
					'name' => '最新动态',
					'key' => 'COMMAND_HOME_ACTIONS'
				),
				array(
					'type' => 'click',
					'name' => '我的提问',
					'key' => 'COMMAND_MY_QUESTION'
				),
				array(
					'type' => 'click',
					'name' => '我的通知',
					'key' => 'COMMAND_NOTIFICATIONS'
				),
			)
		),
		array(
			'name' => '全站内容',
			'sub_button' => array(
				array(
					'type' => 'click',
					'name' => '最新问题',
					'key' => 'COMMAND_NEW_QUESTION'
				),
				array(
					'type' => 'click',
					'name' => '热门问题',
					'key' => 'COMMAND_HOT_QUESTION'
				),
				array(
					'type' => 'click',
					'name' => '推荐问题',
					'key' => 'COMMAND_RECOMMEND_QUESTION'
				),
			)
		),
		array(
			'name' => '其他',
			'sub_button' => array(
				array(
					'type' => 'click',
					'name' => '关于我们',
					'key' => 'RULE_ABOUT_US'
				),
				array(
					'type' => 'click',
					'name' => '系统帮助',
					'key' => 'COMMAND_HELP'
				),
			)
		)
	)
);