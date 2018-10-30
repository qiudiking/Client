<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/18
 * Time: 22:52
 */

namespace AtServer;




abstract class ClientServerBase {
	/**
	 * @var \AtServer\Result
	 */
	public $result;
	public function __construct() {
	}
	public function init(){
		$this->result=Result::Instance();
	}
}