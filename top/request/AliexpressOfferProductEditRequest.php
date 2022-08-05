<?php
/**
 * TOP API: aliexpress.offer.product.edit request
 * 
 * @author auto create
 * @since 1.0, 2022.02.12
 */
class AliexpressOfferProductEditRequest
{
	/** 
	 * 产品信息
	 **/
	private $aeopAEProduct;
	
	/** 
	 * json格式 做扩展传递参数custom_image 分国家主图 vat_tags 含税标
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
		return "aliexpress.offer.product.edit";
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
