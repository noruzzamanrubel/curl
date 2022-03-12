<?php 

echo "Welcome to the beautiful world of CURL and PHP!";

if(isset($_POST['secret'])) && 'noodles' == $_POST['secret']){
    echo "<br/>please have some noodles:)";
}
