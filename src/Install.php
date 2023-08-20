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
declare(strict_types=1);

namespace Dotclear\Plugin\growUp;

use dcCore;
use Dotclear\Core\Process;
use Dotclear\Core\Upgrade\Upgrade;
use Exception;

class Install extends Process
{
    public static function init(): bool
    {
        return self::status(My::checkContext(My::INSTALL));
    }

    public static function process(): bool
    {
        if (!self::status()) {
            return false;
        }

        try {
            if (class_exists('dcUpgrade') && method_exists('dcUpgrade', 'growUp')) {
                Upgrade::growUp(dcCore::app()->getVersion('core'));

                // Register new version
                dcCore::app()->setVersion(My::id(), dcCore::app()->getVersion('core'));

                return false;   // In order to prevent module version storage
            }
        } catch (Exception $e) {
            dcCore::app()->error->add($e->getMessage());
        }

        return true;
    }
}
