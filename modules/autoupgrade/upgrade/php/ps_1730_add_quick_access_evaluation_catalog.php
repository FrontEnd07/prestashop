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
function ps_1730_add_quick_access_evaluation_catalog()
{
    $moduleManagerBuilder = \PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder::getInstance();
    $moduleManager = $moduleManagerBuilder->build();

    $isStatscheckupInstalled = $moduleManager->isInstalled('statscheckup');

    if ($isStatscheckupInstalled) {
        $translator = Context::getContext()->getTranslator();

        Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'quick_access` SET link = "index.php?controller=AdminStats&module=statscheckup" ');

        $idQuickAccess = (int) Db::getInstance()->Insert_ID();

        foreach (Language::getLanguages() as $language) {
            Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . 'quick_access_lang` SET 
                `id_quick_access` = ' . $idQuickAccess . ',
                `id_lang` = ' . (int) $language['id_lang'] . ',
                `name` = "' . pSQL($translator->trans('Catalog evaluation', [], 'Admin.Navigation.Header')) . '" ');
        }
    }
}
