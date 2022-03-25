<?php

/**
 * Class AliexpressMarketingStorePromotionsListRequest
 */
class AliexpressMarketingStorePromotionsListRequest
{
	private $promotionQueryDto;
	
	private array $apiParas = [];
	
	public function setPromotionQueryDto($promotionQueryDto)
	{
		$this->promotionQueryDto = $promotionQueryDto;
		$this->apiParas["promotion_query_dto"] = $promotionQueryDto;
	}

	public function getPromotionQueryDto()
	{
		return $this->promotionQueryDto;
	}

    /**
     * @return string
     */
	public function getApiMethodName(): string
    {
		return "aliexpress.marketing.storepromotions.list";
	}
	
	public function getApiParas(): array
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
