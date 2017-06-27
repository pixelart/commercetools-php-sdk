<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Ctp\Generator;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
class Queryable extends Restable
{
    /**
     * @var string
     */
    public $method = 'GET';

    /**
     * @var array
     */
    public $get = [
        QueryType::QUERY,
        QueryType::BY_ID
    ];

    /**
     * @var array
     */
    public $options = [
        QueryOptionType::EXPAND,
        QueryOptionType::LIMIT,
        QueryOptionType::OFFSET,
        QueryOptionType::SORT,
        QueryOptionType::WHERE
    ];
}
