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
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'growUp',              // Name
    'Force some upgrades', // Description
    'Franck Paul',         // Author
    '0.3',                 // Version
    [
        'requires' => [['core', '2.24']], // Dependencies
        'type'     => 'plugin',           // Type

        'details'    => 'https://open-time.net/?q=growUp',       // Details URL
        'support'    => 'https://github.com/franck-paul/growUp', // Support URL
        'repository' => 'https://raw.githubusercontent.com/franck-paul/growUp/master/dcstore.xml',
    ]
);
