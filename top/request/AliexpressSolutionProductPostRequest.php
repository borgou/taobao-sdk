<?php

/**
 * Class AliexpressSolutionProductPostRequest
 */
class AliexpressSolutionProductPostRequest
{
    /**
     * input param
     **/
    private $postProductRequest;

    private $apiParas = array();

    public function getPostProductRequest()
    {
        return $this->postProductRequest;
    }

    public function setPostProductRequest($postProductRequest)
    {
        $this->postProductRequest = $postProductRequest;
        $this->apiParas["post_product_request"] = $postProductRequest;
    }

    public function getApiMethodName(): string
    {
        return "aliexpress.solution.product.post";
    }

    public function getApiParas()
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
