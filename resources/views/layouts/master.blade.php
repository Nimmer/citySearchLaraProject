<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->

    {!! Html::style('assets/css/cover.css') !!}
    {!! Html::style('assets/jquery-ui/jquery-ui.css')!!}




             <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
 </head>

   <body>
   <div class="site-wrapper">

       <div class="site-wrapper-inner">

           <div class="cover-container">

               <div class="masthead clearfix">
                   <div class="inner">
                       <h3 class="masthead-brand">CityInfoLogo</h3>
                       <nav>
                           <ul class="nav masthead-nav">
                               <li class="active"><a href="#">Home</a></li>
                               <li><a href="#/features">Features</a></li>
                               <li><a href="#/contact">Contact</a></li>
                           </ul>
                       </nav>
                   </div>
               </div>

               <div class="inner cover">

                    @yield("search")
                    @yield("content")
                    @yield("results")
               </div>



               <div class="mastfoot">
                   <div class="inner">
                       <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                   </div>

               </div>

           </div>

       </div>

   </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


 {!! HTML::script('assets/js/controller.js') !!}
{!! HTML::script('assets/jquery-ui/jquery-ui.min.js') !!}




  </body>
</html>