<?php
/**
 * Created by PhpStorm.
 * User: adebola
 * Date: 11/11/2014
 * Time: 4:21 AM
 */

// define('db_user','thetople');
// define('db_name','thetople_toplevelz');
// define('db_pass','Askmenow12345####$$$');
// define('db_host','localhost');


define('db_user','acekncom');
define('db_name','acekncom_api');
define('db_pass','1234567890Ai#####');
define('db_host','localhost');
$conn = mysqli_connect(db_host,db_user,db_pass) or die(mysqli_error());
mysqli_select_db($conn,db_name) or die('could not select the database');

?>
