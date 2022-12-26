<?php
/**
 * TOP API: aliexpress.local.logistic.label.print request
 * 
 * @author auto create
 * @since 1.0, 2022.01.17
 */
class AliexpressLocalLogisticLabelPrintRequest
{
	/** 
	 * 打印面单入参
	 **/
	private $param1;
	
	private $apiParas = array();
	
	public function setParam1($param1)
	{
		$this->param1 = $param1;
		$this->apiParas["param1"] = $param1;
	}

	public function getParam1()
	{
		return $this->param1;
	}

	public function getApiMethodName()
	{
		return "aliexpress.local.logistic.label.print";
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
