<?php

/**
 * @brief growUp, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Franck Paul and contributors
 *
 * @copyright Franck Paul contact@open-time.net
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
declare(strict_types=1);

if (isset($this) && is_object($this) && method_exists($this, 'registerModule') && isset($this->id) && is_string($this->id)) {
    $this->registerModule(
        'growUp',
        'Force some upgrades',
        'Franck Paul',
        '5.1',
        [
            'date'     => '2026-08-03T09:59:36+0200',
            'requires' => [['core', '2.36']],
            'type'     => 'plugin',

            'details'    => 'https://open-time.net/?q=growUp',
            'support'    => 'https://github.com/franck-paul/growUp',
            'repository' => 'https://raw.githubusercontent.com/franck-paul/growUp/main/dcstore.xml',
            'license'    => 'gpl2',
        ]
    );
}
