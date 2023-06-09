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

/**
 * Check if all needed columns in webservice_account table exists.
 * These columns are used for the WebserviceRequest overriding.
 *
 * @return void
 */
function check_webservice_account_table()
{
    $sql = 'SHOW COLUMNS FROM ' . _DB_PREFIX_ . 'webservice_account';
    $return = Db::getInstance()->executeS($sql);
    if (count($return) < 7) {
        $sql = 'ALTER TABLE `' . _DB_PREFIX_ . 'webservice_account` ADD `is_module` TINYINT( 2 ) NOT NULL DEFAULT \'0\' AFTER `class_name` ,
		ADD `module_name` VARCHAR( 50 ) NULL DEFAULT NULL AFTER `is_module`';
        Db::getInstance()->executeS($sql);
    }
}
