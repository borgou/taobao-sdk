<?php
/**
 * TOP API: aliexpress.logistics.local.getlogisticsselleraddresses request
 * 
 * @author auto create
 * @since 1.0, 2022.01.14
 */
class AliexpressLogisticsLocalGetlogisticsselleraddressesRequest
{
	/** 
	 * sender,pickup,refund 地址类型
	 **/
	private $sellerAddressQuery;
	
	private $apiParas = array();
	
	public function setSellerAddressQuery($sellerAddressQuery)
	{
		$this->sellerAddressQuery = $sellerAddressQuery;
		$this->apiParas["seller_address_query"] = $sellerAddressQuery;
	}

	public function getSellerAddressQuery()
	{
		return $this->sellerAddressQuery;
	}

	public function getApiMethodName()
	{
		return "aliexpress.logistics.local.getlogisticsselleraddresses";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
