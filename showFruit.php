<?php
    if (isset($_COOKIE["fruit"]) AND isset($_COOKIE["fname"]))
        echo $_COOKIE["fname"] . "'s favorite fruit is " .
            $_COOKIE["fruit"] . ".";
    else
        echo "I dunno your favorite fruit.";
?>