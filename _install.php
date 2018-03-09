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

if (!defined('DC_CONTEXT_ADMIN')) {return;}

$new_version = DC_VERSION; // $core->plugins->moduleInfo('growUp','version');
$old_version = $core->getVersion('growUp');

if (version_compare($old_version, $new_version, '>=')) {
    return;
}

try
{
    if (class_exists('dcUpgrade') && method_exists('dcUpgrade', 'growUp')) {
        dcUpgrade::growUp($core, $core->getVersion('core'));
        $core->setVersion('growUp', $new_version);

        return true;
    }
} catch (Exception $e) {
    $core->error->add($e->getMessage());
}
return false;
