@extends('layout.master')

@section('title') 
    Home - SHTS University
@stop

@section('content')
<header>
  <div class="container">   
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse menu" id="menu">      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-phone"></span> 1234 567 890</a></li>
        <li><a href="#"><span class="fa fa-envelope"></span> Contact Us</a></li>
        <li><a href="#"><span class="fa fa-question-circle"></span> FAQs</a></li>
        <li><a href="#"><span class="fa fa-user"></span> Student Login</a></li>   
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</header>

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SHTS University</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse menu" id="menu">      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Dolor</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Amet</a></li>   
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<aside id="social-icons" class="animated slideInDown hidden-sm hidden-xs">
    <ul>
        <li><img src="{{ url('img\desktop\soc_fb.png') }}" alt="fb"></li>
        <li><img src="{{ url('img\desktop\soc_twt.png') }}" alt="twitter"></li>
        <li><img src="{{ url('img\desktop\soc_gplus.png') }}" alt="google plus"></li>
        <li><img src="{{ url('img\desktop\soc_pin.png') }}" alt="pinterest"></li>
    </ul>
</aside>

<aside id="more-info" class="animated slideInUp hidden-sm hidden-xs">
    <ul>
        <li><img src="{{ url('img\desktop\sup-chat.png') }}" alt="live chat"></li>
        <li><img src="{{ url('img\desktop\sup-info.png') }}" alt="more info"></li>
        <li><img src="{{ url('img\desktop\sup-fund.png') }}" alt="funding enquiry"></li>
    </ul>
</aside>

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-7 col-md-4">
                <form class="login-form animated fadeIn">
                    <h1>Student Login</h1>

                    <div class="form-group">
                        <label for="username">Username: </label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="e.g.. john">
                    </div>

                    <div class="form-group">
                        <label for="password">Password: </label>
                        <input type="password" class="form-control" name="password"  id="password" placeholder="e.g.. ***********">
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary full-width" id="btn-login"> Sign In <i class="fa fa-arrow-circle-o-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="courses">
    <div class="container">
        <h2 class="section-header">Our Courses<h2>

        <div class="row">
            <div class="col-md-3">
                <div class="content-wrapper">
                    <h3>Information Technology</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <button class="btn btn-lg btn-primary">Learn more</button>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="content-wrapper">
                    <h3>Arts & Media</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    <button class="btn btn-lg btn-primary">Learn more</button>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="content-wrapper">
                    <h3>Business Management</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                     <button class="btn btn-lg btn-primary">Learn more</button>
                </div>
            </div> 

            <div class="col-md-3">
                <div class="content-wrapper">
                    <h3>Project Management</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                     <button class="btn btn-lg btn-primary">Learn more</button>
                </div>
            </div>           
        </div>
    
    </div>
</section>
    
<section id="about">
    <div class="container">
        <h2 class="section-header">About Us<h2>

        <div class="padded-content">
            <p>Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
            <p>Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
        </div>
     </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4>Stay Connected</h4>
                <img src="{{ url('img\desktop\ftr-soc-fb.png') }}" alt="fb">
                <img src="{{ url('img\desktop\ftr-soc-twt.png') }}" alt="twitter">
                <img src="{{ url('img\desktop\ftr-soc-in.png') }}" alt="linked in">
                <img src="{{ url('img\desktop\ftr-soc-gplus.png') }}" alt="google plus">
                <img src="{{ url('img\desktop\ftr-soc-pin.png') }}" alt="pinterest">
            </div>

            <hr class="visible-xs visible-sm">

            <div class="col-md-7">
                <h4>Sign up to our newsletter</h4>
                <form class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="contact_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                    </div>                
                    <button class="btn btn-warning">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row hidden-xs hidden-sm">
            <div class="col-md-2 col-md-offset-1">
                <h5>Lorem</h5>
                <a href="#">Mauris vel imperdiet</a>
                <a href="#">Faucibus metus</a>
                <a href="#">Nulla sed quam dictum</a>
                <a href="#">Ultricies sit amet</a>
                <a href="#">Sed tempus</a>
                <a href="#">Neque non tincidunt</a>
                <a href="#">Vivamus elementum</a>
                <a href="#">Mit ut semper</a>
            </div>

            <div class="col-md-2">
                <h5>Ipsum</h5>
                <a href="#">Mauris vel imperdiet</a>
                <a href="#">Faucibus metus</a>
                <a href="#">Nulla sed quam dictum</a>
                <a href="#">Ultricies sit amet</a>
                <a href="#">Sed tempus</a>
                <a href="#">Neque non tincidunt</a>
                <a href="#">Vivamus elementum</a>
            </div>

            <div class="col-md-2">
                <h5>Dolor</h5>
                <a href="#">Mauris vel imperdiet</a>
                <a href="#">Faucibus metus</a>
                <a href="#">Nulla sed quam dictum</a>
                <a href="#">Ultricies sit amet</a>
                <a href="#">Sed tempus</a>
                <a href="#">Neque non tincidunt</a>
                <a href="#">Vivamus elementum</a>
                <a href="#">Mit ut semper</a>
                <a href="#">Portitur vitae nulla dolor</a>
                <a href="#">Sapien mollis</a>
            </div>

            <div class="col-md-2">
                <h5>Sit amet</h5>
                <a href="#">Mauris vel imperdiet</a>
                <a href="#">Faucibus metus</a>
                <a href="#">Nulla sed quam dictum</a>
                <a href="#">Ultricies sit amet</a>
                <a href="#">Sed tempus</a>
                <a href="#">Neque non tincidunt</a>
                <a href="#">Vivamus elementum</a>
                <a href="#">Portitur vitae nulla dolor</a>
                <a href="#">Mit ut semper</a>
            </div>

            <div class="col-md-2">
                <h5>Consectetur</h5>
                <a href="#">Mauris vel imperdiet</a>
                <a href="#">Faucibus metus</a>
                <a href="#">Nulla sed quam dictum</a>
                <a href="#">Ultricies sit amet</a>
                <a href="#">Sed tempus</a>
                <a href="#">Neque non tincidunt</a>
                <a href="#">Vivamus elementum</a>
                <a href="#">Mit ut semper</a>
            </div>
        </div>

        <div class="panel-group visible-xs visible-sm" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Lorem
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    <ul class="list-group">
                            <li class="list-group-item"><a href="#">Mauris vel imperdiet</a></li>
                            <li class="list-group-item"><a href="#">Faucibus metus</a></li>
                            <li class="list-group-item"><a href="#">Nulla sed quam dictum</a></li>
                            <li class="list-group-item"><a href="#">Ultricies sit amet</a></li>
                            <li class="list-group-item"><a href="#">Sed tempus</a></li>
                            <li class="list-group-item"><a href="#">Neque non tincidunt</a></li>
                            <li class="list-group-item"><a href="#">Vivamus elementum</a></li>
                            <li class="list-group-item"><a href="#">Mit ut semper</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ipsum
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Mauris vel imperdiet</a></li>
                            <li class="list-group-item"><a href="#">Faucibus metus</a></li>
                            <li class="list-group-item"><a href="#">Nulla sed quam dictum</a></li>
                            <li class="list-group-item"><a href="#">Ultricies sit amet</a></li>
                            <li class="list-group-item"><a href="#">Sed tempus</a></li>
                            <li class="list-group-item"><a href="#">Neque non tincidunt</a></li>
                            <li class="list-group-item"><a href="#">Vivamus elementum</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Dolor
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="#">Mauris vel imperdiet</a></li>
                            <li class="list-group-item"><a href="#">Faucibus metus</a></li>
                            <li class="list-group-item"><a href="#">Nulla sed quam dictum</a></li>
                            <li class="list-group-item"><a href="#">Ultricies sit amet</a></li>
                            <li class="list-group-item"><a href="#">Sed tempus</a></li>
                            <li class="list-group-item"><a href="#">Neque non tincidunt</a></li>
                            <li class="list-group-item"><a href="#">Vivamus elementum</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        

        <hr>
        <div id="copyright">
            <p>©Copyright 2015 SHTS University, All rights reserved</p>
            <ul class="hidden-xs hidden-sm">
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
                <li>Sit</li>
                <li>Amet</li>
            </ul>
        </div> 
    </div>
</footer>
@endsection

