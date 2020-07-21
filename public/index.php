<?php
//load up config file
require_once("../resources/config/conn.php");
require_once(TEMPLATES_PATH."/inc/header.php");

?>

<div class="m-justify-md">
<div class="m-card">
    <div class="m-card-body">
    <h2>Index page</h2>
    <a href="<?php echo PublicDir ?>/home.php">click to goto hoomepage</a>
    </div>
</div>
</div>


<?php require_once(TEMPLATES_PATH . "/inc/footer.php");?>