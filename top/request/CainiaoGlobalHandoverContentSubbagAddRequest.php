<?php
/**
 * TOP API: cainiao.global.handover.content.subbag.add request
 * 
 * @author auto create
 * @since 1.0, 2022.06.09
 */
class CainiaoGlobalHandoverContentSubbagAddRequest
{
	/** 
	 * 客户端名称，ISV：ISV-ISV英文或拼音名称、商家ERP：SELLER-商家英文或拼音名称
	 **/
	private $client;
	
	/** 
	 * 预约号(大包LP)
	 **/
	private $handoverContentCode;
	
	/** 
	 * 多语言
	 **/
	private $locale;
	
	/** 
	 * 追加大包数量
	 **/
	private $subbagCount;
	
	private $apiParas = array();
	
	public function setClient($client)
	{
		$this->client = $client;
		$this->apiParas["client"] = $client;
	}

	public function getClient()
	{
		return $this->client;
	}

	public function setHandoverContentCode($handoverContentCode)
	{
		$this->handoverContentCode = $handoverContentCode;
		$this->apiParas["handover_content_code"] = $handoverContentCode;
	}

	public function getHandoverContentCode()
	{
		return $this->handoverContentCode;
	}

	public function setLocale($locale)
	{
		$this->locale = $locale;
		$this->apiParas["locale"] = $locale;
	}

	public function getLocale()
	{
		return $this->locale;
	}

	public function setSubbagCount($subbagCount)
	{
		$this->subbagCount = $subbagCount;
		$this->apiParas["subbag_count"] = $subbagCount;
	}

	public function getSubbagCount()
	{
		return $this->subbagCount;
	}

	public function getApiMethodName()
	{
		return "cainiao.global.handover.content.subbag.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->client,"client");
		RequestCheckUtil::checkNotNull($this->handoverContentCode,"handoverContentCode");
		RequestCheckUtil::checkNotNull($this->subbagCount,"subbagCount");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
