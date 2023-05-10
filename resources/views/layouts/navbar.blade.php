 <nav class="navbar navbar-default navbar-sticky bootsnav">

     <div class="container">

         <!-- Start Header Navigation -->
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                 <i class="fa fa-bars"></i>
             </button>
             <a class="navbar-brand" href="{{ route('home') }}">
                 <img src="assets/img/marketelevate.jpeg" style="height:50px; width:213px;" class="logo" alt="Logo">
             </a>
         </div>
         <!-- End Header Navigation -->

         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="navbar-menu">
             <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                 <li>
                     <a href="{{route('home')}}">Home</a>
                 </li>
                 <li>
                     <a href="{{route('about')}}">About Us </a>
                 </li>
                 <li><a href="{{route('services')}}">Services</a></li>
                 <li><a href="{{route('blog')}}">Blog</a></li>
                 <li>
                     <a href="{{route('contact')}}">Contact Us</a>
                 </li>
             </ul>
         </div><!-- /.navbar-collapse -->
     </div>
 </nav>