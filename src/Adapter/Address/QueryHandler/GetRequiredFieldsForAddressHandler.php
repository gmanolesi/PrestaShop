<?php
/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Adapter\Address\QueryHandler;

use PrestaShop\PrestaShop\Adapter\Address\AbstractCustomerAddressHandler;
use PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException;
use PrestaShop\PrestaShop\Core\Domain\Address\Query\GetRequiredFieldsForAddress;
use PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler\GetRequiredFieldsForAddressHandlerInterface;

/**
 * Handles query which gets required fields for address
 *
 * @internal
 */
final class GetRequiredFieldsForAddressHandler extends AbstractCustomerAddressHandler implements GetRequiredFieldsForAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AddressException
     */
    public function handle(GetRequiredFieldsForAddress $query): array
    {
        return $this->getRequiredFields();
    }
}
