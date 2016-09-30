<?php

namespace Blioxxx\Contao;

use Contao\Environment;
use Contao\Input;

class gitbackup extends \BackendModule
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

        $this->Template->init = Environment::get('uri')."&cmd=init";
        $this->Template->commit = Environment::get('uri')."&cmd=commit";
    }
}