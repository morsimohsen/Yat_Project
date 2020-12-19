<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotorKo</title>
    <link rel="icon" href="images/Logo.png" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <!-- swipper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <!-- Main CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    
    <link href="css/bootstrap.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/onecarstyle.css" rel="stylesheet">
    <link href="css/addbrand.css" rel="stylesheet">
</head>
<body>
<!-- ================================ start navbar =================================== -->
  <header class="custom-nav overflow-hidden">
    <Div class="container-fluid back"> 
      <nav class="navbar navbar-expand-lg navbar-light static-top p-3">
        <a class="navbar-brand" href="#">
              <img class="logo " src="images/Logo.png" alt="">
        </a>
        
        <button class="navbar-toggler btn-tog" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">News <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">New Cars <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">Car Reviews <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">Branches <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">About US <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="#">Contact US<span class="sr-only">(current)</span></a>
            </li>
          </ul>
            <form class="form-inline my-2 my-lg-0">
              
              <button class="btn m-2 px-4 my-sm-0 border btn-st d-md-inline" type="submit"><i class="fas fa-sign-in-alt pr-3"></i>Log In</button>
              <button class="btn m-2 px-4 my-sm-0 btn-st border d-md-inline" type="submit"><i class="fas fa-user-plus pr-3"></i>Sing Up</button>
            </form>
          </div>
      </nav>
    </Div>
  </header>
<!-- ================================ end navbar =================================== -->

<!-- ================================ start form =================================== -->
<section>
<div class="container ">
<div class="top_of_inser_page">
<h2 class="Cars-Picked-for-you-title mb-5">Add New Brand</h2>






<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Brand Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3">
    </div>
  </div>

  <div class="form-group row">
        <label for="inputGroupFile01" class="col-sm-2 col-form-label" >Main Image</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
      </div>
  <div class="form-group row">
        <label for="inputGroupFile02" class="col-sm-2 col-form-label" >Second Image</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile02" name="image">
            <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
          </div>
        </div>
      </div>
  <div class="form-group row">
        <label for="inputGroupFile03" class="col-sm-2 col-form-label" >Third Image</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile03" name="image">
            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
          </div>
        </div>
      </div>
  <div class="form-group row">
        <label for="inputGroupFile04" class="col-sm-2 col-form-label" >fourth Image</label>
        <div class="col-sm-10">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile04" name="image">
            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
          </div>
        </div>
      </div>


      <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Brand</button>
    </div>
  </div>
</form>





</div>
</div>
</section>
<!-- ================================ end form =================================== -->

<!-- ================================ start bigFooter =========================== -->
<section class="fifth-background py-4 overflow-hidden">
        <div class="container py-4">
            <div class="row py-4 responsive-big-footer">
                <div class="col-12 col-md-6 col-lg-3">
                    <h1 class="bigFooter-logo"> Motorko </h1>
                    <p class="text-white-50 mt-4 footer-paragraph pb-3">Authentic and innovative.<br> Built to the smallest detail<br> with a focus on usability<br> and performance.</p>
                    <ul class="nav justify-content-between flex-nowrap w-50 ml-0 responsive-big-footer-ul">
                        
                        <li class="nav-item">
                            <a class="nav-link Testimonials-card-icons pl-0 bigFooter-logo-icons " href="#">
                                <i class="fab fa-instagram "></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link Testimonials-card-icons bigFooter-logo-icons " href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pt-1">
                    <h4 class="light-color mb-4">Get in Touch</h4>
                    <ul class="nav flex-column  ml-0 mb-2 pt-3 responsive-big-footer-ul">
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">
                                <i class="fas fa-phone bigFooter-logo-icons2 mr-2"></i>
                                <p class="ml-2 bigFooter-logo-icons2-text">+20 1115289503</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">
                                <i class="far fa-envelope bigFooter-logo-icons2 mr-2"></i>
                                <p class="ml-2 bigFooter-logo-icons2-text">Harry@business.com</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">
                                <i class="fas fa-map-marker-alt bigFooter-logo-icons2 mr-2"></i>
                                <p class="ml-2 bigFooter-logo-icons2-text">Cairo, Nile City , floar 12</p>
                            </a>
                        </li>
                    </ul>
                    <button class="rounded ml-0  my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button" type="submit"> <i class="far fa-comment-alt bigFooter-logo-icons2"></i> SEND A MESSAGE</button>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 class="light-color mb-4">Our Services</h4>
                    <ul class="nav flex-column  ml-0 ">
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">

                                <p class="ml-2 bigFooter-logo-icons2-text">Offers</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">
                                <p class="ml-2 bigFooter-logo-icons2-text">New Cars</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">

                                <p class="ml-2 bigFooter-logo-icons2-text">Cranes Number</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">

                                <p class="ml-2 bigFooter-logo-icons2-text">The Blog</p>
                            </a>
                        </li>
                        <li class="nav-item bigFooter-special-list responsive-big-footer-ul-2">
                            <a class="nav-link  pl-0 bigFooter-logo-icons d-flex text-white-50 bigFooter-special-list" href="#">

                                <p class="ml-2 bigFooter-logo-icons2-text">join Us</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <h4 class="light-color mb-4">Popular Cars</h4>
                    <div class="row pl-0 responsive-big-footer-ul-2">
                        <button class="rounded ml-0 mr-2 my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">BMW</button>
                        <button class="rounded ml-0  my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">Mercedes</button>
                    </div>
                    <!-- 2 -->
                    <div class="row pl-0 mt-2 responsive-big-footer-ul-2">
                        <button class="rounded ml-0 mr-2 my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">Jeep</button>
                        <button class="rounded ml-0  my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">Kia</button>
                    </div>
                    <!-- 3 -->
                    <div class="row pl-0 mt-2 responsive-big-footer-ul-2">
                        <button class="rounded ml-0 mr-2 my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">Hyundai</button>
                        <button class="rounded ml-0  my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">mazda</button>
                    </div>
                    <!-- 4 -->
                    <div class="row pl-0 mt-2 responsive-big-footer-ul-2">
                        <button class="rounded ml-0 mr-2 my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">MG</button>
                        <button class="rounded ml-0  my-2 my-sm-0 secondBackGround secondTextColor contact bigFooter-contact-button bigFooter-contact-buttons" type="submit">mini</button>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================================ end bigFooter =========================== -->
    <!-- ================================ start smallFooter =========================== -->
    <section class="sixth-background py-2 overflow-hidden">
        <div class="container">
            <div class="d-flex justify-content-between flex-column flex-md-row">
                <div class="">
                    <p class="mt-4 about-us-paragraph smallfooter-p">All You Need At Any Time </p>
                </div>
                <div class="">
                    <p class="mt-4 about-us-paragraph smallfooter-p">&COPY; 2020 Motorko is Proudly Powered by <a href="#" class="mainTextColor smallfooter-link">Codings</a>.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================ end smallFooter =========================== -->
     <!-- btn for scroll up -->
   <div class="btn-up">
        <a class="btn btn-danger"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <!-- end of scroll -->
 
    <!--   swiper   -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/addcar.js"></script>
</body>
</html>