<?php
// Add a new row to the category table
function addCategory($category, $description)
{
    global $conn;
    try {
        //prepare statement with named placeholders
        $stmt = $conn->prepare("INSERT INTO category(categoryName, categoryDescription) VALUES (:cat, :descript)");
        //bind values
        $stmt -> bindValue(':cat', $category);
        $stmt -> bindValue(':descript', $description);
        //execute insert statement
        $stmt -> execute();
    } catch (PDOException $ex) {
        throw $ex;
    }
}
// update
function updateCat($category, $description, $catID)
{
    global $conn;
    try {
        $sql = "UPDATE category SET categoryName=?, categoryDescription=? WHERE categoryID=?";
        $stmt = $conn->prepare($sql);
        $stmt -> execute([$category, $description, $catID]);
    } catch (PDOException $ex) {
        throw $ex;
    }
}
// delete
function deleteCat($catID)
{
    global $conn;
    try {
        $stmt = $conn->prepare("DELETE FROM category WHERE categoryID=:id");
        $stmt->bindValue(':id', $catID);
        $stmt->execute();
        if (!$stmt->rowCount()) echo "Deletion failed";
    } catch (PDOException $ex) {
        throw $ex;
    }
}
// select all
function selectAllCat()
{
    global $conn;
    try {
        $stmt = $conn->prepare('SELECT * FROM category');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $numRows = $stmt->rowCount();
        echo "Total number of rows is: " . $numRows . "<br>";
        if ($numRows < 1) {
            echo "Table is empty.";
        } else {
            foreach ($result as $row) {
                echo $row['categoryName'] . " - " . $row['categoryDescription'] . "<br>";
            }
        }
    } catch (PDOException $ex) {
        throw $ex;
    }
}
// select single
function selectSinglefromCat($catID)
{
    global $conn;
    try {
        $stmt = $conn->prepare("SELECT categoryName FROM category WHERE categoryID=:id");
        $stmt->execute(["id" => $catID]);
        $result = $stmt->fetch();
        echo $result['categoryName'];
    } catch (PDOException $ex) {
        throw $ex;
    }
}
