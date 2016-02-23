<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of growUp, a plugin for Dotclear 2.
#
# Copyright (c) Franck Paul and contributors
# carnet.franck.paul@gmail.com
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_CONTEXT_ADMIN')) { return; }

$new_version = DC_VERSION; // $core->plugins->moduleInfo('growUp','version');
$old_version = $core->getVersion('growUp');

if (version_compare($old_version,$new_version,'>=')) return;

try
{
	if (class_exists('dcUpgrade') && method_exists('dcUpgrade','growUp')) {
		dcUpgrade::growUp($core,$core->getVersion('core'));
		$core->setVersion('growUp',$new_version);

		return true;
	}
}
catch (Exception $e)
{
	$core->error->add($e->getMessage());
}
return false;
