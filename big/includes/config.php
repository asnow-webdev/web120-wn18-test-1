<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: dreamhost.com
$siteKey = "6LcdRjUUAAAAAPji9dxfmZKHlubSNOh1Zw0KbkzE";
$secretKey = "6LcdRjUUAAAAAGhPzj_jr9BjTn4iNR1IZ8oJNen3";

//echo basename($_SERVER['PHP_SELF']);
//die;

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo "constant: " . THIS_PAGE;
//die;


switch(THIS_PAGE)
{
    case 'index.php':
        $title = '(my name goes here): WEB120 Portal Website';
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'aia.php':
        $title = 'Final Project: Audience, Issues and Approach';
        $logo = 'fa-users';
        $PageID = 'Final Project: Audience, Issues and Approach';
    break;
        
    case 'ux.php':
        $title = 'Final Project: Flowchart and Layout';
        $logo = 'fa-file-text-o';
        $PageID = 'Final Project: Flowchart and Layout';
    break;

    case 'contactme.php':
        $title = 'Contact (my name goes here)';
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact (my name goes here)';
    break;        
        
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}