<?php

/**
 * Class AliexpressPhotobankRedefiningUploadimageforsdkRequest
 */
class AliexpressPhotobankRedefiningUploadimageforsdkRequest
{
    /**
     * 上传文件名称，长度不要超过256个字符。
     **/
    private $fileName;

    /**
     * 图片保存的图片组，groupId为空，则图片保存在Other组中。
     **/
    private $groupId;

    /**
     * 图片文件的字节流图片大小限制：3MB。图片大小不能超过5000*5000。
     **/
    private $imageBytes;

    private $apiParas = array();

    public function getFileName()
    {
        return $this->fileName;
    }

    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        $this->apiParas["file_name"] = $fileName;
    }

    public function getGroupId()
    {
        return $this->groupId;
    }

    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        $this->apiParas["group_id"] = $groupId;
    }

    public function getImageBytes()
    {
        return $this->imageBytes;
    }

    public function setImageBytes($imageBytes)
    {
        $this->imageBytes = $imageBytes;
        $this->apiParas["image_bytes"] = $imageBytes;
    }

    public function getApiMethodName(): string
    {
        return "aliexpress.photobank.redefining.uploadimageforsdk";
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
