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

      .destinations .card-img-top, .destinations .card{
        border-radius: 15px !important;   
      }  
      
      .destinations .card:hover{
        transform: scale(1.02);
      }
       
      .social-handles .btn{
        width: 25px;
        height: 25px;
        padding: 0;
        font-size: 10px;
        margin: 0;
      }
      .choose-us .card{
        margin-bottom: 10px;
      }
      
    </style>
  </head>
  <body class="body">
    
   <?php
    include("shared/navbar.php");
   ?>


<div id="carouselExampleInterval" class="carousel slide  carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active carousel-img" data-bs-interval="5000">
      <img src="images/gall20.jpg" class="d-block  w-100" alt="tours">
      <div class="carousel-caption d-none d-md-block">
            
            <p>Experience your vacations in our best rides.</p>
          </div>
    </div>
    <div class="carousel-item carousel-img" data-bs-interval="5000">
      <img src="images/tour6.jpg" class="d-block w-100" alt="tours">
      <div class="carousel-caption d-none d-md-block">
            
            <p>One of the best hotel serenity you will get to be in.</p>
          </div>
    </div>
    <div class="carousel-item carousel-img">
      <img src="images/gall13.jpg" class="d-block  w-100" alt="tours">
      <div class="carousel-caption d-none d-md-block">
            
            <p>We have choosen the best amenities for your loved ones.</p>
          </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>








   








    <p class="h6 text-center pt-5 pb-2">Proposals</p>
    <p class="h2 text-center pb-5">OUR DESTINATIONS</p>


    <div class="container destinations">
      <div class="row">
        <div class="col-md-4">
          <div class="card position-relative">
            <img src="images/tour9.jpg"class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Masai Mara</p>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card position-relative" >
            <img src="images/tour5.jpg" class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-family: Freestyle Script; font-size: 30px; padding-top: 160px; padding-left:20px;">Wildlife</p>
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Tsavo</p>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card position-relative" >
            <img src="images/tour3.jpg" class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-family: Freestyle Script; font-size: 30px; padding-top: 160px; padding-left:20px;">Beach</p>
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Mombasa</p>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card position-relative" >
            <img src="images/gall37.jpg" class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Amboseli</p>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card position-relative" >
            <img src="images/tour2.jpg" class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-family: Freestyle Script; font-size: 30px; padding-top: 160px; padding-left:20px;">Beautiful scenaries</p>
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Lamu Island</p>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card position-relative" >
            <img src="images/tour8.jpeg" class="card-img-top" alt="tours">
            <p class="card-text text-light position-absolute" style="font-family: Freestyle Script; font-size: 30px; padding-top: 160px; padding-left:20px;">hiking</p>
            <p class="card-text text-light position-absolute" style="font-weight:700; font-family: 'Times New Roman', Times, serif; font-size: 40px; padding-top: 200px; padding-left:10px;">Mt Kenya</p>

          </div>
        </div>
      </div>
    </div>

    <p class="h6 text-center pt-5 pb">Who we are</p>
    <p class="h2 text-center pt pb-5 mb-3 text-uppercase">Why Choose Us</p>

    <div class="container choose-us mb-5 pb-2">
      <div class="row">

        <div class="col-sm-3">
          <div class="card bg-light">
            <div class="d-flex justify-content-center pt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="90" fill="currentColor" class="bi bi-person-check-fill text-dark" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            </div>
           <div class="card-body">            
              <p class="text-center" style="margin-top:px; color:black; font-size:13px;line-height:20px;">We have the best staff members in the industries. They are able to offer quality services of your desire. Our staff are experienced in offering the best services in the industry.
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card bg-light">
            <div class="d-flex justify-content-center pt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="90" fill="currentColor" class="bi bi-truck text-dark" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </div>
           <div class="card-body">            
              <p class="text-center" style="margin-top:px; color:black; font-size:13px;line-height:20px;">Our company possesses the best tour vehicles in the tourism industry. Get to experience your vacations in different location courtesy of our wel maintained vehicles.
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card bg-light">
            <div class="d-flex justify-content-center pt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="90" fill="currentColor" class="bi bi-currency-dollar text-dark" viewBox="0 0 16 16">
                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
              </svg>
            </div>
           <div class="card-body">            
              <p class="text-center" style="margin-top:px; color:black; font-size:13px;line-height:20px;">Our services are pocket friendly. We offer different packages suitable to your budget. Get to choose the best packages for you and your loved ones. Quality is assured with us.
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="card bg-light">
            <div class="d-flex justify-content-center pt-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="90" fill="currentColor" class="bi bi-hourglass-split text-dark" viewBox="0 0 16 16">
                <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
              </svg>
            </div>
           <div class="card-body">            
              <p class="text-center" style="margin-top:px; color:black; font-size:13px;line-height:20px;">Wild Adventure Destinations offers its services in a very timely manner. You get to experience no delays with our company. Timely and quality services is our top priority. 
              </p>
            </div>
          </div>
        </div>


        

       

      </div>
    </div>

    
    <div class="card position-relative holiday" style="width:100%; height: 400px; background-image: url('images/holiday1.jpg');   background-size: 100% 100%;
    ">
  
      <div class="card-body">
        <p class="card-text text-light text-uppercase" style="font-family: Lucida Calligraphy;">Your next holiday</p>
        <div class="d-flex justify-content-center">
          <a href="https://api.whatsapp.com/send?phone=+254722918690" class="btn btn-success subscribe-button" type="submit">BOOK NOW</a>
        </div>
      </div>
      <!-- //<img src="images/pic2.webp" class="card-img-top" alt="tours"> -->
    </div>



    <div style="margin-top:90px; margin-bottom:90px;"    class="container variety-container">
      <div class="row">
        <div class="col-sm">
          <div class="d-flex justify-content-center"> 
            <img style="top:0px;" alt="" class="nd_options_position_absolute nd_options_left_0" width="50" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/04/icon-around.png">
          </div>
          <div style="padding-left:0px;" class="text-center nd_options_section nd_options_box_sizing_border_box">
            
            <h3 class="nd_options_first_font  " style="margin:10px; color:; font-size:24px;line-height:24px;">World Tour</h3> 
            <p class="nd_options_first_font 14 " style="margin-top:20px 0px; color:none; font-size:14px;line-height:24px;">Giving a series of related performances, appearances, competitions, etc., at different places over a period of time</p> 
            <button type="button" class="btn btn-warning btn-sm rounded-pill text-light" >Details</Details></button>


        </div>
        <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
        </div>
        <div class="col-sm">
          <div class="nd_options_section nd_options_position_relative ">
            <div class="d-flex justify-content-center"> 
              <img style="top:0px;" alt="" class="nd_options_position_absolute nd_options_left_0" width="50" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/04/icon-boat.png">
            </div>
    
            <div style="padding-left:0px;" class="text-center nd_options_section nd_options_box_sizing_border_box">
                
                <h3 class="nd_options_first_font  " style="margin:10px; color:; font-size:24px;line-height:24px;">Cruises</h3> 
                <p class="nd_options_first_font 14 " style="margin-top:20px 0px; color:; font-size:14px;line-height:24px;">A vacation spent on a ship that sails the ocean, periodically stopping in ports for sightseeing and experience.</p> 
                <button type="button" class="btn btn-danger btn-sm rounded-pill">Details</button>
    
            </div>
    
        </div>
        </div>
        <div class="col-sm">
          <div class="nd_options_section nd_options_position_relative d-block justify-content-center">
            <div class="d-flex justify-content-center">
              
               <img style="top:0px;  " alt="" class="nd_options_position_absolute nd_options_left_0" width="50" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/04/icon-landmark.png">
            </div>
    
            <div style="padding-left:0px;" class="text-center nd_options_section nd_options_box_sizing_border_box">
                
                <h3 class="nd_options_first_font  " style="margin:10px; color:; font-size:24px;line-height:24px;">Best Tours</h3> 
                <p class="nd_options_first_font 14 " style="margin-top:20px 0px; color:; font-size:14px;line-height:24px;">A journey for business, pleasure, or education often involving a series of stops and ending at the starting point.</p> 
                <button type="button" class="btn btn-success btn-sm rounded-pill" >Details</button>
    
            </div>
    
        </div>
        </div>
      </div>
    </div>

    <hr style="margin: 40px 0 20px 0; margin-left:50px; margin-right: 50px;    margin-top: 90px; color: black;">


    <div style="margin-top:90px;" class="container next-destination-container" style="width: 100%;" >
      <div class="row">
        <div class="col-sm">
          <h2 style="font-family: Lucida Calligraphy; padding-bottom: 20px; text-align:center;"><u>The best Beaches</u></h2>
          <p style="text-align: center;  font-family: 'Times New Roman', Times, serif; " class="beaches">It’s not often that you come across a sunrise-gold beach. That is our privilege as we gazed out at the slothful sea. Ebbing ever so gently, it looks at peace in its Neptune-blue gown. The beach is so soft, it feels like we were walking on a blanket of candy floss. The shimmering sand sweeps around in a scythe of beach, hemmes in by towering cliffs. Far out to sea, streams of pulsing light saturated the surface with a golden haze. It is confessional-quiet and this Babylon of beaches felt like paradise. The horizon seems to be stitched with a line of silver.</p>
          
        </div>
        <div class="col-sm"  >
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            
            <div class="carousel-inner beachimage" style=" padding-bottom: 40px;">
              <div class="carousel-item active">
                <img src="images/tour4.jpg" class="d-block w-100" alt="tours">
                <div class="carousel-caption d-none d-md-block">                
                  <p style="font-size: 30px; padding-bottom: 200px;">Some of the best beach visinity.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    

   <?php
    include("shared/footer.php");
   ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>