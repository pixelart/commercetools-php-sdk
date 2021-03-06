<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Model\Common;

/**
 * @package Commercetools\Core\Model\Common
 * @link https://dev.commercetools.com/http-api-types.html#reference
 * @method Reference current()
 * @method ReferenceCollection add(Reference $element)
 * @method Reference getAt($offset)
 * @method Reference getById($offset)
 */
class ReferenceCollection extends Collection
{
    protected $type = Reference::class;
}
