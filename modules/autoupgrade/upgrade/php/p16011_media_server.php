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
function p16011_media_server()
{
    $new_settings = $prev_settings = file_get_contents(_PS_ROOT_DIR_ . '/config/settings.inc.php');

    if (preg_match_all('/define\(\'_MEDIA_SERVER_([1-3])_\',\s*?\'(.*?)\'\s*?\)/ism', $new_settings, $matches)) {
        $total = (count($matches[1]));
        for ($i = 0; $i < $total; ++$i) {
            Db::getInstance()->execute('INSERT INTO ' . _DB_PREFIX_ . 'configuration (`name`, `value`, `date_add`, `date_upd`) VALUES (\'PS_MEDIA_SERVER_' . $matches[1][$i] . '\', \'' . $matches[2][$i] . '\', NOW(), NOW())');
        }
    }

    $new_settings = preg_replace('/define\(\'_MEDIA_SERVER_[1-3]_\',\s*?\'.*?\'\s*?\);/ism', '', $new_settings);

    if ($new_settings == $prev_settings || (
        copy(_PS_ROOT_DIR_ . '/config/settings.inc.php', _PS_ROOT_DIR_ . '/config/settings.old.php')
        && (bool) file_put_contents(_PS_ROOT_DIR_ . '/config/settings.inc.php', $new_settings)
    )) {
        return true;
    }

    return false;
}
