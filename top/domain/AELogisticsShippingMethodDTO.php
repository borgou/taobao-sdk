<?php

/**
 * delivery option list
 * @author auto create
 */
class AELogisticsShippingMethodDTO
{
	
	/** 
	 * estimated shipping cost based on dimension and weight of a parcel
	 **/
	public $delivery_cost;
	
	/** 
	 * delivery time on working days
	 **/
	public $delivery_estimate_days;
	
	/** 
	 * shipping method id of Logistics service such as Loggi Express, Correios Sedex, etc.
	 **/
	public $delivery_method_id;
	
	/** 
	 * Devlivery provider type such as express/standard, pac/sedex.
	 **/
	public $delivery_method_name;
	
	/** 
	 * Delivery provider name
	 **/
	public $delivery_provider_name;
	
	/** 
	 * Logistics provider Id of the shipping order such as 1-Cainiao, 2-Pegaki, 3-Frenet, 4-Delivery Hub, etc.
	 **/
	public $logistics_channel_id;
	
	/** 
	 * Logistics provider of the shipping order such as Cainiao, Pegaki, Frenet, Delivery Hub, etc.
	 **/
	public $logistics_channel_name;	
}
?>