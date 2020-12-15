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
    <link href="css/insertcar.css" rel="stylesheet">
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
<h2 class="Cars-Picked-for-you-title mb-5">Add New Car</h2>










<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Car Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Key Search</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputprice">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputyear" class="col-sm-2 col-form-label">Reg.Year </label>
    <div class="col-sm-10">
      <input type="number" placeholder="Reg.Year From 2000 to this year" min="2000" max="2020" class="form-control" id="inputyear">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmodule" class="col-sm-2 col-form-label">Module </label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inputmodule">
        <option selected>Choose...</option>
        <option value="1">Bmw</option>
        <option value="2">Mercedes</option>
        <option value="3">Audi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputagency" class="col-sm-2 col-form-label">Car Agency </label>
    <div class="col-sm-10">
    <select class="custom-select mr-sm-2" id="inputagency">
        <option selected>Choose...</option>
        <option value="1">Motorko</option>
        <option value="2">Elmasria</option>
        <option value="3">GHABBOUR AUTO</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputtransmissiontype" class="col-sm-2 col-form-label">Transmission Type</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtransmissiontype">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputhourspower" class="col-sm-2 col-form-label">Hours Power</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputhourspower">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputenginecapacity" class="col-sm-2 col-form-label">Engine Capacity</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputenginecapacity">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmaximumspeed" class="col-sm-2 col-form-label">Maximum Speed</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputmaximumspeed">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputmaximumtorque" class="col-sm-2 col-form-label">Maximum Torque</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputmaximumtorque">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputfueltankcapacity" class="col-sm-2 col-form-label">Fuel Tank Capacity</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputfueltankcapacity">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputfueltype" class="col-sm-2 col-form-label">Fuel Type</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputfueltype">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputthenumberofcylinders" class="col-sm-2 col-form-label">The Number Of Cylinders</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputthenumberofcylinders">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputthethesizeofthebag" class="col-sm-2 col-form-label">The Size Of The Bag</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputthethesizeofthebag">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDoors" class="col-sm-2 col-form-label">Doors</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputDoors">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputRim" class="col-sm-2 col-form-label">Rim</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputRim">
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

  <!-- chose -->
  <!-- chose one -->
  <fieldset class="form-group  ">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Air Condition</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline1" name="AirCondition" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline1">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="AirCondition" class="custom-control-input">
    <label class="custom-control-label" for="customRadioInline2">No</label>
    </div>
    
      </div>
    </div>
    
  </fieldset>
  <!-- chose two -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Bluetooth</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Bluetooth" name="Bluetooth" class="custom-control-input">
    <label class="custom-control-label" for="Bluetooth">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Bluetooth2" name="Bluetooth" class="custom-control-input">
    <label class="custom-control-label" for="Bluetooth2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">CD Player</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CDPlayer" name="CDPlayer" class="custom-control-input">
    <label class="custom-control-label" for="CDPlayer">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CDPlayer2" name="CDPlayer" class="custom-control-input">
    <label class="custom-control-label" for="CDPlayer2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Fog Light</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FogLight" name="FogLight" class="custom-control-input">
    <label class="custom-control-label" for="FogLight">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FogLight2" name="FogLight" class="custom-control-input">
    <label class="custom-control-label" for="FogLight2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Remote control</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Remotecontrol" name="Remotecontrol" class="custom-control-input">
    <label class="custom-control-label" for="Remotecontrol">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Remotecontrol2" name="Remotecontrol" class="custom-control-input">
    <label class="custom-control-label" for="Remotecontrol2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Centeral Lock</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CenteralLock" name="CenteralLock" class="custom-control-input">
    <label class="custom-control-label" for="CenteralLock">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CenteralLock2" name="CenteralLock" class="custom-control-input">
    <label class="custom-control-label" for="CenteralLock2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Start Engine</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="StartEngine" name="StartEngine" class="custom-control-input">
    <label class="custom-control-label" for="StartEngine">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="StartEngine2" name="StartEngine" class="custom-control-input">
    <label class="custom-control-label" for="StartEngine2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Leather Seats</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="LeatherSeats" name="LeatherSeats" class="custom-control-input">
    <label class="custom-control-label" for="LeatherSeats">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="LeatherSeats2" name="LeatherSeats" class="custom-control-input">
    <label class="custom-control-label" for="LeatherSeats2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Air Bag</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="AirBag" name="AirBag" class="custom-control-input">
    <label class="custom-control-label" for="AirBag">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="AirBag2" name="AirBag" class="custom-control-input">
    <label class="custom-control-label" for="AirBag2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Spare Wheel</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="SpareWheel" name="SpareWheel" class="custom-control-input">
    <label class="custom-control-label" for="SpareWheel">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="SpareWheel2" name="SpareWheel" class="custom-control-input">
    <label class="custom-control-label" for="SpareWheel2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Power Mirrors</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="PowerMirrors" name="PowerMirrors" class="custom-control-input">
    <label class="custom-control-label" for="PowerMirrors">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="PowerMirrors2" name="PowerMirrors" class="custom-control-input">
    <label class="custom-control-label" for="PowerMirrors2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Front Fog Light</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FrontFogLight" name="FrontFogLight" class="custom-control-input">
    <label class="custom-control-label" for="FrontFogLight">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FrontFogLight2" name="FrontFogLight" class="custom-control-input">
    <label class="custom-control-label" for="FrontFogLight2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Folding Mirror</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FoldingMirror" name="FoldingMirror" class="custom-control-input">
    <label class="custom-control-label" for="FoldingMirror">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="FoldingMirror2" name="FoldingMirror" class="custom-control-input">
    <label class="custom-control-label" for="FoldingMirror2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Cruise Control</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CruiseControl" name="CruiseControl" class="custom-control-input">
    <label class="custom-control-label" for="CruiseControl">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="CruiseControl2" name="CruiseControl" class="custom-control-input">
    <label class="custom-control-label" for="CruiseControl2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Computer Trips</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ComputerTrips" name="ComputerTrips" class="custom-control-input">
    <label class="custom-control-label" for="ComputerTrips">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ComputerTrips2" name="ComputerTrips" class="custom-control-input">
    <label class="custom-control-label" for="ComputerTrips2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Multi Function Steering Wheel</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Multifunctionsteeringwheel" name="Multifunctionsteeringwheel" class="custom-control-input">
    <label class="custom-control-label" for="Multifunctionsteeringwheel">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Multifunctionsteeringwheel2" name="Multifunctionsteeringwheel" class="custom-control-input">
    <label class="custom-control-label" for="Multifunctionsteeringwheel2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Speakers</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Speakers" name="Speakers" class="custom-control-input">
    <label class="custom-control-label" for="Speakers">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Speakers2" name="Speakers" class="custom-control-input">
    <label class="custom-control-label" for="Speakers2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Parking Sensor</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ParkingSensor" name="ParkingSensor" class="custom-control-input">
    <label class="custom-control-label" for="ParkingSensor">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ParkingSensor2" name="ParkingSensor" class="custom-control-input">
    <label class="custom-control-label" for="ParkingSensor2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">EBD</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="EBD" name="EBD" class="custom-control-input">
    <label class="custom-control-label" for="EBD">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="EBD2" name="EBD" class="custom-control-input">
    <label class="custom-control-label" for="EBD2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">ABS</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ABS" name="ABS" class="custom-control-input">
    <label class="custom-control-label" for="ABS">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="ABS2" name="ABS" class="custom-control-input">
    <label class="custom-control-label" for="ABS2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sunroof</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sunroof" name="Sunroof" class="custom-control-input">
    <label class="custom-control-label" for="Sunroof">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sunroof2" name="Sunroof" class="custom-control-input">
    <label class="custom-control-label" for="Sunroof2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Panoramic Roof</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="PanoramicRoof" name="PanoramicRoof" class="custom-control-input">
    <label class="custom-control-label" for="PanoramicRoof">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="PanoramicRoof2" name="PanoramicRoof" class="custom-control-input">
    <label class="custom-control-label" for="PanoramicRoof2">No</label>
    </div>
      </div>
    </div>
  </fieldset>

  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">AUX</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="AUX" name="AUX" class="custom-control-input">
    <label class="custom-control-label" for="AUX">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="AUX2" name="AUX" class="custom-control-input">
    <label class="custom-control-label" for="AUX2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <!-- chose  -->
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">USB</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="USB" name="USB" class="custom-control-input">
    <label class="custom-control-label" for="USB">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="USB2" name="USB" class="custom-control-input">
    <label class="custom-control-label" for="USB2">No</label>
    </div>
      </div>
    </div>
  </fieldset>
    <!-- chose  -->
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sale</legend>
      <div class="col-sm-10 ">
      <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sale" name="Sale" class="custom-control-input" value="yes">
    <label class="custom-control-label" for="Sale">Yes</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="Sale2" name="Sale" class="custom-control-input" value="no">
    <label class="custom-control-label" for="Sale2" >No</label>
    </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <label for="inputnewPrice" class="col-sm-2 col-form-label ">New Price</label>
    <div class="col-sm-10 pt-0">
      <div class="input-group mt-0">
  <input type="number" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" id="inputnewPrice" disabled>
  <div class="input-group-append">
    <span class="input-group-text">EGP</span>
  </div>
</div>


    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Car</button>
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