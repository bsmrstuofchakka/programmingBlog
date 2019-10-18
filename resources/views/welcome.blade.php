@extends('admin.layout.welcomeMaster')


@section('content')
<div class="row">
    @if(isset($blogs[0]))
        @foreach($blogs as $blog)


  <div class="col-lg-4 col-md-6 mt-30">
    <div class="single-article p-0 wrap-reverse">
        <div class="article-post-img">

            <img src="{{asset('/admin/uploads/'.$blog->photo)}}" height="300" width="300"  alt="">
        </div>
        <div class="article-post text-left mt-35">
            <h3><a href="#">{{$blog->title}}</a></h3>
            <p name="description">{{str_limit($blog->description,150,'............')}}</p>
            <a href="{{url('welcome2').'?id='.$blog->id}}" class="txt-clr-1 read-more">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>

@endforeach

@endif


</div>

@endsection