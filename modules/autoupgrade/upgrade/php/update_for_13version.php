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
function update_for_13version()
{
    global $oldversion;

    if (version_compare($oldversion, '1.4.0.1') >= 0) {
        return;
    } // if the old version is a 1.4 version

    // Disable the Smarty 3
    // Disable the URL rewritting
    // Disable Canonical redirection

    $res = true;
    $exist = Db::getInstance()->getValue('SELECT `id_configuration` FROM `' . _DB_PREFIX_ . 'configuration` WHERE `name` = \'PS_FORCE_SMARTY_2\'');
    if ($exist) {
        $res &= Db::getInstance()->execute('UPDATE `' . _DB_PREFIX_ . 'configuration` SET value = "1" WHERE `name` = \'PS_FORCE_SMARTY_2\'');
    } else {
        $res &= Db::getInstance()->getValue('INSERT INTO `' . _DB_PREFIX_ . 'configuration` (name, value) VALUES ("PS_FORCE_SMARTY_2", "1")');
    }

    $exist = Db::getInstance()->getValue('SELECT `id_configuration` FROM `' . _DB_PREFIX_ . 'configuration` WHERE `name` = \'PS_REWRITING_SETTINGS\'');
    if ($exist) {
        $res &= Db::getInstance()->execute('UPDATE `' . _DB_PREFIX_ . 'configuration` SET value = "0" WHERE `name` = \'PS_REWRITING_SETTINGS\'');
    } else {
        $res &= Db::getInstance()->getValue('INSERT INTO `' . _DB_PREFIX_ . 'configuration` (name, value) VALUES ("PS_REWRITING_SETTINGS", "0")');
    }

    $exist = Db::getInstance()->getValue('SELECT `id_configuration` FROM `' . _DB_PREFIX_ . 'configuration` WHERE `name` = \'PS_CANONICAL_REDIRECT\'');
    if ($exist) {
        $res &= Db::getInstance()->execute('UPDATE `' . _DB_PREFIX_ . 'configuration` SET value = "0" WHERE `name` = \'PS_CANONICAL_REDIRECT\'');
    } else {
        $res &= Db::getInstance()->getValue('INSERT INTO `' . _DB_PREFIX_ . 'configuration` (name, value) VALUES ("PS_CANONICAL_REDIRECT", "0")');
    }

    return $res;
}
