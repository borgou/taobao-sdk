<?php

/**
 * parcel
 * @author auto create
 */
class ParcelDTO
{
	
	/** 
	 * Height of the parcel in the shipment order. Default unit: centimeters
	 **/
	public $height;
	
	/** 
	 * Length of the parcel in the shipment order. Default unit: centimeters
	 **/
	public $length;
	
	/** 
	 * Type: ENVELOPE, BOX, BAG, TUBE, PALLET
	 **/
	public $parcel_type_code;
	
	/** 
	 * number of the parcel and there's only one parcel
	 **/
	public $quantity;
	
	/** 
	 * Actual gross weight of the parcel instead of the weight of the product, nor the added weight of the invoice volumes.  Default unit: kilograms
	 **/
	public $weight;
	
	/** 
	 * Width of the parcel in the shipment order. Default unit: centimeters
	 **/
	public $width;	
}
?>