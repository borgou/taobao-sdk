<?php

/**
 * Class AliexpressSolutionSellerCategoryTreeQueryRequest
 */
class AliexpressSolutionSellerCategoryTreeQueryRequest
{
    /**
     * parent category ID. To obtain the root categories, setting the category_id = 0
     **/
    private $categoryId;

    /**
     * filter the categories which seller does not have permission
     **/
    private $filterNoPermission;

    private $apiParas = array();

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->apiParas["category_id"] = $categoryId;
    }

    public function getFilterNoPermission()
    {
        return $this->filterNoPermission;
    }

    public function setFilterNoPermission($filterNoPermission)
    {
        $this->filterNoPermission = $filterNoPermission;
        $this->apiParas["filter_no_permission"] = $filterNoPermission;
    }

    public function getApiMethodName(): string
    {
        return "aliexpress.solution.seller.category.tree.query";
    }

    public function getApiParas(): array
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->categoryId, "categoryId");
        RequestCheckUtil::checkNotNull($this->filterNoPermission, "filterNoPermission");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
