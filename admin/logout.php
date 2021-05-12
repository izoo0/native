<?php
/**................................................................
 * @package eblog v 1.0
 * @sidney ogot
 * .            
 * (joelotieno896@gmail.com)
 * ................................................................
 */
session_start();
session_destroy();
header("location: sign-in.php");
?>