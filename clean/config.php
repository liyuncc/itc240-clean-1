<?php
/*
    config.php
    stores configuration data for our application
*/
//echo basename($_SERVER['PHP_SELF']);



define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//echo 'the constant is storing: ' . THIS_PAGE;
//die;

//default page values
$title = THIS_PAGE;
$siteName = 'Site Name';
$slogan = 'Whatever it is you do, we do it better!';
$pageHeader = 'The developer forgot to put a page header';
$subHeader = 'The developer forgot to put a sub header';

switch(THIS_PAGE){
    case 'template.php':
        $title= 'My template page';
        $pageHeader = 'Put PageID here';
        $subHeader = 'Put more info about page here';
    break;
        
    case 'daily.php':
        $title= 'My daily page';
        $pageHeader = 'Daily Coffee Specials';
        $subHeader = 'All our coffee is special!';
    break;
        
    case 'contact.php':
        $title= 'My contact page';
        $pageHeader = 'Please contact us';
        $subHeader = 'We appreciate your feedback';
    break; 
}