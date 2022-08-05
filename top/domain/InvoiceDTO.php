<?php

/**
 * invoice
 * @author auto create
 */
class InvoiceDTO
{
	
	/** 
	 * date of inovice issued
	 **/
	public $invoice_date;
	
	/** 
	 * 44-digit number
	 **/
	public $invoice_key;
	
	/** 
	 * 9-digit number
	 **/
	public $invoice_number;
	
	/** 
	 * 3-digit number
	 **/
	public $invoice_series;
	
	/** 
	 * value of invoice
	 **/
	public $invoice_total_value;	
}
?>