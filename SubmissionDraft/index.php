<?php
//$username = $_POST['username'];
//Echo '<br> Welcome '.$username;
//?>

<a href="index.php"> Home</a>
<a href="index.php?page=farmtable"> FarmTable</a>
<a href="index.php?page=tickets"> Tickets</a>
<a href="index.php?page=contact"> Contact us</a>

<?php

if (isset($_GET['page'])) {


    $page = $_GET['page'];
    $pageload = $page . '.php';
    echo "Our page is $page ";

} else {
    $pageload = 'home.php';
}
include($pageload);
?>