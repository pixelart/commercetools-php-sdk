<?php
/**
 * @author @ct-jensschulze <jens.schulze@commercetools.de>
 */

namespace Commercetools\Core\Request\Products\Command;

use Commercetools\Core\Model\Common\Context;
use Commercetools\Core\Request\AbstractAction;

/**
 * @package Commercetools\Core\Request\Products\Command
 * @apidoc http://dev.sphere.io/http-api-projects-products.html#set-attribute-in-all-variants
 * @method string getAction()
 * @method ProductSetAttributeInAllVariantsAction setAction(string $action = null)
 * @method string getName()
 * @method ProductSetAttributeInAllVariantsAction setName(string $name = null)
 * @method string getValue()
 * @method ProductSetAttributeInAllVariantsAction setValue(string $value = null)
 * @method bool getStaged()
 * @method ProductSetAttributeInAllVariantsAction setStaged(bool $staged = null)
 */
class ProductSetAttributeInAllVariantsAction extends AbstractAction
{
    public function getFields()
    {
        return [
            'action' => [static::TYPE => 'string'],
            'name' => [static::TYPE => 'string'],
            'value' => [static::TYPE => 'string'],
            'staged' => [static::TYPE => 'bool'],
        ];
    }

    /**
     * @param array $data
     * @param Context|callable $context
     */
    public function __construct(array $data = [], $context = null)
    {
        parent::__construct($data, $context);
        $this->setAction('setAttributeInAllVariants');
    }

    /**
     * @param string $name
     * @param Context|callable $context
     * @return ProductSetAttributeInAllVariantsAction
     */
    public static function ofName($name, $context = null)
    {
        return static::of($context)->setName($name);
    }
}
