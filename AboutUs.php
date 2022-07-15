<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild Adventure Destinations</title>
    <link rel="icon" type="image/x-icon" href="images/The logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/bootstrap-icons.svg" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/> 
    <style>
      .nav-link{
        color:black;
      }
      .carousel img{
        height:88vh !important;
      }
      .carousel-caption{
        font-size:50px !important;
      }
      
      .card-img-top{
        height:17rem;
      }
      .col-md-4{
        padding-bottom: 30px;
      }
      .card{
        width:100%;
      }
      .card-text{
        font-size: 50px;
        font-weight: 500;
        color: black;
        text-align: center;
      }
      .next-destination-container{
        margin-top: 50px;       
      }
      .variety-container{
        margin-top:50px;
      }
      .footer-card{
        margin-top:70px;
      }
      .header-container{
        width:800px;
        padding-top: 20px;
        padding-bottom: 20px;
      }
      .subscribe-button{
        width: 170px;
        height: 40px;
        font-size: 18px;     
        padding-bottom: 20px;
        border-radius: 30px;
      }
      .view-button{
        width: 170px;
        height: 40px;
      }


      .card-text{
        padding-top: 100px;
      }
      .overlay{
        position: absolute;
        top:0;
        width:100%;
        bottom: 0;
        left:0;
        background-color: rgba(black, black, black, 1);
      }
      .choose-us .card{
        width: 95%;
        border-radius: 30px;
      }

      .gallery .card-img-top, .gallery .card{
        border-radius: 15px !important; 
        margin-bottom: 10px;       
      }  

      .gallery .card-img-top, .gallery .card .card-body{
        height: 300px;
      }

      
      .gallery .card-img-top:hover{
        transform: scale(1.05);
      }
       
       

      .social-handles .btn{
        width: 25px;
        height: 25px;
        padding: 0;
        font-size: 10px;
        margin: 0;
      }

      .col-sm-3{
        margin-bottom: 10px;
        cursor: pointer;
      }
      
    </style>
  </head>
  <body class="body">
    
  <?php
    include("shared/navbar.php");
   ?>


<div class="jumbotron">
      <h1 class="display-4 text-center" style="padding-top: 50px;">About Us</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center" style="padding-bottom: 20px;">
          <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav> 
      <hr class="my-4">      
    </div>


    <div class="container" >
        <div class="row" style="margin-top:50px;">

          <div class="col">
          <h2 style="padding-right:20px; text-align:center; font-size:40px; line-height:50px; font-weight:400px; font-family: Centaur;" class="  nd_options_text_align_center_responsive_important nd_options_first_font ">Hello. Our agency has been present for over 10 years in the market. We make the most of all our customers.</h2>

          </div>

          <div class="col" style="margin-top:20px;">
              <p style="font-family:Centaur; font-size:20px;">Our honor-winning organization reliably positions as a standout amongst other offices in the nation (Travel Weekly, Business Travel Weekly), and is the best individual from the renowned Signature Travel Network, an overall association enabling us to give our clients unmatched advantages.</p>
              <p style="font-family:Centaur; font-size:20px;">We’re a worker-claimed travel organization secured by our qualities, trustworthiness, and commitment to client benefit.</p>
          </div>
         </div>

          <div class="row">
          <div class="col">
          <img src="images/gall22.jpg" class="card-img1"   alt="tours"/>
          </div>
    
        </div>
    </div>

    <div class="container" >
      <div class="row" style="margin-top:70px;">
          <div class="col">
            <div style="border-radius: 50%; background-color: #ff9999; height:80px; width:80px;">
            <h1 class="achievements">8</h1>
            </div>
            <p style="padding-top:10px;">Destinations</p>
          </div>

          <div class="col">
          <div style="border-radius: 50%; background-color:#ffeb99; height:80px; width:80px;">
            <h1 class="achievements">12</h1>
          </div>
            <p style="padding-top:10px;">Packages</p>
          </div>

          <div class="col">
          <div style="border-radius: 50%; background-color:#9999ff; height:80px; width:80px;">
            <h1 class="achievements">10</h1>
            </div>
            <p style="padding-top:10px;">Staff Members</p>
          </div>

          <div class="col">
          <div style="border-radius: 50%; background-color: #99ff99; height:80px; width:80px;">
            <h1 class="achievements">15</h1>
            </div>
            <p style="padding-top:10px;">Years Of Experience</p>
          </div>

      </div>   
    </div>

    
    
    <?php
    include("shared/footer.php");
   ?>



     











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>