<?php

class AfterInstall
{
    public function run($conatiner)
    {
        $config = $conatiner->get('config');

        $tabList = $config->get('tabList');
        if (!in_array('ICTExtention', $tabList)) {
            $tabList[] = 'ICTExtention';
            $config->set('tabList', $tabList);
        }
        
         //$tabList = $config->get('tabList');
       /* if (!in_array('ICTBroadcastconfig', $tabList)) {
            $tabList[] = 'ICTBroadcastconfig';
            $config->set('tabList', $tabList);
        }*/

        $config->save();
    }
}