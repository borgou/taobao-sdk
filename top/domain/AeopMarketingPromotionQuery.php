<?php

/**
 * Class AeopMarketingPromotionQuery
 */
class AeopMarketingPromotionQuery
{
	
	/** 
	 * 页码
	 **/
	public $current_page;
	
	/** 
	 * 页大小
	 **/
	public $page_size;
	
	/** 
	 * LimitedDiscount
     * FixedDiscount
     * StoreDiscount
     * StoreCoupon
     * DirectStoreCoupon
     * CoinsExchangeStoreCoupon
     * GrabStoreCoupon
     * PolyPopularityStoreCoupon
     * ShoppingCoupon
     * FreeShipping
     * ProEngine
     * GPoint
     * GAGA
     * NewProduct
     * GroupBuy
	 **/
	public $prom_type;
	
	/** 
	 * releasing
     * releasEnd
     * RELEASE_START_DATE
     * RELEASE_START_DATE
     * frozen
     * RELEASE_START_DATE
     * created
     * attractNotStart
     * attracting
     * attractEnd
	 **/
	public $status;	
}
