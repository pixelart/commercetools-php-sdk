<?php
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */


namespace Commercetools\Model\Customer;


use Commercetools\Generator\JsonField;
use Commercetools\Generator\JsonResource;
use Commercetools\Generator\Collectable;
use Commercetools\Model\LocalizedString;
use Commercetools\Model\Resource;

/**
 * @JsonResource()
 * @Collectable(indexes={"id"})
 */
interface Customer extends Resource
{
    /**
     * @JsonField(type="LocalizedString")
     * @return LocalizedString
     */
    public function getName();
}
