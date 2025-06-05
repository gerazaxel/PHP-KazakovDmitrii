<?php
    session_start();

    if (isset($_SESSION['message'])) {
        echo "Тебе отправили: " . $_SESSION['message'];
    } else {
        echo "Эх, тебе ничего не отправили(";
}
?>