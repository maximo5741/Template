<?php include_once('./header.php');?>
<div class="container">
  <p>Filler content</p>
</div>
     
<div class="container">
  <p>Filler content</p>
</div>


<!-- The example from Bootstrap already has a container -->
<!-- CSS file is on assets/css/product.css -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

<div class="container">

<!-- Miles code -->
<!-- CSS file is on assets/css/product.css -->
<!-- You can use this website to add place holder images if necessary: https://placehold.co/ -->

 <!--
  <div class="row">
    <div class="col-sm-12">
      <div class="section-header text-center">
        <h1>Client Impact</h1> 
        <div class="border"></div>
        <p class="comment"> "We will add this when our client provides the information" </p>
        <h3 class="industry">Industry</h3> 
      </div>
    </div>
    <div class="col-sm-12">
      <div id="customers" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#customers" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Miles Wildmore</h5>
              <h6>Front-End Web Developer</h6>
            </div>
          </div>
          <div class="carousel-item">
            <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Nicolas Cawein</h5>
              <h6>IT Consultant</h6>
            </div>
          </div>
          <div class="carousel-item">
          <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Maximo Del Valle</h5>
              <h6>Senior Web Developer</h6>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#customers" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customers" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>

-->




</div>

<?php include_once('./footer.php'); ?>
