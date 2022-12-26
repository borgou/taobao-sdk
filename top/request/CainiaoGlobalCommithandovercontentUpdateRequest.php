<?php
/**
 * TOP API: cainiao.global.commithandovercontent.update request
 * 
 * @author auto create
 * @since 1.0, 2022.05.23
 */
class CainiaoGlobalCommithandovercontentUpdateRequest
{
	/** 
	 * 修改参数对象
	 **/
	private $openHandoverContentUpdateCommitRequest;
	
	private $apiParas = array();
	
	public function setOpenHandoverContentUpdateCommitRequest($openHandoverContentUpdateCommitRequest)
	{
		$this->openHandoverContentUpdateCommitRequest = $openHandoverContentUpdateCommitRequest;
		$this->apiParas["open_handover_content_update_commit_request"] = $openHandoverContentUpdateCommitRequest;
	}

	public function getOpenHandoverContentUpdateCommitRequest()
	{
		return $this->openHandoverContentUpdateCommitRequest;
	}

	public function getApiMethodName()
	{
		return "cainiao.global.commithandovercontent.update";
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
