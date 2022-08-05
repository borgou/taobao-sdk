<?php
/**
 * TOP API: aliexpress.logistics.local.getwaybillbypdf request
 * 
 * @author auto create
 * @since 1.0, 2022.04.28
 */
class AliexpressLogisticsLocalGetwaybillbypdfRequest
{
	/** 
	 * waybill number (tracking number)
	 **/
	private $intlTrackingNo;
	
	/** 
	 * option to print package bill
	 **/
	private $printDetail;
	
	/** 
	 * Logistics order No
	 **/
	private $warehouseOrderId;
	
	private $apiParas = array();
	
	public function setIntlTrackingNo($intlTrackingNo)
	{
		$this->intlTrackingNo = $intlTrackingNo;
		$this->apiParas["intl_tracking_no"] = $intlTrackingNo;
	}

	public function getIntlTrackingNo()
	{
		return $this->intlTrackingNo;
	}

	public function setPrintDetail($printDetail)
	{
		$this->printDetail = $printDetail;
		$this->apiParas["print_detail"] = $printDetail;
	}

	public function getPrintDetail()
	{
		return $this->printDetail;
	}

	public function setWarehouseOrderId($warehouseOrderId)
	{
		$this->warehouseOrderId = $warehouseOrderId;
		$this->apiParas["warehouse_order_id"] = $warehouseOrderId;
	}

	public function getWarehouseOrderId()
	{
		return $this->warehouseOrderId;
	}

	public function getApiMethodName()
	{
		return "aliexpress.logistics.local.getwaybillbypdf";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->intlTrackingNo,"intlTrackingNo");
		RequestCheckUtil::checkNotNull($this->warehouseOrderId,"warehouseOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
