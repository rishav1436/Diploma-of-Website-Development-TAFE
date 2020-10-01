<?php
require_once("../../../config.php");
require(ROOT . "app/view/template/header.php");
?>

<main>
    <h2>Contact us!</h2>

    <article>
        <p>Have any questions, feedback or would just like to send us a message? Use the form below!</p>

        <div class='form'>
            <form>
                <fieldset>
                    <label>Name</label>
                    <input type='text'>

                    <label>Email</label>
                    <input type='email'>

                    <label>Message</label>
                    <textarea placeholder='Leave a message!'></textarea>

                    <input type="submit">
                </fieldset>
            </form>
        </div>

    </article>
</main>

<?php
require(ROOT . "app/view/template/footer.php");
?>