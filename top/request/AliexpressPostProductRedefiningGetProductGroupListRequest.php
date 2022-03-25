<?php

declare(strict_types=1);

/**
 * Class AliexpressPostProductRedefiningGetProductGroupListRequest
 */
class AliexpressPostProductRedefiningGetProductGroupListRequest
{

    private array $apiParas = array();

    public function getApiMethodName(): string
    {
        return "aliexpress.postproduct.redefining.getproductgrouplist";
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
