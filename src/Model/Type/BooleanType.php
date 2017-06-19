<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */


namespace Commercetools\Model\Type;

use Commercetools\Generator\JsonResource;
use Commercetools\Generator\DiscriminatorValue;

/**
 * @JsonResource()
 * @DiscriminatorValue(value="Boolean")
 */
interface BooleanType extends FieldType
{

}
