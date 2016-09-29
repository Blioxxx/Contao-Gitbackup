<?php


/**
 * Register the classes
 */
ClassLoader::addClasses(array(
    'backup'                => 'system/modules/bx_gitbackup/classes/backend.php',
    // Classes
    'Blioxxx\Contao\git'    => 'system/modules/bx_gitbackup/classes/git.php',
));

/**
 * Register the tempaltes
 */
TemplateLoader::addFiles(array(
    'be_bx_gitbackup'   => 'system/modules/bx_gitbackup/templates',
));