<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\ProductType;

/**
 * @package Commercetools\Core\Model\ProductType
 * @link https://dev.commercetools.com/http-api-projects-productTypes.html#numbertype
 * @method string getName()
 * @method NumberType setName(string $name = null)
 */
class NumberType extends AttributeType
{
    const NAME = 'number';

    public function fieldTypeDefinition()
    {
        return [static::TYPE => 'float'];
    }
}
