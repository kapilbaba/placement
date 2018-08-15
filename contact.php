<?php $title = "contact-us"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
.contact-us{
    margin-top: 5%;
    margin-bottom: 5%;
}
    p{
        margin: 10px;
    }
    .form_page{

        margin: 0px;
        padding: 0px;
        background: none;
    }


    body, input, textarea {
        font-family: 'Opne Sans', sans-serif;
    }
    button, input, textarea {
        display: block;
        box-shadow: none;
        outline: 0;
    }
    body {

        font-size: 16px;
    }
    h4, ul {
        margin: 0;
        padding: 0;
    }
    h4 {
        color: crimson;
        font-weight: 400;
        font-family: 'Roboto Slab', serif;
    }
    ul {
        list-style-type: none;
    }
    button {
        border: none;
        padding: 0;
        background: 0 0;
    }
    input, textarea {
        font-size: 16px;
        line-height: 28px;
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }
    . {
        text-align: center;
        padding-top: 20px;
    }
.item{
    background: white;
    color: black;
    padding: 15px;
}
    .color{
        color: deepskyblue;
    }
    .black{
        color: black;
    }
</style>
<div id="page">
    <?php
    if (empty($_SESSION["authenticated"])== true){
        include "layout/navbar.php"; }
    else{
        include 'layout/user-navbar.php';
    }
    ?>


    <section class="innerpage-titlebar">
        <div class="container">
            <div class="titlebar-box">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <h2><?php echo $title;?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                        <div class="titlebar-col">
                            <p><a href="/">Home</a> | <a href="#"><span><?php echo $title;?></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us">

        <div class="form_page">
            <div  class="container">

                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <form action="mail.php" method="post">
                                    <div class="form-group">
                                        <label for="contact_name">Name:</label>
                                        <input id="contact_name" required type="text" class="form-control" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label  for="contact_email">Email Id:</label>
                                        <input data-validation="email" id="contact_email" type="email" class="form-control" placeholder="Enter Email Id" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_subject">Subject</label>
                                        <input id="contact_subject" required type="text" class="form-control" placeholder="Enter Subject here" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea id="message"  required class="form-control" rows="5" name="message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default simple-btn"  name="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <h4>24/7 Quick Contact</h4>

                                <ul>
                                    <li class="color">Address: <span class="black"> A-3/56, Dal Mill Rd, Ashok Nagar, New Delhi</span></li>
                                    <li class="color">Mobile No: <span class="black"> ‪+91 84475 81034</span></li>
                                    <li class="color">Email: <span class="black" style="text-transform: lowercase"> contact@akostaplacement.com</span></li>
                                    <li class="color">Email: <span class="black" style="text-transform: lowercase"> akostaplacement@gmail.com</span></li>

                                </ul>
                            </div>
                            <br>
                             <div class="form-group iframe"><iframe allowfullscreen="" frameborder="0" height="230" width="775" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=A-3%2F56%2C%20Dal%20Mill%20Rd%20Hostal%20Vihar%2C%20Om%20Vihar%2C%20Uttam%20Nagar%20Delhi%2C%20110059+(akostaplacement)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="border:0"></iframe></div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <h4>Working Hours</h4>

                                <ul>
                                    <li class="color">Mon - Fri Day: <span class="black"> 09.00am to 06.00pm </span></li>
                                    <li class="color">Saturaday: <span class="black"> 10.00am to 04.00pm </span></li>
                                    <li class="color">Sunday: <span class="black"> Closed</span></li>
                                </ul>
                                <br>

                            </div>
                            <br>
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
