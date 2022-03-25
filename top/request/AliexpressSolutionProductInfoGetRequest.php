<?php

/**
 * Class AliexpressSolutionProductInfoGetRequest
 */
class AliexpressSolutionProductInfoGetRequest
{

    private $productId;

    private $apiParas = [];

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->apiParas["product_id"] = $productId;
    }

    /**
     * @return string
     */
    public function getApiMethodName(): string
    {
        return "aliexpress.solution.product.info.get";
    }

    /**
     * @return array
     */
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
