<?php

/**
 * product list
 * @author auto create
 */
class ProductTopDTO
{
	
	/** 
	 * Actual dimension of a sku in its original packaging. Default unit: centimeters
	 **/
	public $height;
	
	/** 
	 * Actual dimension of a sku in its original packaging. Default unit: centimeters
	 **/
	public $length;
	
	/** 
	 * Price of a sku. It's used to compose total product value of the parcel
	 **/
	public $price;
	
	/** 
	 * Quantity of a sku in the order. It's used to calculate the total number of products in a parcel
	 **/
	public $quantity;
	
	/** 
	 * AE sku_id to identify a unit of sku
	 **/
	public $sku_id;
	
	/** 
	 * Total weight of a SKU in its original packaging. Default unit: kilograms
	 **/
	public $weight;
	
	/** 
	 * Actual dimension of a sku in its original packaging. Default unit: centimeters
	 **/
	public $width;	
}
?>