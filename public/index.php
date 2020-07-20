<?php
//load up config file
require_once("../resources/config/conn.php");
//require_once(TEMPLATES_PATH."/inc/header.php");
require_once(LIBRARY_PATH . "/templateFunction.php");

$setValue = "Im from index";
$data = array();
$data['test'] = $setValue;

renderLayout("home", $data);
?>


<?php //require_once(TEMPLATES_PATH . "/inc/footer.php");?>