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
$this->registerModule(
    'growUp',
    'Force some upgrades',
    'Franck Paul',
    '5.0',
    [
        'date'     => '2025-09-07T16:01:00+0200',
        'requires' => [['core', '2.36']],
        'type'     => 'plugin',

        'details'    => 'https://open-time.net/?q=growUp',
        'support'    => 'https://github.com/franck-paul/growUp',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/growUp/main/dcstore.xml',
        'license'    => 'gpl2',
    ]
);
