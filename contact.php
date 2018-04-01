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
    p{
        margin: 10px;
    }
</style>
<div id="page">
    <?php include "layout/header.php"; ?>
    <?php include "layout/nav.php"; ?>
    <section class="contact-us">

        <div class="form_page">

            <div id="contact-page" class="container">
                <div class="bg" style="margin-top: 5%; margin-bottom: 5%">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <h2 class="title text-center">Contact <strong>Us</strong></h2>
                            <BR>
                            <div id="gmap" class="contact-map">
                                <iframe width="100%" height="250px" frameborder="3" style="border:0" align="center" src="https://www.google.com/maps/embed/v1/search?key=AIzaSyA6fl3wJi1-Zsc1YpE8ZDqbxrlpJrULrN0&amp;q=c218+sector-63+noida" allowfullscreen="">
                                </iframe>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-4">
                            <div class="contact-info">
                                <h2 class="title text-center">Contact Info</h2>
                                <BR>
                                <address>
                                    <p>Akosta placement</p>
                                    <p style="padding: 2px; border: 1px solid">company information Pvt. Ltd.
                                        <br>
                                        C-218, Sector-63, Noida, U.P.</p>

                                    <p>Support Email</p>
                                    <p style="padding: 2px; border: 1px solid">contact@gakostaplacement.com</p>
                                    <P>Phone</P>
                                    <p style="padding: 2px; border: 1px solid">+911204108678 </p>
                                </address>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>


</div>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>

</html>
