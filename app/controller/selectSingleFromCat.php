<?php
require('../model/dbConnection.php');
require('../model/dbFunctions.php');
require('inputFilter.php');
if (!empty([$_POST])) {
    //input sanitation via testInput function
    $catID = inputFilter($_POST['catID']);
//Function call
echo "Here is the data: ";
selectSinglefromCat($catID);
}
else {
    echo "Couldn't find info.";
}
?>