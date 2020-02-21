<?php

echo "Is bob.php there?";

if ($handle = opendir('/var/www/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry\n";
        }
    }

    closedir($handle);
}

phpinfo();

?>
