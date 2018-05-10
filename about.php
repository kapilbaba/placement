<?php
/**
 * Created by PhpStorm.
 * User: kapilanand
 * Date: 09/05/18
 * Time: 15:35
 */
?>
<?php $title = "about us"; ?>
<?php session_start() ?>
    <!DOCTYPE HTML>
    <html>
<?php include "layout/core/head.php" ?>

<?php
if (empty($_SESSION["authenticated"]) == true) {
    include "layout/navbar.php";
} else {
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

    <!-- About Three start -->
    <section class="about-area about-area-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>company profile</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                            rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis
                            placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae
                            iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque
                            sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed
                            molestiae quas officia reiciendis aut totam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>company objective</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                            rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis
                            placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae
                            iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque
                            sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed
                            molestiae quas officia reiciendis aut totam.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                            rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis
                            placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae
                            iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque
                            sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed
                            molestiae quas officia reiciendis aut totam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                            rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis
                            placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae
                            iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque
                            sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed
                            molestiae quas officia reiciendis aut totam.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <h3>Our value</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi
                            rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis
                            placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae
                            iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque
                            sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed
                            molestiae quas officia reiciendis aut totam.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Start -->
    <section class="separator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="separator-col">
                        <h2>please feel free to contact us</h2>
                        <h4><span>Hotline:</span> +9184475 81034</h4>
                        <h4><span>Mail Address:</span>contact@akostaplacement.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section -->
    <section class="testimonial-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <h1>What People <span>Says</span></h1>
                        <h5>consectetur adipisicing elit alias</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/1.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                majority have suffered alteration in some form, by injected humour. There are many
                                variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Tom Latham</a>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/2.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                majority have suffered alteration in some form, by injected humour. There are many
                                variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Merry Alvna</a>
                                <span class="post">Web Designer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/3.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                majority have suffered alteration in some form, by injected humour. There are many
                                variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Keen Williamson</a>
                                <span class="post">PHP Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client start -->
    <section class="client-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-carousel">
                        <div class="item">
                            <a href="#"><img src="images/1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/4.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/5.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "layout/footer.php"; ?>
<?php include "layout/core/script.php"; ?>