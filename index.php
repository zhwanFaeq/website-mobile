<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="website.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prozha";

//creat connection
$conn = mysqli_connect("localhost","root","","prozha");


//check connection
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
echo "connected successfully";
echo"<br>";
?>






















    <div class="main">
    <div class="top_main">
        <table class="topt">
<tr>
    <th> <i class="fa fa-phone"></i><span>+964 07x0 xxx xx xx</span></th>
    <th><i class="fa fa-envelope"></i><span>z@gmail.com</span></th>
    <th> <i class="fa fa-clock-o"></i><span>7days: 8:00am- 6:00pm</span></th>
    <th colspan="3" id="social">
        <li class="fa fa-facebook"></li>
        <li class="fa fa-instagram"></li>
        <li class="fa fa-snapchat"></li>
        <li class="fa fa-youtube"></li>



    </th>





</tr>


        </table>


        
    </div>
    <!--end of top main-->
    <div class="header"></div>
    <h3>We are always providing better.</h3>
    <h3> Sell and Buy with us.</h3>
</div>
<!--end of header-->
<nav>
    <ul>
        <li> <a href="#">Home</a></li>
        <li> <a href="#">Computer &#9662</a>
        <ul>
            <li> <a href="#">Desktop</a></li>
            <li> <a href="#">Laptop</a></li>
            <li> <a href="#">MiniBook</a></li>



        </ul>
    </li>





        <li> <a href="#">Phone</a></li>
        <li> <a href="#">Tablet</a></li>
        <li> <a href="#">MacBook</a></li>
        <li> <a href="#">News &#9662</a>

        
            <ul>
                <li> <a href="#">Economy</a></li>
                <li> <a href="#">Sport</a></li>
                <li> <a href="#">Global Warming</a></li>
    
    
    
            </ul>
        </li>
    
    





        <li> <a href="#">About</a></li>





    </ul>
    <br><br><br>




    <div class="container">
        <div class="carousel">
          <div class="carousel__face"><span>This is something</span></div>
          <div class="carousel__face"><span>Very special</span></div>
          <div class="carousel__face"><span>Special is the key</span></div>
          <div class="carousel__face"><span>For you</span></div>
          <div class="carousel__face"><span>Just give it</span></div>
          <div class="carousel__face"><span>A try</span></div>
          <div class="carousel__face"><span>And see</span></div>
          <div class="carousel__face"><span>How IT Works</span></div>
          <div class="carousel__face"><span>Woow</span></div>
        </div>
      </div>






</nav>
<br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br><br><br>
    

<!--<div class="main_content"></div>
    <div class="myslider"></div>-->



   <!-- start about section -->
   <section id="about">
    <div class="container col-xxl-8 px-4 py-5">
      <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="data:image/jpeg;base64,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">
        </div>
        <div class="col-lg-6">
          
          <h4 class="display-5 fw-bold lh-1 mb-3">Iphone6</h4>
          <div class="bt-2 border bottonm fw-bold"></div>
          <p>This is Apple like we've never seen before. Apple like we never thought we'll see. To begin with, there's supposed to be no better iPhone than the iPhone 6. That's the sort of thing you'd expect of Apple. Come September every year, the world grabs a bag of popcorn and gets ready to watch Apple's bestest iPhone yet come on stage in all its glory.

            That's what we did too, minus the popcorn, which by the way would've had nothing to do with the bitter aftertaste the presentation left. And no, we don't mean Apple's live streaming blunder.
            
            Things actually started off nicely with the announcement of the long overdue screen size bump, and we didn't get a cheaper option this time - we were treated to possibly a bigger, better iPhone to go with the best iPhone to date. How Apple - it takes another iPhone to beat the iPhone.
          </p>
          
          <br><br>
          
      </div>
    </div>
  </section>
  
    <!-- end about section -->

    <section id="about">
        <div class="container col-xxl-8 px-4 py-5">
          <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="data:image/jpeg;base64,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">
            </div>
            <div class="col-lg-6">
              
              <h4 class="display-5 fw-bold lh-1 mb-3">Vivo</h4>
              <div class="bt-2 border bottonm fw-bold"></div>
              <p>About vivo
                vivo is a global smartphone manufacturer with production facilities and R&D centers in China (Dongguan, Shenzhen, Nanjing, Beijing, Hangzhou and Chongqing), India, Indonesia and the United States (San Diego).
                
              </p>
              
              <br><br>
              
          </div>
        </div>
      </section>









      <section id="about">
        <div class="container col-xxl-8 px-4 py-5">
          <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSH-k6JxEfVbpQi_ec_Z0aMZ_jfgRHM-PUlGg&s">
            </div>
            <div class="col-lg-6">
              
              <h4 class="display-5 fw-bold lh-1 mb-3">Oppo</h4>
              <div class="bt-2 border bottonm fw-bold"></div>
              <p>OPPO, established in 2004, has become one of the world's leading smart device manufacturer and innovator with its business expanding to over 60 countries.
                
              </p>
              
              <br><br>
              
          </div>
        </div>
    </section>
      
  
  
    <section id="about">
        <div class="container col-xxl-8 px-4 py-5">
          <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe-YBPOXKVpNKLx4pB_txBJfvBpF_Nca5cxQ&s">
            </div>
            <div class="col-lg-6">
              
              <h4 class="display-5 fw-bold lh-1 mb-3">Vivo</h4>
              <div class="bt-2 border bottonm fw-bold"></div>
              <p>Vivo is a Chinese multinational technology company headquartered in Dongguan, Guangdong, that designs and develops smartphones, smartphone accessories.
                
              </p>
              
              <br><br>
              
          </div>
        </div>
    </section>




    <section id="about">
        <div class="container col-xxl-8 px-4 py-5">
          <!--<h2 class="pb-2 border-bottom fw-bold">About Me</h2>-->
          <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkC7m4ypgtr4x5yAwnvk-YueW_gm6qINkz_w&s">
            </div>
            <div class="col-lg-6">
              
              <h4 class="display-5 fw-bold lh-1 mb-3">Galaxy</h4>
              <div class="bt-2 border bottonm fw-bold"></div>
              <p>
                The name of our Galaxy is the Milky Way Galaxy. It is part of a group of galaxies called the local group. This local group is part of a Galaxy clusters called the Virgo Supercluster.
                
              </p>
              
              <br><br>
              
          </div>
        </div>
    </section>




    <div class="RekNews">
      <div class="rek">
        <marquee>
      <div class="rek1"> <h3></h3></div>
      <div class="rek2"> <h3></h3></div>
      <div class="rek3"> <h3></h3></marquee></div>




      </div>
      <div class="news">


        <div class="hawal">
          <div class="imgholder">
            <img src="data:image/jpeg;base64,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">
</div>
<div class="textholder">
  <h3>Apple May cut iphone production Yet Again: Analyst<br>

   An investor note floatedby zhang recently notes that 
    the chinese companies are showing their support to Huawei
    by offering to subsidise the Huawei smartphone purchases of their employees..........

   </h3>
  <span> <a href="#">Read More..</a></span>

</div>
</div>





<div class="hawal">
  <div class="imgholder">
    <img src="data:image/jpeg;base64,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">
</div>
<div class="textholder">
<h3>Axiaomi Redmi Note Receiving MIUI 10 Stable Update in 
  India, Users Report:<br>
  An investor note floatedby zhang recently notes that 
    the chinese companies are showing their support to Huawei
    by offering to subsidise the Huawei smartphone purchases of their employees..........

 
</h3>
<span> <a href="#">Read More..</a></span>

  
  

</div>
</div>






<div class="hawal">
  <div class="imgholder">
    <img src="data:image/jpeg;base64,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">
</div>
<div class="textholder">
<h3>Samsung Galaxy S10 Family Said
  to Include an 'Edge' Model, Pre-
  Installed Screen Protectors Reported:<br>
  An investor note floatedby zhang recently notes that 
    the chinese companies are showing their support to Huawei
    by offering to subsidise the Huawei smartphone purchases of their employees..........

 
</h3>
<span> <a href="#">Read More..</a></span>

</div>
</div>








<div class="hawal">
  <div class="imgholder">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAADtQ7rSsBGlsWRtlSoeUHSmj5e_Jn1PL1g&s">
</div>
<div class="textholder">
<h3>Vivo Y93 With MediaTek Helio
  P22 SoC Listed on India Site,Tips
  Imminent Launch:<br>
  An investor note floatedby zhang recently notes that 
    the chinese companies are showing their support to Huawei
    by offering to subsidise the Huawei smartphone purchases of their employees..........



</h3>
<span> <a href="#">Read More..</a></span>

</div>
</div>

<footer>
  <div class="col25">
    <h3>Contact Us</h3>
    <p>  <i class="fa fa-phone"></i>+964 721 xx xx
     <br>
     <i class="fa fa-envelope"></i>z@gnail.com<br>
     <i class="fa fa-home"></i> Kurdistan-Kalar-City Eye</p>
  </div>
  <div class="col25">
    <h3>Map</h3>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFIYdx9cyzhsy4BW42oHVFTuVK4mtIdmFsDg&s" style="width: 100%; height: 100px;">
  </div>
  <div class="col25">
    <h3>SiteMap</h3>
    <ul>
      <li>Computer
        <ul><li>Desktop</li>
          <li>Laptop</li></ul>
      </li>
      <li>Phone</li>
      <li>Tablet</li>
      <li>MacBook</li>
      <li>News</li>
      <li>About</li>
      



    </ul>
  </div>
  <div class="col25">
    <h3 >Alert</h3>
    <h4>We are not responsible for any fraud
      and unfair selling and buying on our
      website. <br>

      we recommend to have a look at review
      section of products and sellers.
    </h4>
  </div>





</footer>




















      </div>



    </div>
      
  
      
  
  

</body>
</html>