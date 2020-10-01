<?php
require('../model/dbConnection.php');
require('../model/dbFunctions.php');
require('../controller/inputFilter.php');
if (!empty([$_POST])) {
    //input sanitation via testInput function
    $catID = inputFilter($_POST['catID']);
    //function call
    deleteCat($catID);
    header('location:../../index.php');
}
else {
    echo "Problem...";
}
