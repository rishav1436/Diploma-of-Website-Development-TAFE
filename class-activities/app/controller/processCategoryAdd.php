<?php
require('../model/dbConnection.php');
require('../model/dbFunctions.php');
require('../controller/inputFilter.php');
if (!empty([$_POST])) {
    //input sanitation via testInput function
    $category = inputFilter($_POST['catName']);
    $description = inputFilter($_POST['catDesc']);
    //function call
    addCategory($category, $description);
    header('location:../../index.php');
}
else {
    echo "Record couldn't be inserted";
}
