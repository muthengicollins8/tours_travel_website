<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/bootstrap-icons.svg" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
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

      .nav-item .button{
        border-radius: 20px;
        margin-left: 300px;
      }
     
      .menu-items{
        font-family: 'Times New Roman', Times, serif;
        font-size: 18px;
       padding-left: 100px;
       font-weight: 500;
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
      .footer-content{
        margin-left: 120px;
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
      <h1 class="display-4 text-center" style="padding-top: 50px;">Our Gallery</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center" style="padding-bottom: 20px;">
          <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Gallery</li>
        </ol>
      </nav> 
      <hr class="my-4">
      
    </div>

    <div class="container gallery px-md-3 px-0" style="padding-top: 50px;">
      <div class="row">
        <div class="col-sm-3">
            <img src="images/gall20.jpg"class="card-img-top" alt="tours">
         
        </div>
        <div class="col-sm-3">
          <img src="images/gall2.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall3.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall4.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall5.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall6.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall7.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall8.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
            <img src="images/gall9.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall10.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall11.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall12.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall13.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall14.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall15.jpg"class="card-img-top" alt="tours">
        </div>
        <div class="col-sm-3">
          <img src="images/gall16.jpg"class="card-img-top" alt="tours">
        </div>
      </div>
    </div>



   
    
    

    <div  style="border:none; box-shadow:none; background-color: #e8fafd; width: 100%;" class="card footer-card">
      <div style="border:none;" class="card-header">
        <div class="d-flex justify-content-center flex-nowrap">
          <div class="header-container">
            <div class="d-flex">
  
              <h2 style="color:0; padding-right:25px; padding-top: 10px; text-align:0; font-size:28px; font-family: Lucida Calligraphy; line-height:30px; letter-spacing: 0px; font-weight:700;" class="   nd_options_first_font ">Join Our Newsletter</h2>
  
      <div style="flex:1; margin-left:2px;"></div>
      <form class="d-flex " role="search">
      <input class="form-control me-4 rounded-pill" type="search" placeholder="enter email" aria-label="Search">
      <button class="btn btn-outline-success subscribe-button" type="submit">Subscribe</button>
    </form>
  </div>
          </div>
        </div>
        
  
      </div>

      <div style="background-color:   white;"    class="card-body text-light">
        <div class="footer-content">
          <div class="container">
            <div class="row">
                <div style="width: 300px;">
                  <h2 style="color:black; padding-top:30px; text-align:0; font-size:30px;  line-height:30px; letter-spacing: 0px; font-weight:bold;" class="   nd_options_first_font text-center">Wild Adventure Destinations</h2>
                  <p style="font-size: 13px; color:gray; font-family: Lucida Calligraphy;"   class="text-center">Travel With Style </p>
                  <div class="col align-self-end "> 
                
                    <div class="d-flex justify-content-center social-handles">      
                    
                      <div style="padding-right: 6px;">
                        <button type="button" style="border-radius: 50%;"    class="btn btn-info">
                          <i class="fa fa-twitter" style="color: white; font-size: 11px;"    aria-hidden="true"></i>
                         </button>
                      </div>

                      <div style="padding-right: 6px;">
                        <button type="button"  style="border-radius: 50%;" class="btn btn-danger">
                          <i class="fa fa-youtube" style=" font-size: 11px;"  aria-hidden="true"></i> 
                        </button>
                      </div>

                      <div style="padding-right: 6px;">
                        <button type="button" style="border-radius: 50%;" class="btn btn-primary">
                          <i class="fa fa-facebook" style=" font-size: 11px;"  aria-hidden="true"></i>
                         </button>
                      </div>

                      <div style="padding-right: 6px;">
                        <button type="button" style="border-radius: 50%;" class="btn btn-danger">
                          <i class="fa fa-instagram" style=" font-size: 11px;"   aria-hidden="true"></i>                         
                         </button>
                      </div>

                    
                   </div>
                  </div>
                </div>
             
  
             
              <div class="col-sm-2" style="width: 200px; padding-left: 50px;">
                <div class="wpb_wrapper"><div style="background-color:; height: 25px;" class="nicdark_section  "></div> <h6 style="color:black; padding-left:5px; text-align:; font-size:14px; line-height:14px; letter-spacing: 2px; font-weight:bold;" class="   nd_options_first_font ">OUR AGENCY</h6> <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
                <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                  <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Services</p>
                    <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Tourism</p>
                    <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Payment</p>
                    <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Tourism</p>

                  </div>
              </div>
              <div style="background-color:none; height: 10px;" class="nicdark_section  ">
              </div>
              </div>
              </div>
  
              <div class="col-sm-2" style="padding-left: 40px;">
                <div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div style="background-color:; height: 25px;" class="nicdark_section  "></div> <h6 style="color:black; padding:px; text-align:; font-size:14px; line-height:14px; letter-spacing: 2px; font-weight:bold;" class="   nd_options_first_font ">PARTNERS</h6> <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
    <div class="wpb_text_column wpb_content_element ">
      <div class="wpb_wrapper">
        <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Booking</p>
  <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; RentalCar</p>
  <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; EventHosts</p>
  <p style="color: black;"><img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Marketing</p>

  
      </div>
    </div>
  <div style="background-color:none; height: 10px;" class="nicdark_section  "></div></div></div></div>
    </div>
              
    <div class="col-sm" style="padding-left: 50px;">
         <div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><div style="background-color:; height: 25px;" class="nicdark_section  "></div> <h6 style="color:black; padding:px; text-align:; font-size:14px; line-height:14px; letter-spacing: 2px; font-weight:bold;" class="   nd_options_first_font ">LAST MINUTE</h6> <div style="background-color:; height: 10px;" class="nicdark_section  "></div>
    <div class="wpb_text_column wpb_content_element ">
      <div class="wpb_wrapper">
        <p style="color: black;">
          <img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Amboseli</p>
        <p style="color: black;">
          <img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Samburu</p>
          <p style="color: black;">
            <img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Diani</p>
            <p style="color: black;">
              <img class="" src="http://www.nicdarkthemes.com/themes/travel/wp/demo/love-travel/wp-content/uploads/sites/3/2018/11/right-arrow.png" alt="" width="10">&nbsp; Ol Pejeta</p>
          </div>
    </div>
  <div style="background-color:none; height: 10px;" class="nicdark_section  "></div></div></div></div>
  
       </div>
  
         </div>
        </div>
        <div>
          <hr style="margin: 40px 0 20px 0; margin-right:100px; margin-top: 90px; color: black;">
          <p style="text-align: center; padding-top: 10px; color: black;">
            © copyright ALL RIGHTS RESERVED Penguins Tech 2022</p>
        </div>
        
        </div>


       

  

  



     











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>