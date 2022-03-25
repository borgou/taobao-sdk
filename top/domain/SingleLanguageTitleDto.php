<?php

declare(strict_types=1);

/**
 * List for multi language subject
 * @see https://developers.aliexpress.com/en/doc.htm?docId=108976&docType=1
 */
class SingleLanguageTitleDto
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
     * subject, maximum 128 characters.
     **/
    public string $subject;
}
