<?php

$flag = "FLAG{CREDIT-FOR-THIS-CHALLENGE-GOES-TO-TENESYS-CTF}";
if (isset($_GET['passwd'])) {

        if (hash("md5", $_GET['passwd']) == '0e514198428367523082236389979035'){
            echo "<h1>Here is your gift :</h1>".$flag;
        } else {
            echo "Get out from here";
    }
}
?>