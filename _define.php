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
    '2.0.1',
    [
        'requires' => [['core', '2.26']],
        'type'     => 'plugin',

        'details'    => 'https://open-time.net/?q=growUp',
        'support'    => 'https://github.com/franck-paul/growUp',
        'repository' => 'https://raw.githubusercontent.com/franck-paul/growUp/master/dcstore.xml',
    ]
);
