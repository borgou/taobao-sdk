<?php

/**
 * method data
 * @author auto create
 */
class QueryShippingMethodResponseDTO
{
	
	/** 
	 * delivery option list
	 **/
	public $delivery_options;
	
	/** 
	 * parcel
	 **/
	public $parcel;
	
	/** 
	 * query id, if the value is not empty, please fill it in create order api
	 **/
	public $query_id;	
}
?>