<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductComparisonWidget\Widget;

use Spryker\Yves\Kernel\Widget\AbstractWidget;

/**
 * @method \SprykerShop\Yves\ProductComparisonWidget\ProductComparisonWidgetFactory getFactory()
 * @method \SprykerShop\Yves\ProductComparisonWidget\ProductComparisonWidgetConfig getConfig()
 */
class ComparisonProductTogglerComparisonListWidget extends AbstractWidget
{
    /**
     * @var string
     */
    protected const PARAMETER_SKU = 'sku';

    /**
     * @var string
     */
    protected const PARAMETER_MAX_ITEMS = 'maxItems';

    /**
     * @var string
     */
    protected const PARAMETER_IS_DISABLED = 'isDisabled';

    public function __construct(string $sku, bool $isDisabled)
    {
        $this->addSkuParameter($sku);
        $this->addIsDisabledParameter($isDisabled);
        $this->addMaxItemsParameter();
    }

    public static function getName(): string
    {
        return 'ComparisonProductTogglerComparisonListWidget';
    }

    public static function getTemplate(): string
    {
        return '@ProductComparisonWidget/views/comparison-product-toggler/comparison-product-toggler.twig';
    }

    protected function addSkuParameter(string $sku): void
    {
        $this->addParameter(static::PARAMETER_SKU, $sku);
    }

    protected function addIsDisabledParameter(bool $isDisabled): void
    {
        $this->addParameter(static::PARAMETER_IS_DISABLED, $isDisabled);
    }

    protected function addMaxItemsParameter(): void
    {
        $this->addParameter(static::PARAMETER_MAX_ITEMS, $this->getConfig()->getMaxItemsInCompareList());
    }
}
