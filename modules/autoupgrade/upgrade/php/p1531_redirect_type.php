<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
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
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
function p1531_redirect_type()
{
    include_once __DIR__ . '/generic_add_missing_column.php';

    $result = generic_add_missing_column('product', ['redirect_type' => 'ENUM(\'\', \'404\', \'301\', \'302\') NOT NULL DEFAULT \'404\' AFTER `active`']);
    $result &= generic_add_missing_column('product_shop', ['redirect_type' => 'ENUM(\'\', \'404\', \'301\', \'302\') NOT NULL DEFAULT \'404\' AFTER `active`']);

    return $result;
}
