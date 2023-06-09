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
function ps_1700_add_locale()
{
    $locale = file_get_contents(__DIR__ . '/../legacy-to-standard-locales.json');
    $locale_mapping = json_decode($locale, true);
    $results = Db::getInstance()->executeS('SELECT id_lang, iso_code FROM ' . _DB_PREFIX_ . 'lang');
    foreach ($results as $result) {
        $id_lang = $result['id_lang'];
        $iso_code = $result['iso_code'];
        if (array_key_exists($iso_code, $locale_mapping)) {
            $locale = $locale_mapping[$iso_code];
            Db::getInstance()->execute('UPDATE ' . _DB_PREFIX_ . 'lang SET locale="' . $locale . '" WHERE id_lang="' . $id_lang . '"');
        }
    }

    return true;
}
