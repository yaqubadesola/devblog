  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <!--logo-->
        <div class="logo">
            <a href="/">
                <img src="{{asset('assets/img/logo.png')}}" alt="">
            </a>
        </div>
        <!--/-->
        <?php 
        
            $visitors = App\Models\Visitor::all();
            $total_visitors = count($visitors);
            $formatter = new \NumberFormatter("en-US", \NumberFormatter::ORDINAL);

        ?>
        <!--navbar-collapse-->
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ml-auto mr-auto">
                <li><a class="nav-link" style="color: #F67280"> 
                     
                   <b>Welcome You are the ({{$formatter->format($total_visitors)}}) user to visit my Blog page</b> 
                </a></li>
            </ul>
        </div>
        <!--/-->

        <!--navbar-right-->
        <div class="navbar-right ml-auto">
            <div class="social-icones">
                <ul class="list-inline">
                    
                    <li>
                        <a href="{{route('posts.create')}}">
                            <em>Create Post&nbsp;&nbsp;<span class="fa fa-plus"></span></em>
                        </a>
                    </li>
                </ul>
            </div>

          
        </div>
    </div>
</nav>
<!--/-->