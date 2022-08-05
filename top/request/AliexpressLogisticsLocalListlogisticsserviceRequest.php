<?php
/**
 * TOP API: aliexpress.logistics.local.listlogisticsservice request
 * 
 * @author auto create
 * @since 1.0, 2022.01.20
 */
class AliexpressLogisticsLocalListlogisticsserviceRequest
{
	/** 
	 * locale
	 **/
	private $locale;
	
	private $apiParas = array();
	
	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function getApiMethodName()
	{
		return "aliexpress.logistics.local.listlogisticsservice";
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
