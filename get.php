<?php
if ($_SERVER["GET"] == "POST") {
    // collect value of input field
    $name = $_POST['kek']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
