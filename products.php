<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadar Matrimony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Nadar Matrimony</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo11.jpg">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="contact.html"> Contact Us</a></li>
                            <li class="scroll-to-section"><a href="logincheck.php">Logout</a></li>
                            <li class="scroll-to-section"><a href="logincheck.php">My Profile</a></li>
                            
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Find your Match!</h2>
                        <span>Welcome to Nadar Matrimony!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Brides And Grooms!</h2>
                        <span>Eligible Bachelors And Bachelorettes</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                </div>
            </div>

            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Pick your choice!
                             <button type="submit" class="btn btn-primary btn-sm float-middle">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Brides And Grooms</h6>
                            <hr>
                            <?php
                                $con = mysqli_connect("localhost","root","","matrim");

                                $brand_query = "SELECT * FROM people";
                                $brand_query_run  = mysqli_query($con, $brand_query);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>" 
                                                    <?php if(in_array($brandlist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['gender']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No clients Found";
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM candidates WHERE id IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="border p-2">
                                                        <h6><?= $proditems['name']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM candidates";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $proditems) :
                                        ?>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <h6><?= $proditems['name']; ?></h6>
                                                </div>
                                            </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="arnav.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="arnav.html"><i class="fa fa-star"></i></a></li>
                                 
                                </ul>
                            </div>
                            <img src="assets/images/mo11.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Arnav Singh</h4>
                            <span>27, Civil Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="sreeya.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="sreeya.html"><i class="fa fa-star"></i></a></li>
                               
                                </ul>
                            </div>
                            <img src="assets/images/wo2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Sreeya Anand</h4>
                            <span>24, House surgeon</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="priyansh.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="priyansh.html"><i class="fa fa-star"></i></a></li>
                              
                                </ul>
                            </div>
                            <img src="assets/images/mo2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Priyansh kumar</h4>
                            <span>28, Software Engineer</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="meera.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="meera.html"><i class="fa fa-star"></i></a></li>
                                
                                </ul>
                            </div>
                            <img src="assets/images/wo3.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Meera Ahuja</h4>
                            <span>23, Professor</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="sathish.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="sathish.html"><i class="fa fa-star"></i></a></li>
                                
                                </ul>
                            </div>
                            <img src="assets/images/mo3.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Sathish Raj</h4>
                            <span>25, Accountant</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="lakshmi.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="lakshmi.html"><i class="fa fa-star"></i></a></li>
                                 
                                </ul>
                            </div>
                            <img src="assets/images/wo4.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Lakshmi Devi</h4>
                            <span>23, Nurse</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="sanvi.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="sanvi.html"><i class="fa fa-star"></i></a></li>
                                
                                </ul>
                            </div>
                            <img src="assets/images/wo12.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Sanvi Kumar</h4>
                            <span>25, Pilot</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="aryan.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="aryan.html"><i class="fa fa-star"></i></a></li>
                               
                                </ul>
                            </div>
                            <img src="assets/images/mo1.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Aryan Rai</h4>
                            <span>25, Data Scientist</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="ravi.html"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="ravi.html"><i class="fa fa-star"></i></a></li>
                                
                                </ul>
                            </div>
                            <img src="assets/images/mo4.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Ravi Gupta</h4>
                            <span>30, Entrepreuner</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © Nadar Matrimony. 
                        
                        <br>Design: Aishwarya
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
