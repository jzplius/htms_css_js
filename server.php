<?php
/**
 * Created by PhpStorm.
 * User: jzplius
 * Date: 15.11.5
 * Time: 00.39
 */

// Include bootstrap
if(isset($_POST['name']) && isset($_POST['surname'])) {
    echo '<p>Retrieved such data: ' . $_POST['name'] . ', ' . $_POST['name'] . '</p>';
}