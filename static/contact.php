<?php 
    include 'header_template.php';
    include './contact/database.php';
    include './contact/form-handler.php';
?>

<main class="main">
    <div class="container">
        <div class="information">
            <h4>A PROBLEM ?</h4>
            <h1>CONTACT US</h1>
        </div>
        <div class="form_container">
            <form class="form" action="#" method="post">
                <div class="form_container_row">
                    <label for="name">Full name</label>
                    <input class="name" type="text" name="name" id="name" placeholder="Write your name here"
                        legend="Full name" value="<?= $_POST['name'] ?>">
                </div>
                <div class="form_container_row">
                    <label for="email">Email adress</label>
                    <input class="email" type="email" name="email" id="email" placeholder="toto@gmail.com"
                        legend="Email Address" value="<?= $_POST['email'] ?>">
                </div>
                <div class="form_container_row">
                    <label for="request">Your request</label>
                    <textarea class="request" type="text" name="request" id="res" placeholder="Tell us what's wrong"
                        legend="Your Request" value="<? = $_POST['request'] ?>"></textarea>
                </div>
                <input class="button_form" type="submit" value="SEND">
            </form>
        </div>
    </div>
</main>

<?php include('footer_template.php') ?>