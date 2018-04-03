<?php $title = "contact-us"; ?>
<!DOCTYPE HTML>
<html>
<?php include "layout/core/head.php" ?>
<style>
body{
    background-image:url("/images/jobconfirm.jpeg") ;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
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
    h5, ul {
        margin: 0;
        padding: 0;
    }
    h5 {
        color: #04b3ee;
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
    background: #0000008f;
    color: white;
    padding: 15px;
}
</style>
<div id="page">
    <?php include "layout/header.php"; ?>
    <?php include "layout/navbar.php"; ?>
    <section class="contact-us">

        <div class="form_page">
            <div style="padding: 5%" class="container">
                <div class="tab active-tab" id="Newyork" style="display: block;">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <form action="mail.php" method="post">
                                    <div class="form-group">
                                        <label for="email">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Email Id:</label>
                                        <input type="email" class="form-control" placeholder="Enter Email Id" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Subject</label>
                                        <input type="text" class="form-control" placeholder="Enter Subject here" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Message:</label>
                                        <textarea class="form-control" rows="5" name="message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <h3>24/7 Quick Contact</h3>

                                <ul>

                                    <li>Mobile No: <span> ‪+91 84475 81034</span></li>
                                    <li>Email: <span> contact@akostaplacement.com</span></li>
                                    <li>Email: <span> akostaplacement@gmail.com</span></li>
                                </ul>
                            </div>
                            <br>
                            <div class="form-group"><iframe allowfullscreen="" frameborder="0" height="230" width="775" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.224905800714!2d77.30294931508169!3d28.59302898243347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce48c3ff9f49f%3A0xab54af6155ff9419!2sAVA+Placement+Services!5e0!3m2!1sen!2sin!4v1503625409203" style="border:0"></iframe></div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="item">
                                <h3>Working Hours</h3>

                                <ul>
                                    <li>Mon - Fri Day: <span> 09.00am to 18.00pm </span></li>
                                    <li>Saturaday: <span> 10.00am to 16.00pm </span></li>
                                    <li>Sunday: <span> Closed</span></li>
                                </ul>
                                <br>
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
