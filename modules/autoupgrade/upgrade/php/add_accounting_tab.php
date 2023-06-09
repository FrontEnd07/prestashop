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
function add_accounting_tab()
{
    include_once __DIR__ . '/add_new_tab.php';
    $id_parent = add_new_tab(
        'AdminAccounting',
        'en:Accounting|fr:Comptabilité|es:Accounting|de:Accounting|it:Accounting',
        0,
        true
    );

    add_new_tab(
        'AdminAccountingManagement',
        'en:Account Number Management|fr:Gestion des numéros de comptes|es:Account Number Management|de:Account Number Management|it:Account Number Management',
        $id_parent
    );

    add_new_tab(
        'AdminAccountingExport',
        'en:Export|fr:Export|es:Export|de:Export|it:Export',
        $id_parent
    );
}
