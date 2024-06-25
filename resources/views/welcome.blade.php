<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business</title>
    <link rel="icon" href="{{url('public/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{url('public/css/bootstrap.min.css')}}" rel ="stylesheet" type="text/css">
    <link href="{{url('public/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{url('public/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{url('public/css/animate.css') }}" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
   
</head>
<body>
    <header id="header_wrapper">
    
<div class="container">
        <nav class="navbar navbar-default" role="navigation">
                    <ul class="nav navbar-nav" id="mainNav">
                    <li><div class="logo"><a href="#"><img src="{{ asset('images/favicon.png') }}" alt="logo"></a></div> </li>
                        <li><h1> <a href="#welcome" class="scroll-link">Business</h1></a></li>
                        
                        <li><a href="#story">Dashboard</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#prices">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<section id="welcome" class="top_cont_outer">
<div class="div_wrapper">
<div class="container">
<div class="welcome">
    <div class="row">
        <div class="col-xs-6">
            <h1>Corporate Business</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras vel augue et erat vulputate pharetra. Ut ac feugiat ex.
            </p>
            <div class="button-group">
                <button class="intro-btn" href="#introduction" class="intro">Introduction</button>
                <button class="learn-more">Learn More</button>
            </div>
        </div>
        <div class="col-xs-6">
        <img src="{{ asset('images/office.jpg') }}" alt="Office">
        </div>
    </div>
</div>
</div>
</div>
</section>

<section id="story">
  <div class="div_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('images/laptop.jpg') }}" alt="Story">
        </div>
        <div class="col-md-6">
          <div class="header">
            <p></p>
            <ul id="storyTitle">
            <li><h4> Our Story</h4></li>
            </ul>
            <div class="content">
            <h2>Our team comes with the experience and knowledge</h2>
            </div>
            <nav aria-label="story">
              <ul>
                <li><button class="intro-btn">Who Are We</button></li>
                <li><button class="learn-more">Our Vision</button></li>
                <li><button class="learn-more">Our History</button></li>
              </ul>
            </nav>
          </div>
          <div class="content">
            <p>It is important to have a readable font and content layout in web pages. Lorem Ipsum and its variations can be used as placeholder text during the design process.</p>

            <p>It is important to have a readable font and content layout in web pages. Lorem Ipsum and its variations can be used as placeholder text during the design process.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="services">
  <div class="div_wrapper">
    <div class="container">
      <div class="row" id="title">
      <div class="col-12 text-center">
  <div class="section-title-container">
    <h1 class="section-title">Services</h1>
  </div>
</div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="pill_icon.png" alt="Pill Icon">
            </span>
            <h2 class="icon-title">Refreshing Design</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
            </p>
          </div>
        </div>
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="shield_icon.png" alt="Shield Icon">
            </span>
            <h2 class="icon-title">Solid Bootstrap 5</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
            </p>
          </div>
        </div>
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="trumpet_icon.png" alt="Trumpet Icon">
            </span>
            <h2 class="icon-title">100+ Components</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="box_icon.png" alt="Box Icon">
            </span>
            <h2 class="icon-title">Creative Solutions</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio.
            </p>
          </div>
        </div>
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="chart_icon.png" alt="Chart Icon">
            </span>
            <h2 class="icon-title">Data Analysis</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
            </p>
          </div>
        </div>
        <div class="col-4">
          <div class="icon">
            <span class="icon-circle">
              <img src="tools_icon.png" alt="Tools Icon">
            </span>
            <h2 class="icon-title">Effective Tools</h2>
            <p class="icon-paragraph">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="prices">
  <div class="container">
  <div class="row" id="title">
  <div class="col-12 text-center">
  <div class="section-title-container">
    <h1 class="section-title">Prices</h1>
  </div>
      </div>
    <div class="row">
      <div class="col">
        <div class="section" style="background-color: white;">
          <h2>Starter</h2>
          <p class="price_paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          </p>
          <p>$0/mo</p>
          <ul>
            <li>Cras justo odio.</li>
            <li>Dapibus ac facilisis in.</li>
            <li>Morbi leo risus.</li>
          </ul>
          <button class="start-btn">START FREE TRIAL</button>
        </div>
      </div>
      <div class="col">
        <div class="section" >
          <h2>Exclusive</h2>
          <p class="price_paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          </p>
          <p>$99/mo</p>
          <ul>
            <li>Cras justo odio.</li>
            <li>Dapibus ac facilisis in.</li>
            <li>Morbi leo risus.</li>
          </ul>
          <button class="start-btn">START FREE TRIAL</button>
        </div>
      </div>
      <div class="col">
        <div class="section" >
          <h2>Premium</h2>
          <p class="price_paragraph">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          </p>
          <p>$150/mo</p>
          <ul>
            <li>Cras justo odio.</li>
            <li>Dapibus ac facilisis in.</li>
            <li>Morbi leo risus.</li>
          </ul>
          <button class="start-btn">START FREE TRIAL</button>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer-content">
    <p><h2>We love to make perfect solutions for your business.</h2></p>
    <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae aliquam elit, sed commodo odio. 
                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras vel augue et erat vulputate pharetra. Ut ac feugiat ex.
            </p>
    <button class="footer-button">GET STARTED</button>
  </div>

</footer>


</body>
</html>