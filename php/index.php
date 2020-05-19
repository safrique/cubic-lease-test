<?php

if (!empty($_GET['username']) && !empty($_GET['password'])) {
    echo "<div>Username=" . htmlentities($_GET['username']) . " -- Password=" . htmlentities($_GET['password']) . "</div>";
} else {
    var_dump($_GET);
    echo "<div>something wrong...</div>";
}