<?php

/**
 * create logistics order's param
 * @author auto create
 */
class CreateOrderRequestTopDTO
{
	
	/** 
	 * Delivery option id selected by a sender
	 **/
	public $delivery_method_id;
	
	/** 
	 * invoice info
	 **/
	public $invoice;
	
	/** 
	 * Logistics provider Id of the shipping order such as 1-Cainiao, 2-Pegaki, 3-Frenet, 4-Delivery Hub, etc.
	 **/
	public $logistics_channel_id;
	
	/** 
	 * parcel info
	 **/
	public $parcel;
	
	/** 
	 * products info
	 **/
	public $products;
	
	/** 
	 * Input delivery_cost in logistics method query API. If no value returned, then input 1
	 **/
	public $provider_shipping_costs;
	
	/** 
	 * Find it in responses of shipping method query API
	 **/
	public $query_id;
	
	/** 
	 * receiver address
	 **/
	public $receipt_address;
	
	/** 
	 * sender address
	 **/
	public $sender_address;
	
	/** 
	 * It's sales order id and a 16-digit number. There will be mapping between trade order and shipment order
	 **/
	public $trade_order_id;	
}
?>