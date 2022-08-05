<?php

/**
 * If specified this field, all the previous skus will be replaced by the new skus.
 * @author auto create
 */
class SkuInfoDto
{
	
	/** 
	 * discount price for the sku. discount_price should be cheaper than price.
	 **/
	public $discount_price;
	
	/** 
	 * EAN or EAN13, stands for international product number (formerly European product number). It is an extension of UPC codes, and you will find them as barcodes on most everyday products. It will be empty if you don't fill it in
	 **/
	public $ean_code;
	
	/** 
	 * extra params. Configured some special products
	 **/
	public $extra_params;
	
	/** 
	 * stock. Maximum:999999, minumum:1
	 **/
	public $inventory;
	
	/** 
	 * price. Maximum:999999, minumum:0.01
	 **/
	public $price;
	
	/** 
	 * sku attribute list. Some categories don't have sku attributes, then sku_attributes_list should be empty.When there are more than one sku in the sku_info_list, sku_attributes_list is required for each of them, please do not let them empty
	 **/
	public $sku_attributes_list;
	
	/** 
	 * Code for merchant's sku, important reference to maintain the relationship between merchant and Aliexpress's system.
	 **/
	public $sku_code;	
}
?>