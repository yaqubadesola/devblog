@extends('blog.app')
@section('main')
    

<!--loading -->
<div class="loading">
    <div class="circle"></div>
</div>
<!--/-->

  
    <!--post-default-->
    <section class="section pt-55 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 mb-20">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image">
                            <img src="{{asset('assets/img/blog/'.$post->image)}}" alt="">
                        </div>
                        <div class="post-single-content">
                            <a href="blog-grid.html" class="categorie">Blog</a> 
                            <h4>{{$post->title}} </h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><a href="author.html"><img src="{{asset('assets/img/author/1.jpg')}}" alt=""></a></li>
                                    <li><a href="author.html">David Smith</a> </li>
                                    <li class="dot"></li>
                                    <li>{{$post->title}}</li>
                                    <li class="dot"></li>
                                    <li><i class="fas fa-eye"></i> &nbsp;<b style="border-radius:10px;border: 2px solid #dfbdbd; padding:5px;margin:5px">{{$post->view_count}} {{$post->view_count > 1 ? "Views":"View" }}</b></li>
                                </ul>
                            </div>
                        </div>
                  
                        <div class="post-single-body">
                            <p>
                                {{$post->detail}}
                            </p>
   
                           
                          
                        </div>

                        <div class="post-single-footer">
                            <div class="tags">
                                <ul class="list-inline">
                                    <li>
                                        <a href="blog-grid.html">Travel</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Nature</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">tips</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">forest</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">beach</a>
                                    </li>
                                
                                </ul>
                            </div>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li>
                                        <a href="#" class="color-facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="color-pinterest">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>                           
                        </div>
                    </div> <!--/-->
                    
                    <div class="row">
                        <div class="col-lg-12">
                        <!--widget-author-->
                        <div class="widget">
                            <div class="widget-author">
                                <a href="#" class="image">
                                    <img src="{{asset('assets/img/author/1.jpg')}}" alt="">
                                </a>
                                <h6>
                                    <span>Hi, I'm David Smith</span>
                                </h6>
                                <p>
                                I'm David Smith, husband and father , I love Photography,travel and nature. I'm working as a writer and blogger with
                                experience of 5 years until now.</p>
                        
                        
                                <div class="social-media">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#" class="color-facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="color-pinterest">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/-->
                        </div>
                    </div>
                   
                    <!--next & previous-posts-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="widget-next-post">
                                    <div class="small-post">
                                        <div class="image">
                                            <a href="post-default.html">
                                                <img src="{{asset('assets/img/blog/'.$post->image)}}" alt="...">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <div>
                                                <a class="link" href="post-default.html">
                                                    <i class="arrow_left"></i>Preview post</a>
                                            </div>
                                            <a href="post-default.html">{{$post->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/-->

<!--newslettre-->
<section class="newslettre">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 text-center">
                <div class="newslettre-info">
                    <h5>Subscribe to our Newslatter</h5>
                    <p> Sign up for free and be the first to get notified about new posts. </p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="social-icones">
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>Twitter </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>Instagram </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>Youtube</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection