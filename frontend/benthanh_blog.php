<?php
    require_once '../admin/connectData.php';
    if (isset($_POST['submit'])) {
        $sender = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //$date = date("Y/m/d"); //thay sua

        //echo "Test3<br>";
        $sql = "INSERT INTO comment (sender, email, comment) 
        VALUES ('$sender', '$email', '$message')"; //thay sua them thuoc tính date
        //echo "Test4<br>"; //met moi 
        //thay them try catch
        try 
        {
            $query = mysqli_query($conn, $sql);
        }
        catch(Exception $e)
        {
            var_dump($e);
        }
        //echo "Test5<br>";
        //move_uploaded_file($hotelImage_tmp, '../frontend/img_hoteldetails/'. $hotelImage);
        //echo "Test6<br>";
        //header('Location: buttonHotel.php');
        //echo "Test7<br>";
        //die();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reis-Explore the World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- link icon -->
    <link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"

      href="/css/app-wa-8d95b745961f6b33ab3aa1b98a45291a.css?vsn=d"
    >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"

        href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css"
      >

    <!-- Favicon -->
    <link href="img/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i><a href="mailto:reisadventurescontact@gmail.com" style="color: #F4538A; text-decoration: none;">reisadventurescontact@gmail.com</a></p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i><a href="tel:+19223600" style="color: #F4538A; text-decoration: none;">+1922 3600</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/profile.php?id=61557250007525" target="_blank"  title="Visit the Reis Adventures fanpage.">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://twitter.com/reis_adventures" target="_blank"  title="Visit the Reis Adventures Twitter.">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.linkedin.com/in/reis-adventures-458144300/" target="_blank"  title="Visit the Reis Adventures Linkedin.">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" target="_blank"  title="Visit the Reis Adventures Instagram.">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="https://www.youtube.com/channel/UCzpbRAodCMdAfjL9tjk4Gfw" target="_blank"  title="Visit the Reis Adventures Youtube Channel.">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-primary1 mt-3 "><span class="text-dark"><img class="Imagealignment" src="img/icon.png">&nbsp; RE</span>IS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="package.html" class="nav-item nav-link">Tour Packages</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item active">Blog Detail</a>
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="guide.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-headerBT">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 style="color:#f7c1c6 ;" class="display-4 text-uppercase">Ben Thanh market</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a style="color:#f7c1c6 ;"  href="index.html">Home</a></p>
                    <i style="color:#f7c1c6;" class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p style="color: #fff;" class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End12-->


    <!-- Booking Start -->
    <!--<div class="container-fluid booking mt-5 pb-5">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <h4>Make Your Plan</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 1</option>
                                        <option value="3">Destination 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Duration 1</option>
                                        <option value="2">Duration 1</option>
                                        <option value="3">Duration 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: 30px;"><b>Submit</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Booking End -->

    <!--book now
        <div class="row">
            <i class="fas fa-hand-point-right fa-beat-fade fa-2xl mr-3 mt-2" style="color: #ae0054;"></i>
            <a href="">
                <div class="wrapper">
                    <div class="button btn-outline-primary">
                        <div class="icon"><i class="fad fa-plane-departure fa-2xl"></i></div>
                        <span class="book"><b>Book now</b></span>
                    </div>
                </div>
            </a>
        </div>
    -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <form method="POST" enctype="multipart/form-data">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="blog-item">
                                <div class="position-relative">
                                    <img class="img-fluid1 w-100" src="img/cuatay.jpg" alt="">
                                    <!--<div class="blog-date">
                                        <h6 class="font-weight-bold mb-n1">01</h6>
                                        <small class="text-white text-uppercase">Jan</small>
                                    </div>-->
                                </div>
                            </div>
                            <div class="bg-white mb-3 container-fluidBT1" style="padding: 30px;">
                            
                                <!--<div class="d-flex mb-3">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                </div>-->
                                <h2 class="mb-3">Some features of Ben Thanh market </h2>
                                <p>Ben Thanh Market is one of the most iconic landmarks in Ho Chi Minh City, Vietnam. Located in the heart of District 1, 
                                    this bustling market has been a central hub for locals and tourists alike for over a century.
                                    Ben Thanh Market was established in the late 19th century during French colonial rule. It started as an informal 
                                    gathering of street vendors selling goods near the Saigon River. Over time, it grew into a permanent structure and became 
                                    the largest marketplace in Saigon (former name of Ho Chi Minh City).</p>
                                <p>The market's architecture reflects a blend of Vietnamese and French colonial influences. Its distinctive yellow walls and 
                                    clock tower make it a recognizable landmark in the city. The market is divided into various sections, offering a wide array 
                                    of products ranging from clothing, textiles, handicrafts, souvenirs, fresh produce, spices, and local cuisine. Ben Thanh Market 
                                    stands as a symbol of Ho Chi Minh City's rich history, culture, and commerce. Whether you're in search of unique souvenirs, delectable 
                                    street food, or simply want to immerse yourself in the local atmosphere, a visit to this iconic marketplace is a must.</p>
                                <h4 class="mb-3">Social - Cultural</h4>
                                <img class="img-fluid7 w-50 float-left mr-4 mb-2" src="img/bentrongcho.jpg">
                                <p><b class="mini_header">Shopping Experience:</b> Ben Thanh Market offers a lively and chaotic shopping experience. 
                                    Visitors can immerse themselves in the vibrant atmosphere, bargaining with vendors for goods. 
                                    It's a great place to shop for traditional Vietnamese items such as ao dai (traditional Vietnamese attire), 
                                    conical hats, lacquerware, and silk products. Additionally, the market's food section is a must-visit, offering
                                    a variety of local delicacies and street food stalls.
                                    <br><b class="mini_header">Cultural Hub:</b> Beyond its role as a marketplace, Ben Thanh is also a cultural hub where locals gather to socialize and exchange goods. It's a place where visitors can experience the pulse of daily life in Ho Chi Minh City, witnessing the hustle and bustle of commerce and the warmth of Vietnamese hospitality.</p>
                                <h4 class="mb-3">Tourist</h4>
                                <img class="img-fluid7 w-50 float-right ml-4 mb-2" src="img/banhang.jpg">
                                <p><b class="mini_header">Tourist Destination:</b> Due to its historical significance and vibrant atmosphere, Ben Thanh Market 
                                    is a popular destination for tourists visiting Ho Chi Minh City. It's often included in city tours 
                                    and is recommended for those looking to experience authentic Vietnamese culture and cuisine.
                                    <br><b class="mini_header">Tips for Visitors:</b> When visiting Ben Thanh Market, it's essential to hone your bargaining skills as 
                                    prices are often negotiable. Additionally, be prepared for crowds, especially during peak hours. Exploring 
                                    the market in the morning can offer a more relaxed shopping experience.</p>
                                <div class="row">
                                    <i class="fas fa-hand-point-right fa-beat-fade fa-2xl mr-3 mt-2" style="color: #ae0054;"></i>
                                    <a href="">
                                        <div class="wrapper">
                                            <div class="button btn-outline-primary">
                                                <div class="icon"><i class="fad fa-plane-departure fa-2xl"></i></div>
                                                <span class="book"><b>Book now</b></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Detail End -->
        
                        <!-- Comment List Start -->
                        <!--<div class="bg-white container-fluidCM" style="padding: 30px; margin-bottom: 30px;">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                        Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                        consetetur at sit.</p>
                                    <button class="btn btn-sm btn-outline-primary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                        Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                        consetetur at sit.</p>
                                    <button class="btn btn-sm btn-outline-primary">Reply</button>
                                    <div class="media mt-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                            style="width: 45px;">
                                        <div class="media-body">
                                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                                labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                                eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                                ipsum diam tempor consetetur at sit.</p>
                                            <button class="btn btn-sm btn-outline-primary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <!-- Comment List End -->
        
                        <!-- Comment Form Start -->
                        <!--<div class="bg-white mb-3 container-fluidCM" style="padding: 30px">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h4>
                            <form>
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>
        
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>-->
                        <!-- Comment Form End -->
                    </div>

                    <!--comment-->
        
                    <div class="col-lg-5 mt-3 mt-lg-0">
                        <h1 class="headcomment border-top6">Comments</h1>
                        <div class="bg-white container-fluidCM" style="padding: 30px; margin-bottom: 30px;">
                            <!--<h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>-->
                            <div class="media mb-4">
                                <!-- <img src="img/girl1.jpg" alt="Image" class="img-fluid8 mr-3 mt-1" style="width: 55px;"> -->
                                <div class="media-body">
                                    <h6><a href="">Mariana</a> <small><i>25 Mar 2024</i></small></h6>
                                    <p>What an incredible journey! From the exciting streets of HCM city to 
                                        the serene view of Ben Thanh market, this trip was nothing short of
                                        magical. Highly recommend experiencing Vietnam's beauty firsthand!</p>
                                    <button class="btn btn-sm btn-outline-primary">Reply</button>
                                </div>
                            </div>
                            <div class="media">
                                <!-- <img src="img/girl2.jpg" alt="Image" class="img-fluid8 mr-3 mt-1" style="width: 55px;"> -->
                                <div class="media-body">
                                    <h6><a href="">Sunny</a> <small><i>20 Feb 2024</i></small></h6>
                                    <p>Just had the most incredible time exploring Ben Thanh Market in Ho Chi Minh City! 
                                        The vibrant atmosphere, the hustle and bustle of the vendors, and the amazing 
                                        array of goods available made it an unforgettable experience. Highly recommend a 
                                        visit!</p>
                                    <button class="btn btn-sm btn-outline-primary">Reply</button>
                                    <div class="media mt-4">
                                        <!-- <img src="img/meo.jpg" alt="Image" class="img-fluid8 mr-3 mt-1"
                                            style="width: 55px;"> -->
                                        <div class="media-body">
                                            <h6><a href="">Kats</a> <small><i>20 Feb 2024</i></small></h6>
                                            <p>Absolutely loved my visit to Ben Thanh Market! From bargaining 
                                                with friendly vendors to sampling delicious street food, every 
                                                moment was filled with excitement and discovery. Don't miss out 
                                                on this iconic market when you're in Saigon!</p>
                                            <button class="btn btn-sm btn-outline-primary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-top5"></div>
                        
                        <h1 class="headcomment1 mb-6 border-top6" style="letter-spacing: 0px;">Leave a comment</h1>
                        <div class="bg-white mb-3 container-fluidCM" style="padding: 30px">
                            <!-- <form> -->
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input name="sender" type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div> -->
        
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" value="Leave a comment" name="submit"
                                        class="btn btn-primary font-weight-semi-bold py-2 px-3">Comment</button>
                                </div>
                            <!-- </form> -->
                        </div>
        
                        <!-- Search Form -->
                        <!--<div class="mb-5">
                            <div class="bg-white" style="padding: 30px;">
                                <div class="input-group">
                                    <input type="text" class="form-control p-4" placeholder="Keyword">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary border-primary text-white"><i
                                                class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- Category List -->
                        <!--<div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                            <div class="bg-white" style="padding: 30px;">
                                <ul class="list-inline m-0">
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                            Design</a>
                                        <span class="badge badge-primary badge-pill">150</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                            Development</a>
                                        <span class="badge badge-primary badge-pill">131</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                        <span class="badge badge-primary badge-pill">78</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                        <span class="badge badge-primary badge-pill">56</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                        <span class="badge badge-primary badge-pill">98</span>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
        
                        <!-- Recent Post -->
                        <!--<div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid" src="img/blog-100x100.jpg" alt="">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                        </div>-->
        
                        <!-- Tag Cloud -->
                        <!--<div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-light m-1">Design</a>
                                <a href="" class="btn btn-light m-1">Development</a>
                                <a href="" class="btn btn-light m-1">Marketing</a>
                                <a href="" class="btn btn-light m-1">SEO</a>
                                <a href="" class="btn btn-light m-1">Writing</a>
                                <a href="" class="btn btn-light m-1">Consulting</a>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">RE</span>IS</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://twitter.com/reis_adventures" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/profile.php?id=61557250007525" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.linkedin.com/in/reis-adventures-458144300/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/reis_adventures2024?igsh=YTQwZjQ0NmI0OA%3D%3D&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destination</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Nguyen Huu Tho Street, District 7, Ho Chi Minh City</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+1922 3600</p>
                <p><i class="fa fa-envelope mr-2"></i>reis@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/comment.js"></script>
</body>

</html>