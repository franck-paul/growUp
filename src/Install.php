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

use Dotclear\App;
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
            Upgrade::growUp(App::version()->getVersion('core'));

            // Register new version
            App::version()->setVersion(My::id(), App::version()->getVersion('core'));

            return false;   // In order to prevent module version storage
        } catch (Exception $exception) {
            App::error()->add($exception->getMessage());
        }

        return true;
    }
}
