<?php
namespace  App\Validator;

use ezswoole\Validator;

/**
 * 地区验证
 *
 *
 *
 *
 * @copyright  Copyright (c) 2019 MoJiKeJi Inc. (http://www.fashop.cn)
 * @license    http://www.fashop.cn
 * @link       http://www.fashop.cn
 * @since      File available since Release v1.1
 */
class Area extends Validator
{
	//验证
	protected $rule = [
		'level'     => 'between:0,3',
	];
	//提示
	protected $message = [
		'level.between'     => '层级必须在0-3之间',
	];
	//场景
	protected $scene = [
		'list' => [
			'level',
		],
	];

}