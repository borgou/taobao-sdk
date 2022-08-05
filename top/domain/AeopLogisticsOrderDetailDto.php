<?php

/**
 * result
 * @author auto create
 */
class AeopLogisticsOrderDetailDto
{
	
	/** 
	 * batchId
	 **/
	public $batch_id;
	
	/** 
	 * 渠道编码
	 **/
	public $channel_code;
	
	/** 
	 * 物流单超时关单时间（1.从物流单创建时间起，30天内可以查询到该字段； 2. 仅支持4PL线上创建的物流单查询超时关单时间）
	 **/
	public $close_time;
	
	/** 
	 * gmtCreate
	 **/
	public $gmt_create;
	
	/** 
	 * 国际运单号
	 **/
	public $international_logistics_num;
	
	/** 
	 * 物流服务编码
	 **/
	public $international_logistics_type;
	
	/** 
	 * 运费
	 **/
	public $logistics_fee;
	
	/** 
	 * 多币种运费list
	 **/
	public $logistics_fee_list;
	
	/** 
	 * 物流订单号
	 **/
	public $logistics_order_id;
	
	/** 
	 * 物流服务列表
	 **/
	public $logistics_service_list;
	
	/** 
	 * 物流订单状态
	 **/
	public $logistics_status;
	
	/** 
	 * outOrderCode(Lpnumber)
	 **/
	public $out_order_code;
	
	/** 
	 * 解决方案code
	 **/
	public $solution_code;
	
	/** 
	 * tradeOrderId
	 **/
	public $trade_order_id;	
}
?>