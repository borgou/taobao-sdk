<?php

/**
 * 新增和修改大包小包号;新增和修改的时候必填
 * @author auto create
 */
class HandoverContentUpdateParcelDTO
{
	
	/** 
	 * 小包对应的店铺账号;比如cnxxxx;填入补充相关信息性能更好
	 **/
	public $login_id;
	
	/** 
	 * 小包的LP号,必填;
	 **/
	public $lp_code;
	
	/** 
	 * 小包对应的店铺id;填入相关信息性能更好
	 **/
	public $seller_id;	
}
?>