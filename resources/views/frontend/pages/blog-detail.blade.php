@extends('frontend.layouts.master')
@section('title','CoolPad || Blog Detail page')
@section('main-content')
          
    <!-- Start Blog Single -->
    <section class="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <img src="{{$post->photo}}" alt="{{$post->photo}}">
                                </div>
                                <div class="blog-detail">
                                    <h2 class="blog-title">{{$post->title}}</h2>
                                    <div class="blog-meta">
                                        <span class="author"><a href="javascript:void(0);"><i class="fa fa-user"></i>By {{$post->author_info['name']}}</a><a href="javascript:void(0);"><i class="fa fa-calendar"></i>{{$post->created_at->format('M d, Y')}}</a></span>
                                    </div>
                                    
                                    <div class="content">
                                        @if($post->quote)
                                        <blockquote> <i class="fa fa-quote-left"></i> {!! ($post->quote) !!}</blockquote>
                                        @endif
                                        <p>{!! ($post->description) !!}</p>
                                    </div>
                                </div>
                                <!-- <div class="share-social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="content-tags">
                                                <h4>Tags:</h4>
                                                <ul class="tag-inner">
                                                    @php 
                                                        $tags=explode(',',$post->tags);
                                                    @endphp
                                                    @foreach($tags as $tag)
                                                    <li><a href="javascript:void(0);">{{$tag}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            @auth

                            @else 
                            <!-- <p class="text-center p-5">
                                You need to <a href="{{route('login.form')}}" style="color:rgb(54, 54, 204)">Login</a> OR <a style="color:blue" href="{{route('register.form')}}">Register</a> for comment.

                            </p> -->
                           
                            <!--/ End Form -->
                            @endauth										 
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent News</h3>
                            @foreach($recent_posts as $post)
                                <!-- Single Post -->
                                <div class="single-post">
                                    <div class="image">
                                        <img src="{{$post->photo}}" alt="{{$post->photo}}">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">{{$post->title}}</a></h5>
                                        <ul class="comment">
                                        @php 
                                            $author_info=DB::table('users')->select('name')->where('id',$post->added_by)->get();
                                        @endphp
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$post->created_at->format('d M, y')}}</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> 
                                                @foreach($author_info as $data)
                                                    @if($data->name)
                                                        {{$data->name}}
                                                    @else
                                                        Anonymous
                                                    @endif
                                                @endforeach
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                            @endforeach
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget newsletter">
                            <h3 class="title">Newslatter</h3>
                            <div class="letter-inner">
                                <h4>Subscribe & get news <br> latest updates.</h4>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="form-inner">
                                        <input type="email" name="email" placeholder="Enter your email">
                                        <button type="submit" class="btn mt-2">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog Single -->
@endsection

@push('styles')
<style>
    .shop-categories .main-category a {
        transition: color .4s ease;
        font-size: 15px;
        color: #757575;
        margin: 0 18px;
        cursor: default;
        font-weight: 700;
    }
</style>
    
@endpush

@push('scripts')
<script>
$(document).ready(function(){
    
    (function($) {
        "use strict";

        $('.btn-reply.reply').click(function(e){
            e.preventDefault();
            $('.btn-reply.reply').show();

            $('.comment_btn.comment').hide();
            $('.comment_btn.reply').show();

            $(this).hide();
            $('.btn-reply.cancel').hide();
            $(this).siblings('.btn-reply.cancel').show();

            var parent_id = $(this).data('id');
            var html = $('#commentForm');
            $( html).find('#parent_id').val(parent_id);
            $('#commentFormContainer').hide();
            $(this).parents('.comment-list').append(html).fadeIn('slow').addClass('appended');
          });  

        $('.comment-list').on('click','.btn-reply.cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('.btn-reply.reply').show();

            $('.comment_btn.reply').hide();
            $('.comment_btn.comment').show();

            $('#commentFormContainer').show();
            var html = $('#commentForm');
            $( html).find('#parent_id').val('');

            $('#commentFormContainer').append(html);
        });
        
 })(jQuery)
})
</script>
@endpush