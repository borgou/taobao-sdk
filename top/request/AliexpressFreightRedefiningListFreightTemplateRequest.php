<?php

/**
 * Class AliexpressFreightRedefiningListFreightTemplateRequest
 */
class AliexpressFreightRedefiningListFreightTemplateRequest
{
    private array $apiParas = [];

    /**
     * @return string
     */
    public function getApiMethodName(): string
    {
        return "aliexpress.freight.redefining.listfreighttemplate";
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
