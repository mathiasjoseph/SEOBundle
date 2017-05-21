<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/05/17
 * Time: 00:22
 */

namespace Miky\Bundle\SEOBundle\Model;


class SEO
{
    /**
     * @var string
     */
    protected $metaTitle;

    /**
     * Search Engine Results Pages Preview
     * @var string
     */
    protected $serp;

    /**
     * @var string
     */
    protected $metaDescription;

    /**
     * @var string
     */
    protected $metaKeywords;

    /**
     * @var string
     */
    protected $canonicalUrl;

    /**
     * @var boolean
     */
    protected $noIndex;

    /**
     * @var boolean
     */
    protected $noFollow;
}