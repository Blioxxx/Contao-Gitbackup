<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{bx_git},bx_git_host_url,bx_git_host_user,bx_git_host_password,bx_git_path';

$GLOBALS['TL_DCA']['tl_settings']['fields']['bx_git_host_url'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['bx_git_host_url'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'tl_class'=>' w50', 'maxlength'=>6, 'minlength'=>6)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['bx_git_host_user'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['bx_git_host_user'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'tl_class'=>' w50', 'maxlength'=>6, 'minlength'=>6)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['bx_git_host_password'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['bx_git_host_password'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'tl_class'=>' w50', 'maxlength'=>6, 'minlength'=>6)
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['bx_git_path'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['bx_git_path'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'tl_class'=>' w50', 'maxlength'=>6, 'minlength'=>6)
);