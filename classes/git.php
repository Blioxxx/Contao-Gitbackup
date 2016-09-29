<?php

namespace Blioxxx\Contao;

//include ('../vendor/autoload.php');

use Bit3\GitPhp;
use Contao\Date;

class git
{
    /**
     * Generates new Git Repo at the GitPath in Settings
     */
    public function createGit()
    {
        if($GLOBALS['TL_CONFIG']['bx_git_path'])
        {
            $gitPath = TL_ROOT.$GLOBALS['TL_CONFIG']['bx_git_path'];
        }else{
            $gitPath = TL_ROOT."/";
        }

        $git = new  GitPhp\GitRepository($gitPath);
        $git->init()->execute();
        
        //Set Remote
        $url = explode("://", $GLOBALS['TL_CONFIG']['bx_git_host_url']);
        $git->remote()->setUrl('origin', $url[0]."://".$GLOBALS['TL_CONFIG']['bx_git_host_user'].":".$GLOBALS['TL_CONFIG']['bx_git_host_pass']."@".$url[1]);
    }

    public function commitChanges()
    {
        if($GLOBALS['TL_CONFIG']['bx_git_path'])
        {
            $gitPath = TL_ROOT.$GLOBALS['TL_CONFIG']['bx_git_path'];
        }else{
            $gitPath = TL_ROOT."/";
        }

        $git = new GitPhp\GitRepository($gitPath);
        $git->add()->execute("*");

        $date = Date::parse('d.m.Y', time());
        $git->commit()->message('Backup '.$date)->execute();
        $git->push()->execute('origin', 'master');
    }
}