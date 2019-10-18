@extends('admin.layout.welcome2Master')

@section('content');
<div class="article">


  @if(!empty($blog))



    <img src="{{asset('/admin/uploads/'.$blog->photo)}}" class="img-fluid" alt="">
    <ul class="article-user-info">
        <li class="list-inline-item"><a href="#"><i class="fa fa-user"></i> Admin Post</a></li>
        <li class="list-inline-item ml-10"><a href="#"><i class="fa fa-comment"></i> 24 Comments</a></li>
        <li class="list-inline-item pull-right"><a href="#"><i class="fa fa-heart"></i> 30 Likes</a></li>
    </ul>
    <h4 class="mtb-20"><a href="#">{{$blog->title}}</a></h4>
    <p class="mt-20">{{$blog->description}}</p>


    @endif

</div>


    @endsection