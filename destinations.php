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
        font-size: 10px;
        font-weight: 500;
        color: black;
        
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

      .destinations .col-sm-4{
        padding-bottom: 20px;
      }

      .gallery .card-img-top, .gallery .card{
        border-radius: 15px !important; 
        margin-bottom: 10px;       
      }  

      .gallery .card-img-top, .gallery .card .card-body{
        height: 300px;
      }

      
      .card:hover .destinations-card{
        display: block !important;
        z-index: 10;
        cursor: pointer;
      }

      .card:hover{
        transform: scale(1.02);
      }

       
      .content{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%; 
        top: 75%; 
        padding-top: 10px; 
      }
       
      .details{
        position: absolute;
        background-color: black;
        opacity: 0.5;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -10;
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
      <h1 class="display-4 text-center" style="padding-top: 50px;">Our Destinations</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center" style="padding-bottom: 20px;">
          <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Destinations</li>
        </ol>
      </nav> 
      <hr class="my-4">     
    </div>


    <div class="container destinations">
      <div class="row">
        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall23.jpg');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Masai Mara</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690"  type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
                 </div>
                </div>               
              </div>   
            </div>       
        </div>

        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall25.jpg');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Mt Longonot</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690" type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
                 </div>
                </div>               
              </div>   
            </div>       
        </div>

        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall24.jpg');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Mombasa</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690"  type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
                 </div>
                </div>               
              </div>   
            </div>       
        </div>

        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall22.jpg');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Tsavo</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690"  type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
                 </div>
                </div>               
              </div>   
            </div>       
        </div>

        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall27.webp');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Mt Kenya</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690"  type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
                 </div>
                </div>               
              </div>   
            </div>       
        </div>

        <div class="col-sm-4">
          <div class="card position-relative" style="width:100%; height: 400px; background-image: url('images/gall11.jpg');   background-size: 100% 100%;">
  
              <div class="card-body destinations-card" style="display: none;">
                <div class="d-flex content">
                  <div class="details"></div>
                  <div style="padding-left: 10px; padding-bottom: 10px;">
                    <p class="card-text text-light " style="font-family: 'Times New Roman', Times, serif; font-size: 20px; margin: 0;">Lamu</p>
                    <p style="margin: 0; padding: 0;">
                                
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star text-success" aria-hidden="true"></i>
                      <i class="fa fa-star-half-o text-success" aria-hidden="true"></i>
                      
                  </p>
                    <h2 class="nd_travel_font_weight_normal" style="margin: 0; line-height: 5px;">
                      <span class="" style="font-size: 15px; color:white;" >$</span>
                      <span class="" style="font-size: 15px; color:white;">700</span>  
                     </h2> 
                </div>
                  <div style="flex:1"></div>
                 <div style="float: right; padding-right: 10px; margin-top: 3%;">
                  <a href="https://api.whatsapp.com/send?phone=254722918690"  type="button" class="btn btn-success btn-md rounded-pill" >Book</a>
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