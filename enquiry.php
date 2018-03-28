<?php $title = "contact-us"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
body{
    background: url("/images/map.jpeg");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover
}
</style>
<div id="page">
    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>
    <section class="contact-us">

        <div class="form_page">
            <form action="mail.php" method="post">

<div class="col-md-12">

</div>
                <div class="col-md-12 col-sm-6 col-xs-12">

                    <div class="form-group">
                        <label for="name"> name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="subject">subject</label>
                        <input type="text" name="subject" class="form-control" id="subject">
                    </div>
                </div>

                <div class="col-md-12 col-sm-6 col-xs-12">
                    <textarea id="message" name="message" placeholder="Write something.." cols="75" rows="5"></textarea>
                </div>
                <p style="text-align: center">


                    <button type="submit" class="button1">send</button>
                </p>

            </form>
        </div>
    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
