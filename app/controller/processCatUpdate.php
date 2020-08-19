<?php

require('../model/dbConnection.php');
require('../model/dbFunctions.php');
require('inputFilter.php');
if (!empty([$_POST])) {
    //input sanitation via testInput function
    $catID = inputFilter($_POST['catID']);
    $category = inputFilter($_POST['catName']);
    $description = inputFilter($_POST['catDesc']);
    //function call
    updateCat($category, $description, $catID);
    echo "Record updated!";
}
else {
    echo "Record couldn't be updated.";
}
?>
<a href='../../index.php'> Back to Menu</a>