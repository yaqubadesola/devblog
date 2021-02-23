
@extends('blog.app')
@section('main')
            <!--loading -->
        <div class="loading">
            <div class="circle"></div>
        </div>
       
          <!--contact us-->
    <section class="section pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Add new post</h5>
                    </div>
                </div>
            </div>
        <div class="row"> 
            <div class="col-lg-2">
                &nbsp;
            </div> 
            <div class="col-lg-8">
               {{--  <div class="row mb-20">
                    <div class="col-lg-8 mt-30"> --}}
                        <div>
                            @if($errors)
                                @foreach($errors->all() as $error)
                                <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif
  
                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
                        </div>
                        <div class="contact">
                            <form action="{{ route('posts.store') }}" class="widget-form" method="POST" id="main_contact_form" enctype="multipart/form-data"  >
                                @csrf
                                <h6>Feel free to create amazing content that counts.</h6>
                                <p>You cannot hang out with negative people and expect to live a positive life.</p>
                                   
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Post Title*" required="required"/>
                                </div>
                            
                                <div class="form-group">
                                    <input type="file" name="feature_image"  id="feature_image" class="form-control" style="height: 60px;" placeholder="Featured Image*"/>
                                </div>
                         
                                <div class="form-group">
                                    <textarea  name="detail" id="detail" cols="30" rows="5" class="form-control" placeholder="Post Content*" required="required"></textarea>
                                </div>
                            
                                <button type="submit" name="submit" class="btn-custom">Save Post</button>
                            </form>
                       {{--  </div> 
                    </div>
                 --}}
                
            </div>    
            <div class="col-lg-2">
                &nbsp;
            </div>   
        </div> 
        </div>
    </section>        

  @endsection

      