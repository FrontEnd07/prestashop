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

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function update_mailalerts_add_column_idshop()
{
    $installed = Db::getInstance()->getValue('SELECT id_module FROM  `' . _DB_PREFIX_ . 'module` WHERE name = "mailalerts"');
    $installed &= Db::getInstance()->getValue('SHOW TABLES LIKE "' . _DB_PREFIX_ . 'mailalert_customer_oos"');
    if ($installed && !Db::getInstance()->execute('ALTER TABLE `' . _DB_PREFIX_ . 'mailalert_customer_oos` ADD COLUMN `id_shop` int(11) NOT NULL default "0" AFTER `id_customer`')) {
        return ['error' => 1, 'msg' => sprintf('unable to create column id_shop (%s)', Db::getInstance()->getMsgError())];
    }

    return true;
}
