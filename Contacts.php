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
      <h1 class="display-4 text-center" style="padding-top: 50px;">Contacts</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center" style="padding-bottom: 20px;">
          <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contacts</li>
        </ol>
      </nav> 
      <hr class="my-4">
      
    </div>


    <div class="container">
      <div class="row">

      <div class="col">

        <h2 style="color:; padding-bottom:20px; text-align:; font-size:25px; line-height:25px; letter-spacing: 0px; font-weight:bold;" class="   nd_options_first_font ">Drop us a line</h2>
        <p>Get in touch with us by sending us an email, give us a call on the provided contacts. Dont forget to like share and subscribe to our official social accounts.</p>
        <p style="padding-top:10px;">Name :</p>
        <input class="form-control form-control-sm" style="border-radius:20px; width: 400px; background-color:#f9f9f9" type="text" placeholder="Your Name" aria-label=".form-control-sm example">
        <p style="padding-top:10px;">Email :</p>
        <input class="form-control form-control-sm" style="border-radius:20px; width: 400px; background-color:#f9f9f9" type="text" placeholder="Enter email" aria-label=".form-control-sm example">
        <p style="padding-top:10px;">Message :</p>
        <input class="form-control form-control-lg" style="height:90px; width: 400px; background-color:#f9f9f9; padding-bottom:50px;" type="text" placeholder="Text Message" aria-label=".form-control-lg example">
        <div class="d-flex justify-content-start" style="padding-top:20px;">
        <button style="border-radius:20px; background-color: green; color: white;" type="button"class="btn btn-outline-secondary">Send Now</button>       
       </div>
        
      </div>

        <div class="col">
          <img src="images/gall9.jpg"class="card-img-top my-4 my-md-0" style="height:350px;"  alt="tours">

          <div class="row" style="margin-top: 20px;">
          <div class="col" style="margin-right: 20px;">
          <div class="d-block d-md-flex">        
              <p style="color:#555555; font-weight:bold;">Address :</p> 
              <div style="flex:1; margin-left:2px;"></div>                    
              <p class="text-right" style="color:;">10574-00100  Nairobi</p>            
          </div>
          <div style="background-color:#f1f1f1; height: 1px;" class="nicdark_section  "></div>
          </div>
          
          <div class="row" style="margin-top: 20px;">
          <div class="d-block d-md-flex">        
              <p style="color:#555555; font-weight:bold;">Physical address :</p> 
              <div style="flex:1; margin-left:2px;"></div>                    
              <p class="text-right" style="color:;">Revlon Plaza Fourth floor suite <br> 24 along Kimathi Street</p>            
          </div>
          <div style="background-color:#f1f1f1; height: 1px;" class="nicdark_section  "></div>
          </div>

          <div class="row" style="margin-top: 20px;">
          <div class="d-block d-md-flex">        
              <p style="color:#555555; font-weight:bold;">Phone :</p> 
              <div style="flex:1; margin-left:2px;"></div>                    
              <p class="text-right" style="color:;">0722918690/0726079279</p>            
          </div>
          <div style="background-color:#f1f1f1; height: 1px;" class="nicdark_section  "></div>
          </div>
          <div class="row" style="margin-top: 20px;">
          <div class="d-block d-md-flex">        
              <p style="color:#555555; font-weight:bold;">Email :</p> 
              <div style="flex:1; margin-left:2px;"></div>                    
              <p class="text-right " style="word-break:break-all;">acrossplanetenterprises@gmail.com</p>            
          </div>
          <div style="background-color:#f1f1f1; height: 1px;" class="nicdark_section  "></div>
          </div>
          </div>

          <p style="color:; padding-top:20px; text-align:; font-size:14px; line-height:14px; letter-spacing: 2px; font-weight:normal;" class="   nd_options_second_font ">AVAILABLE AT 8AM – 5PM</p>
          <h3 style="color:; padding:px; text-align:; font-size:30px; line-height:60px; letter-spacing: px; font-weight:normal;" class="   nd_options_first_font ">+(254) 722918690 / 726079279</h3>
          

          
        
        
        </div>
        
  
      </div>
    </div>
    
   
    
    
    <?php
    include("shared/footer.php");
   ?>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>