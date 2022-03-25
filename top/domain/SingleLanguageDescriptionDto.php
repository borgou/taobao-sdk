<?php

/**
 * List for multi language description.
 * @link https://developers.aliexpress.com/en/doc.htm?docId=108976&docType=1
 */
class SingleLanguageDescriptionDto
{

    /**
     * Support:
     * en (English)
     * ru (Russian)
     * es (Spanish)
     * fr (French)
     * it (Italian)
     * tr (Turkish)
     * pt (Portuguese)
     * de (German)
     * nl (Dutch)
     * in (Indonesian)
     * ar (Arabic)
     * ja (Japanese)
     * ko (Korean)
     * th (Thai)
     * vi (Vietnamese)
     * iw (Hebrew)
     **/
    public string $language;

    /**
     * Mobile detail for this language
     * @link https://developers.aliexpress.com/en/doc.htm?docId=109534&docType=1
     **/
    public $mobile_detail;

    /**
     * Web detail for this language
     * @link https://developers.aliexpress.com/en/doc.htm?docId=109534&docType=1
     **/
    public $web_detail;
}
