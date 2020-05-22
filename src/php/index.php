<?php

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    echo "<div>Username=" . htmlentities($_POST['username']) . " -- Password=" . htmlentities($_POST['password']) . "</div>";
} else {
    var_dump($_POST);
    echo "<div>something wrong...</div>";
}