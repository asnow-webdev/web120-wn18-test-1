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
    case "index.php":
        $title = "WEB120 Portal Website";
        $logo = "";
        $PageID = "Welcome";
    break;
        
    case "flexbox.php":
        $title = "Andy Snow Flexbox Research";
        $logo = "";
        $PageID = "Flexbox Research";
    break;
        
    case "galleries.php":
        $title = "Galleries";
        $logo = "";
        $PageID = "Galleries";
    break;

    case "map.php":
        $title = "Andy Snow's Google map";
        $logo = "";
        $PageID = "Google Map";
    break;        
        
     case "calendar.php":
        $title = "Calendar";
        $logo = "";
        $PageID = "Contact";
    break; 
        
    case "youtube.php":
        $title = "youtube";
        $logo = "";
        $PageID = "Andy Snow's video on something cool";
    break; 
        
    case "parallax.php":
        $title = "Parallax";
        $logo = "";
        $PageID = "Parallax Research";
    break;     
        
    case "shoppingcarts.php":
        $title = "shopping carts";
        $logo = "";
        $PageID = "Andy Snow's Shopping Cart";
    break;     
        
    case "webcam.php":
        $title = "webcam";
        $logo = "";
        $PageID = "Two webcams";
    break;     
        
    case "siteapp.php":
        $title = "siteapp";
        $logo = "";
        $PageID = "Contact (my name goes here)";
        
    default:
        $title = "THIS_PAGE";
        $logo = '';
        $PageID = '';
}