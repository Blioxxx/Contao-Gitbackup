<?php


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Blioxxx',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array(
    // Classes
    'Blioxxx\Contao\git'        => 'system/modules/bx_gitbackup/classes/git.php',
    'Blioxxx\Contao\gitbackup'  => 'system/modules/bx_gitbackup/classes/gitbackup.php',
));

/**
 * Register the tempaltes
 */
TemplateLoader::addFiles(array(
    'be_bx_gitbackup'   => 'system/modules/bx_gitbackup/templates',
));