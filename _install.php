<?php
/**
 * @brief growUp, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul carnet.franck.paul@gmail.com
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
if (!defined('DC_CONTEXT_ADMIN')) {
    return;
}

if (!dcCore::app()->newVersion(basename(__DIR__), dcCore::app()->plugins->moduleInfo(basename(__DIR__), 'version'))) {
    return;
}

try {
    if (class_exists('dcUpgrade') && method_exists('dcUpgrade', 'growUp')) {
        dcUpgrade::growUp(dcCore::app()->getVersion('core'));

        return true;
    }
} catch (Exception $e) {
    dcCore::app()->error->add($e->getMessage());
}

return false;
