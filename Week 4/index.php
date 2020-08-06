<?php
require_once("config.php");
require('app/model/dbConnection.php');
require('app/model/dbFunctions.php');
require('app/controller/inputFilter.php');
require(ROOT . "app/view/template/header.php");
?>

<main>
    <article>
        <h2>Welcome.</h2>

        <div class="SampleFormBox">
            <form action="controller/processCatDelete.php" method="POST">
                <fieldset>
                    <legend>Update Category</legend>
                    <label for catID=>Which category ID would you like to delete?</label>
                    <input type="text" name="catID" required>
                    <input type="submit">
                </fieldset>
            </form>
        </div>

        <div class="sampleFormBox">
            <form action="controller/processCategoryAdd.php" method="POST">
                <fieldset>
                    <legend>Net Category</legend>
                    <label for catName=>Category Name:</label>
                    <input type="text" name="catName" required />
                    <label for catDesc=>Description:</label>
                    <textarea rows="4" name="catDesc" required></textarea>
                    <input type="submit" />
                </fieldset>
            </form>
        </div>


        <div class="sampleFormBox">
            <form action="controller/processCatUpdate.php" method="POST">
                <fieldset>
                    <legend>Update Category</legend>
                    <label for catID=>Which category ID would you like to update?</label>
                    <input type="text" name="catID" required>
                    <label for catName=>New value for Category</label>
                    <input type="text" name="catName">
                    <label for catDesc=>New value for Description</label>
                    <input type="text" name="catDesc">
                    <input type="submit">
                </fieldset>
            </form>
        </div>

        <div class="sampleFormBox">
            <form method="POST">
                <fieldset>
                    <legend>View single ID</legend>
                    <label for catID=>Insert value to view</label>
                    <input type="text" name="catID">
                    <input type="submit" name="Submit1"><br>
                    <?php
                    if (array_key_exists('Submit1', $_POST) and !empty([$_POST])) {
                        //input sanitation via testInput function
                        $catID = inputFilter($_POST['catID']);
                        //Function call
                        selectSinglefromCat($catID);
                    }
                    ?>
                </fieldset>
            </form>
        </div>

        <div class="sampleFormBox">
            <form method="POST">
                <fieldset>
                    <legend>View all</legend>
                    <input type="submit" name="Submit2" value="See all"><br>
                    <?php
                    if (array_key_exists('Submit2', $_POST)) {
                        selectAllCat();
                    }
                    ?>
                </fieldset>
            </form>
        </div>

    </article>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>