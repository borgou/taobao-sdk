<?php

/**
 * Class AliexpressMarketingPromotionListRequest
 */
class AliexpressMarketingPromotionListRequest
{

    private $marketingPromotionQuery;

    private $apiParas = array();

    public function getMarketingPromotionQuery()
    {
        return $this->marketingPromotionQuery;
    }

    public function setMarketingPromotionQuery($marketingPromotionQuery)
    {
        $this->marketingPromotionQuery = $marketingPromotionQuery;
        $this->apiParas["marketing_promotion_query"] = $marketingPromotionQuery;
    }

    public function getApiMethodName(): string
    {
        return "aliexpress.marketing.promotion.list";
    }

    public function getApiParas(): array
    {
        return $this->apiParas;
    }

    public function check()
    {
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
