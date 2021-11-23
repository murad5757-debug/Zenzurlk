<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenzur - Sign-in</title>

    <!--webicon-->
    <link rel="shortcut icon" href="tar.ico">

    <!--Bootstrap 4.4.1-->
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">



    <!--Font awesome cdn link https://fontawesome.com/v4.7.0/icons/-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Font awesome cdn link https://fontawesome.com/v4.7.0/icons/-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@400;500;600&family=Parisienne&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--Lobster Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">

    <!--animation css from aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--Customizing style css--> <!-- it has been added because normal css code is not working in Xamp -->
    <link rel="stylesheet" href="Assets/css/Styling.css?v=<?php echo time();?>">








</head>

<body>

    <!------------------------------Top Bar------------------->
    <div class="top-bar ">
        <div class="container">
            <div class="col-12 text-right my-auto  ">
            <p><a href="tel:+94777734180">Call Us +94-77-773-4180</a></p>
            </div>
        </div>
    </div>
    <!--End Top Bar------------------------------------------->


    <!------------------------------Navigation Starts---------------->
    <nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
        <div class="container">

            <a href="index.html" class="navbar-brand"><img src="Assets/Images/Home/cup.svg" alt="logo"
                    class="d-inline-block align-center" title="Logo"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <!--The Hamburger icon-->
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link ">HOME</a></li>
                    <li class="nav-item"><a href="ceylontea.html" class="nav-link ">CEYLON TEA</a></li>
                    <li class="nav-item"><a href="about-us.html" class="nav-link ">ABOUT US</a></li>
                    <div class="dropdown">
                    <li class="nav-item"><a href="our-products.html" class="nav-link dropbtn">OUR PRODUCTS</a></li>
                    <div class="dropdown-content">
                        <a href="our-products.html"target="_blank"> Classic Black Tea</a>
                        <a href="our-product-green.html" target="_blank"> Classic Green Tea</a>
                        <a href="our-products-flavoured-black.html" target="_blank"> Flavoured Black Tea</a>
                        <a href="our-products-flavoured-green.html" target="_blank"> Flavoured Green Tea</a>
                    </div>
                </div>

                    <li class="nav-item"><a href="contact-us.html" class="nav-link ">CONTACT US</a></li>
                    <li class="nav-item"><a href="signing.php" class="nav-link active">SIGN IN</a></li>
                </ul>
            </div>


        </div>
    </nav>
    <!--End Navigation---------------------------------------->


    <section class="section-sign-bg">
        <div class="container-fluid">
            
                <h1>
                    Contact us using this form and we will reply to you with our wholesale offers and distributor information & Customer Complaints.
                </h1>


                <div class="container">
                    <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <h2 class="sign-second-heading text-left">Want to supply your stores or distribution chains with Zenzur Tea?</h2>
                        <p class="sign-para">Zenzur Tea offers all of our products in large quantities to provide you with Ceylon quality tea at low wholesale 
                            prices. We supply tea to stores and distribution chains of any size, with a variety of options available to meet all your needs.
                        </p>
                    </div>

                    <div class="col-lg-6">
                        
                    <?php
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                            
                                $Msg = "Please fill your details below";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';  
                             }

        //Success message will show over here//

                             if(isset($_GET['success']))
                             {
                                $Msg = "Your Message Has Been Sent";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';  
                             }

                        ?>

                        
                        <form action="process.php" method="post">
                  <input type="text" name="UName" placeholder="Name" class="form-control mb-2">
                  <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                  <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                  <textarea name="msg" class="form-control mb-2" placeholder="Write Your Message Here & Complaints Here"></textarea>
                    <button class="btn btn-success" name="btn-send">Send</button>

          
                    <h3 class="complaint-head">OR CONTACT US VIA WHATSAPP</h3>
                    </div>
          
                </form>



                            

                    
                </div>
            </div>
        </div>


        <div class="container">
            <div class="whatsapp_float">
                <a href="https://wa.me/+94779837754" target="_blank">
                <img src="Assets/Images/Sign/whatsapp.png" width="100px" 
                class="whatsapp_float_btn" data-toggle="tooltip" alt="Whatsapp-icon" 
                title="Drop Message">
            </a>
                
            </div>
    </div>
    </section>

    



    <!--*********************************footer starts*******************************************-->

    <footer>
        <div class="container col-12">
            <div class="row text-light text-center py-4 justify-content-center">

                <div class="col-sm-6 col-md-8 col-lg-5">
                    <img src="Assets/Images/Home/footer-Logo.png" alt="footer image" class=" d-inline-block">
                </div>
                <div class="col-lg-8 col-sm-8">
                    <h5>HEAD OFFICE</h5>
                    <p>No 67B Sedawatte Road, Wennawatte
                        Wellampitiya,Sri
                        Lanka.
                        <br>
                        Hot line :+94 77 7734180 /
                        Tel: +94-11-2554536

                        <br>
                        E-mail: info@ceylontealand.com
                    </p>

                    <ul class="social pt-1 text-center">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>

                    </ul>

                </div>
            </div>
        </div>
    </footer>

    <!--*********************************footer ENDS*******************************************-->



    <!-------------------Start Socket---------------->

    <div class="socket text-light text-center py-3 col-12">
        <p>&copy; <a href="https://ceylontealand.com" target="_blank">2021 2021 Zenzur. All Rights Reserved!
            </a></p>
    </div>

    <!--End Socket----------------------------------->










    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 900
        });
    </script>

    <!--Script Source Files-->

    <!--Jquery Version 3.4.1 Jquery.com-->
    <script src="Assets/js/Jquery-3.4.1.min.js"></script>

    <!--Bootsrap Js 4.4.1-->
    <script src="Assets/js/bootstrap.min.js"></script>

    <!--Popper Js from bootsrap cdn to download via link //https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js-->
    <script src="Assets/js/4.4.1-bootrsap-popper.min.js"></script>
</body>

</html>



