<?php
/**
 * TOP API: aliexpress.postproduct.redefining.postmultilanguageaeproduct request
 * 
 * @author auto create
 * @since 1.0, 2021.10.14
 */
class AliexpressPostproductRedefiningPostmultilanguageaeproductRequest
{
	/** 
	 * 扩展参数字段 json custom_image 分国家主图  vat_tags 含税标
	 **/
	private $extParam;
	
	/** 
	 * 产品信息
	 **/
	private $product;
	
	private $apiParas = array();
	
	public function setExtParam($extParam)
	{
		$this->extParam = $extParam;
		$this->apiParas["ext_param"] = $extParam;
	}

	public function getExtParam()
	{
		return $this->extParam;
	}

	public function setProduct($product)
	{
		$this->product = $product;
		$this->apiParas["product"] = $product;
	}

	public function getProduct()
	{
		return $this->product;
	}

	public function getApiMethodName()
	{
		return "aliexpress.postproduct.redefining.postmultilanguageaeproduct";
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
