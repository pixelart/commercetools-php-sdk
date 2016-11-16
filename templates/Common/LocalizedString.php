<?php 
/**
 * @author @jayS-de <jens.schulze@commercetools.de>
 */
namespace Commercetools\Core\Templates\Common;

use Commercetools\Core\Helper\Generate\FieldType;

class LocalizedString extends Collection
{
    public function __get($locale)
    {
        return $this->at($locale);
    }
}
