  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <!--logo-->
        <div class="logo">
            <a href="/">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>
        </div>
      
        <!--navbar-collapse-->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ml-auto mr-auto">
                <li><a class="nav-link" style="color: #F67280"> 
                     
                   </a></li>
            </ul>
        </div>
        <!--/-->

            <!--navbar-collapse-->
            <div class="collapse navbar-collapse" id="main_nav">
           {{--      <ul class="navbar-nav ml-auto mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index-2.html" data-toggle="dropdown"> Home </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="index-2.html">Demo 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html">Demo 2 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html">Demo 3 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html">Demo 4 </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6.html">Demo 5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-7.html">Demo 6 </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="blog-grid.html" data-toggle="dropdown"> Blog </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item" href="blog-grid.html"> Blog grid</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-masonry.html"> Blog masonry </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle active" href="post-default.html" data-toggle="dropdown"> Posts Features </a>
                        <ul class="dropdown-menu fade-up">
                            <li>
                                <a class="dropdown-item active" href="post-default.html"> post default</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-no-sidebar.html"> post no sidebar </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="post-left-sidebar.html"> post left sidebar </a>
                            </li>
                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"> Contact </a>
                    </li>
                </ul> --}}
            </div>
            <!--/-->
    
            <!--navbar-right-->
            <div class="navbar-right ml-auto">    
                <div class="categories">
                    <a href="{{route('posts.create')}}">
                        <em>Create Post&nbsp;&nbsp;<span class="fa fa-plus"></span></em>
                    </a>
                </div>
    
               {{--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
            </div>
        </div>
    </nav>
    <!--/-->

        <!--navbar-right-->
       {{--  <div class="navbar-right ml-auto">
            <div class="social-icones">
                <ul class="list-inline">
                    
                    <li>
                        <a href="{{route('posts.create')}}">
                            <em>Create Post&nbsp;&nbsp;<span class="fa fa-plus"></span></em>
                        </a>
                    </li>
                </ul>
            </div>

          
        </div> --}}
    </div>
</nav>
<!--/-->