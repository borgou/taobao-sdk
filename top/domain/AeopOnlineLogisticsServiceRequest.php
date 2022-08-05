<?php

/**
 * 入參对象
 * @author auto create
 */
class AeopOnlineLogisticsServiceRequest
{
	
	/** 
	 * 高;单位cm
	 **/
	public $goods_height;
	
	/** 
	 * 长;单位cm
	 **/
	public $goods_length;
	
	/** 
	 * 重量;单位KG
	 **/
	public $goods_weight;
	
	/** 
	 * 宽;单位cm
	 **/
	public $goods_width;
	
	/** 
	 * 语言
	 **/
	public $locale;
	
	/** 
	 * 主交易单id
	 **/
	public $order_id;
	
	/** 
	 * 子交易单列表
	 **/
	public $sub_order_list;	
}
?>