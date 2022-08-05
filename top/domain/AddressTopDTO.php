<?php

/**
 * destination address
 * @author auto create
 */
class AddressTopDTO
{
	
	/** 
	 * receiver's district and street
	 **/
	public $address;
	
	/** 
	 * receiver's street number
	 **/
	public $address_number;
	
	/** 
	 * cell phone of receiver
	 **/
	public $cellphone;
	
	/** 
	 * receiver's city
	 **/
	public $city;
	
	/** 
	 * receiver's country
	 **/
	public $country;
	
	/** 
	 * email of receiver
	 **/
	public $email;
	
	/** 
	 * CPF of the buyer. Senders can find it on sales order
	 **/
	public $federal_tax_id;
	
	/** 
	 * first name of receiver
	 **/
	public $first_name;
	
	/** 
	 * last name of receiver
	 **/
	public $last_name;
	
	/** 
	 * receiver's state
	 **/
	public $state;
	
	/** 
	 * zip code of ship to place
	 **/
	public $zip_code;	
}
?>