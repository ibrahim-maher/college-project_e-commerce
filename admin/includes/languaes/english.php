<?php

function lang ($pharse )
{
    static $lang = array (

        'HOME_ADMIN' 	=> 'Home',
        'CATEGORIES' 	=> 'Categories',
        'ITEMS' 		=> 'Items',
        'MEMBERS' 		=> 'Members',
        'COMMENTS'		=> 'Comments',
        'STATISTICS' 	=> 'Statistics',
        'LOGS' 			=> 'Logs',
        '' => '',
        //home page 
        "massege"=>"welcome",

        "admin"=> "adminoo ",

    );

    return $lang[$pharse];

}