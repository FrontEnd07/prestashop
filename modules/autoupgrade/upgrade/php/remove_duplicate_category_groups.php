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
 * Removes duplicates from table category_group caused by a bug in category importing in PS < 1.4.2
 */
function remove_duplicate_category_groups()
{
    $result = Db::getInstance()->executeS('
		SELECT `id_category`, `id_group`, COUNT(*) as `count`
		FROM `' . _DB_PREFIX_ . 'category_group`
		GROUP BY `id_category`, `id_group`
		ORDER BY `count` DESC');

    foreach ($result as $row) {
        if ((int) $row['count'] > 1) {
            $limit = (int) $row['count'] - 1;
            $result = Db::getInstance()->execute('
				DELETE FROM `' . _DB_PREFIX_ . 'category_group`
				WHERE `id_category` = ' . $row['id_category'] . ' AND `id_group` = ' . $row['id_group'] . '
				LIMIT ' . $limit);
        } else {
            return;
        }
    }
}
