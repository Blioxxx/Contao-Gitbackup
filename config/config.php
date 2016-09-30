<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Easyupdate3
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */
array_insert($GLOBALS['BE_MOD']['system'], 3, array (
    'gitbackup' => array (
        'callback'  => 'backend',
        'icon'      => 'system/modules/bx_gitbackup/assets/icon.png',

    )
));