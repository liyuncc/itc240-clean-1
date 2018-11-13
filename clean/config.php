<?php
/*
    config.php
    stores configuration data for our application
*/

ob_start(); //prevents header errors (read the whole file and do not send data)


define('DEBUG',TRUE); #we want to see all errors

include 'credentials.php'; //db credentials

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


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
        
    case 'db-test.php':
        $title= 'A database test page';
        $pageHeader = 'Database test page';
        $subHeader = 'Check this page to see if your db credentials are correct.';
    break; 
}


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

