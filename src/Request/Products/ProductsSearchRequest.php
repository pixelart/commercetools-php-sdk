<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 * @created: 02.02.15, 11:26
 */

namespace Sphere\Core\Request\Products;

use Sphere\Core\Model\OfTrait;
use Sphere\Core\Request\AbstractSearchRequest;
use Sphere\Core\Request\PageTrait;
use Sphere\Core\Request\SortTrait;

/**
 * Class ProductsSearchRequest
 * @package Sphere\Core\Request\Products
 * @method static ProductsSearchRequest of($sort = null, $limit = null, $offset = null)
 */
class ProductsSearchRequest extends AbstractSearchRequest
{
    use OfTrait;
    use PageTrait;
    use SortTrait;

    /**
     * @param string  $sort
     * @param int $limit
     * @param int $offset
     * @param bool $staged
     */
    public function __construct($sort = null, $limit = null, $offset = null, $staged = false)
    {
        parent::__construct(ProductProjectionEndpoint::endpoint());
        $this->setSearchParams($sort, $limit, $offset, $staged);
    }
}
