<?php

/**
 * response info
 * @author auto create
 */
class ReportShippedDTO
{
	
	/** 
	 * shipment order id
	 **/
	public $logistics_order_id;
	
	/** 
	 * type of report dispatch-Status including: all shipments (all), part of the delivery (part)
	 **/
	public $shipped_type;	
}
?>