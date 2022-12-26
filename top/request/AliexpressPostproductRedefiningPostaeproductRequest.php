<?php
/**
 * TOP API: aliexpress.postproduct.redefining.postaeproduct request
 * 
 * @author auto create
 * @since 1.0, 2022.01.26
 */
class AliexpressPostproductRedefiningPostaeproductRequest
{
	/** 
	 * none
	 **/
	private $aeopAEProduct;
	
	/** 
	 * 扩展参数 json 格式 custom_image 分国家主图 vat_tags 含税标
	 **/
	private $extParam;
	
	private $apiParas = array();
	
	public function setAeopAEProduct($aeopAEProduct)
	{
		$this->aeopAEProduct = $aeopAEProduct;
		$this->apiParas["aeop_a_e_product"] = $aeopAEProduct;
	}

	public function getAeopAEProduct()
	{
		return $this->aeopAEProduct;
	}

	public function setExtParam($extParam)
	{
		$this->extParam = $extParam;
		$this->apiParas["ext_param"] = $extParam;
	}

	public function getExtParam()
	{
		return $this->extParam;
	}

	public function getApiMethodName()
	{
		return "aliexpress.postproduct.redefining.postaeproduct";
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
