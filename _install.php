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

if (version_compare(dcCore::app()->getVersion(basename(__DIR__)), dcCore::app()->getVersion('core'), '>=')) {
    return;
}

try {
    if (class_exists('dcUpgrade') && method_exists('dcUpgrade', 'growUp')) {
        dcUpgrade::growUp(dcCore::app()->getVersion('core'));

        // Register new version
        dcCore::app()->setVersion(basename(__DIR__), dcCore::app()->getVersion('core'));

        return false;   // In order to prevent module version storage
    }
} catch (Exception $e) {
    dcCore::app()->error->add($e->getMessage());
}

return false;
