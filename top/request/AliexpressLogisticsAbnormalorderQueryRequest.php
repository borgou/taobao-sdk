<?php
/**
 * TOP API: aliexpress.logistics.abnormalorder.query request
 * 
 * @author auto create
 * @since 1.0, 2022.01.06
 */
class AliexpressLogisticsAbnormalorderQueryRequest
{
	/** 
	 * 当前页
	 **/
	private $currentPage;
	
	/** 
	 * 订单创建时间结束
	 **/
	private $gmtCreateEnd;
	
	/** 
	 * 订单创建时间开始
	 **/
	private $gmtCreateStart;
	
	/** 
	 * 状态变更时间结束
	 **/
	private $gmtStatusUpdateEnd;
	
	/** 
	 * 状态变更时间开始
	 **/
	private $gmtStatusUpdateStart;
	
	/** 
	 * 运单号
	 **/
	private $intlTrackingNo;
	
	/** 
	 * 页大小
	 **/
	private $pageSize;
	
	/** 
	 * 交易订单号
	 **/
	private $tradeOrderId;
	
	/** 
	 * 状态编码列表
	 **/
	private $warehouseStatusList;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setGmtCreateEnd($gmtCreateEnd)
	{
		$this->gmtCreateEnd = $gmtCreateEnd;
		$this->apiParas["gmt_create_end"] = $gmtCreateEnd;
	}

	public function getGmtCreateEnd()
	{
		return $this->gmtCreateEnd;
	}

	public function setGmtCreateStart($gmtCreateStart)
	{
		$this->gmtCreateStart = $gmtCreateStart;
		$this->apiParas["gmt_create_start"] = $gmtCreateStart;
	}

	public function getGmtCreateStart()
	{
		return $this->gmtCreateStart;
	}

	public function setGmtStatusUpdateEnd($gmtStatusUpdateEnd)
	{
		$this->gmtStatusUpdateEnd = $gmtStatusUpdateEnd;
		$this->apiParas["gmt_status_update_end"] = $gmtStatusUpdateEnd;
	}

	public function getGmtStatusUpdateEnd()
	{
		return $this->gmtStatusUpdateEnd;
	}

	public function setGmtStatusUpdateStart($gmtStatusUpdateStart)
	{
		$this->gmtStatusUpdateStart = $gmtStatusUpdateStart;
		$this->apiParas["gmt_status_update_start"] = $gmtStatusUpdateStart;
	}

	public function getGmtStatusUpdateStart()
	{
		return $this->gmtStatusUpdateStart;
	}

	public function setIntlTrackingNo($intlTrackingNo)
	{
		$this->intlTrackingNo = $intlTrackingNo;
		$this->apiParas["intl_tracking_no"] = $intlTrackingNo;
	}

	public function getIntlTrackingNo()
	{
		return $this->intlTrackingNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setTradeOrderId($tradeOrderId)
	{
		$this->tradeOrderId = $tradeOrderId;
		$this->apiParas["trade_order_id"] = $tradeOrderId;
	}

	public function getTradeOrderId()
	{
		return $this->tradeOrderId;
	}

	public function setWarehouseStatusList($warehouseStatusList)
	{
		$this->warehouseStatusList = $warehouseStatusList;
		$this->apiParas["warehouse_status_list"] = $warehouseStatusList;
	}

	public function getWarehouseStatusList()
	{
		return $this->warehouseStatusList;
	}

	public function getApiMethodName()
	{
		return "aliexpress.logistics.abnormalorder.query";
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
