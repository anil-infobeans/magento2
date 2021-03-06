<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Tax\Api;

/**
 * Interface OrderTaxManagementInterface
 * @api
 */
interface OrderTaxManagementInterface
{
    /**
     * Get taxes applied to an order
     *
     * @param int $orderId
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getOrderTaxDetails($orderId);
}
