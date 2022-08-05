<?php

/**
 * 修改参数对象
 * @author auto create
 */
class OpenHandoverContentUpdateCommitRequest
{
	
	/** 
	 * 业务类型(选填)
	 **/
	public $biz_source;
	
	/** 
	 * 客户端标示(选填)
	 **/
	public $client;
	
	/** 
	 * 完成更新(必填)例如传入true则代表大包已经完成修改,不能再做修改的操作
	 **/
	public $complete_update;
	
	/** 
	 * 大包号;LP开头的单号(必填)
	 **/
	public $handover_content_code;
	
	/** 
	 * 语言(选填)
	 **/
	public $locale;
	
	/** 
	 * 新增和修改大包小包号;新增和修改的时候必填
	 **/
	public $parcel_order_list;
	
	/** 
	 * 更新类型:add、remove、commit;add新增parcel_order_list中小包,remove删除parcel_order_list中小包;commit,忽略parcel_order_list小包,将大包设置为完成组包状态,将大包信息下发给司机上门揽收
	 **/
	public $update_type;
	
	/** 
	 * 用户信息
	 **/
	public $user_info;	
}
?>