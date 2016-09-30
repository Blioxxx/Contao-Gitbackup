<?php

use Contao\Input;
use Blioxxx\Contao\git;

class backend extends \BackendModule
{
    // template var
    protected $strTemplate = 'be_bx_gitbackup';

    public function compile()
    {
        if(Input::get('cmd') == "init")
        {
            $git = new git();
            $git->createGit();
        }

        if(Input::get('cmd') == "commit")
        {
            $git = new git();
            $git->commitChanges();
        }
    }
}