<?php
use Illuminate\Support\Str;

?>
@extends('blog.app')
    @section('main')
        
    
    <!--loading -->
    <div class="loading">
        <div class="circle"></div>
    </div>
    <!--/-->

  

    <!--grid-layout-->
    <section class="section pt-85">
        <div class="container-fluid">
            <div class="row">
                @if(!empty($posts))
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <!--Post-1-->
                            <div class="post-card">
                                <div class="post-card-image">
                                    <a href="/posts/{{$post->id}}">
                                        <img src="{{asset('assets/img/blog/'.$post->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-card-content">
                                    <a href="#" class="categorie">Blog</a>
                                    <span class="categorie float-right"> <i class="fas fa-eye">&nbsp;&nbsp;{{$post->view_count}}</i></span>
                                    <h5>
                                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                    </h5>
                                    <p>{{Str::limit($post->detail, 100, ' ...')}}</p>
                                    <div class="post-card-info">
                                        <ul class="list-inline">
                                            <li>
                                                <a href="#">
                                                    <img src="{{asset('assets/img/author/1.jpg')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="author.html">David Smith</a>
                                            </li>
                                            <li class="dot"></li>
                                            <li>{{date_format($post->created_at,"Y-m-d")}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/-->
                        </div>
                    @endforeach
                @else
                    <div>Sorry, No post to show</div>
                @endif

                <!--pagination-->
               {{--  <div class="col-lg-12">
                    <div class="pagination mt--10">
                        <ul class="list-inline">
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="arrow_carrot-2right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/-->
                </div> --}}
            </div>
        </div>
    </section>
    <!--/-->

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