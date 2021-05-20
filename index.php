<?php
require_once 'core/init.php';

for ($i=0;$i++;$i<100)
{

        $juicer = new Juicer();
        $volume = Juicer::getVolume();
        if (!empty($fruit)) {
           $stop =  $juicer->strainer->SqueezingFruit($fruit);
        }
        try{
            if($volume > $stop){
                echo $juicer->strainer->SqueezingFruit($fruit);
            }
        }catch (Exception $e)
        {
            $e->getMessage("PremasenKapacitetException");
            exit();
        }





}