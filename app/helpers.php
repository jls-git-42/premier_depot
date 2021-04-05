<?php

/**
 * fonction qui gere le titre des pages
 */

 if(!function_exists('Page_Title')){

    function Page_Title(?string $pageTitle=null):string{

        if($pageTitle === null){
            return config('app.name');
        }else{
            return $pageTitle . ' | ' .config('app.name');
        }    
    }
 }

