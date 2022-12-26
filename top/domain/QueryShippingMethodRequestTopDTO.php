<?php

/**
 * method query object
 * @author auto create
 */
class QueryShippingMethodRequestTopDTO
{
	
	/** 
	 * extension
	 **/
	public $extension;
	
	/** 
	 * product list
	 **/
	public $products;
	
	/** 
	 * destination address
	 **/
	public $receipt_address;
	
	/** 
	 * origin address
	 **/
	public $sender_address;
	
	/** 
	 * It's sales order id and a 16-digit number To confirm logistics service provider in the order such as Cainiao, Pegaki, Frenet, Delivery Hub, etc.
	 **/
	public $trade_order_id;	
}
?>