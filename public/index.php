<?php




/**
 * 
 * --------------------------------------------------------
 * *******************************************************
 * --------------------------------------------------------
 * THIS SPACE TO RUN APP INTANCE OR LOAD FOR THE USE OF APP :)
 * 
 * --------------------------------------------------------
*/
require "../Config/AutoLoad.php";

use App\Http\Load;


$app = new Load();

$app->runApp();





?>