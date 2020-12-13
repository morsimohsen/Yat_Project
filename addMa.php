<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotorKo</title>
    <link rel="icon" href="images/Logo.png" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <!-- Main CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <link href="css/form.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet"> 

    
</head>
<body>
  <header class="custom-nav">
    <Div class="container-fluid back"> 
      <nav class="navbar navbar-expand-lg navbar-dark static-top p-3">
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


 
  <div id="header">
        <div class="header-caption">
            <div class="caption">
            <div class="container my-5">  
                    <div class="row">  
                        <div class="offset-md-2 col-md-8 offset-md-2">  
                            <div class="card form-con">  
                                
                                <div class="card-body">  
                                    <form id="needs-validation" method="post" novalidate>  
                                        <div class="row">  
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="firstname">Exhibition Name</label>  
                                                    <input type="text" name="" id="firstname" placeholder="First Name" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                                    <div class="invalid-feedback">  
                                                        Please enter Exhibition Name.  
                                                    </div>  
                                                </div>  
                                            </div>  
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="lastname">Address</label>  
                                                    <input type="text" name="" id="lastname" placeholder="Last Name" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                                    <div class="invalid-feedback">  
                                                        Please enter Address Name.  
                                                    </div>  
                                                </div>  
                                            </div>  
                                        </div>  
                                        <div class="row">  
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="Gender">City</label>  
                                                    <select class="custom-select" required name="">  
                                                        <option value="">Select City</option>  
                                                        <option value="Cairo">Cairo </option>  
                                                        <option value="Alexandria">Alexandria</option> 
                                                        <option value="Giza">Giza</option>
                                                        <option value="Qalyubia">Qalyubia</option>
                                                        <option value="Port Said">Port Said</option>
                                                        <option value="Suez">Suez</option>
                                                        <option value="El Mahalla El Kubra">El Mahalla El Kubra</option>
                                                        <option value="Luxor">Luxor</option>
                                                        <option value="Dakahlia">Dakahlia</option>
                                                        <option value="Tanta">Tanta</option>
                                                        <option value="Asyut">Asyut</option>
                                                        <option value="Ismailia">Ismailia</option> 
                                                    </select>  
                                                    <div class="invalid-feedback">Please choose City</div>  
                                                </div>  
                                            </div>  
                                            
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="phonenumber">Mobile Number</label>  
                                                        <input type="tel" pattern="[0]{1}[1]{1}[1|2|5]{1}[0-9]{8}" class="form-control" id="phonenumber" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>  
                                                    <div class="invalid-feedback">  
                                                        Please enter Valid mobile number(012-011-015).  
                                                    </div>  
                                                </div>  
                                            </div>  
                                        </div>  
                                    
                                       
                                        <div class="row">  
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="Openingtime">Opening time</label>  
                                                    <input type="time" name="" id="Openingtime" placeholder="Opening Time" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                                    <div class="invalid-feedback">  
                                                        Please enter Time.  
                                                    </div>  
                                                </div>  
                                            </div>  
                                            <div class="col-sm-6 col-md-6 col-xs-12">  
                                                <div class="form-group">  
                                                    <label for="ColseingTime">Colseing Time</label>  
                                                    <input type="time" name="" id="ColseingTime" placeholder="Colseing Time" class="form-control" aria-describedby="inputGroupPrepend" required />  
                                                    <div class="invalid-feedback">  
                                                        Please enter Time.  
                                                    </div>  
                                                </div>  
                                            </div>  
                                        </div>  
                                             
                                        <div class="row text-center">  
                                            <div class="col-sm-12 col-md-12 col-xs-12 text-center">  
                                                <button class="btn btn-primary rounded-3" type="submit">Submit</button>  
                                            </div>  
                                        </div>  
                                    </form>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
  

            </div>
        </div>
  </div>

   <!-- btn for scroll up -->
   <div class="btn-up">
        <a class="btn btn-danger"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <!-- end of scroll -->

    <div class="container">
    

    </div>
    
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
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/typed.js"></script>
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/aos.js"></script>
    <script type="text/javascript">  
        (function () {  
            'use strict';  
            window.addEventListener('load', function () {  
                var form = document.getElementById('needs-validation');  
                form.addEventListener('submit', function (event) {  
                    if (form.checkValidity() === false) {  
                        event.preventDefault();  
                        event.stopPropagation();  
                    }  
                    form.classList.add('was-validated');  
                }, false);  
            }, false);  
        })();  

        $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
</script>  
  <script src="js/scr.js"></script>
</body>
</html>