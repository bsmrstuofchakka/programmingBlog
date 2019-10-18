@extends('admin.layout.master')

@section('content')



    <div class="container-fluid">

        <div class="col-12">
            <a class="btn btn-default text-right"  href="{{url('blog/add')}}">Add blog</a>
        </div>

        <div class="row">
            <div class="col-12 table-responsive">

                {!! Form::open(['url' => 'blog/save', 'files'=>true]) !!}

                @if(!empty($blog))
                    <input type="hidden" name="id" value="{{$blog->id}}">
                 @endif

                <div class="form-group mt-30">

                    <label>Title</label>
                    <input type="text" name="title" value="@if(!empty($blog)){{$blog->title}} @endif" class="form-control" placeholder="title">
                </div>

                    <div class="form-group mt-30">

                        <label>Image</label>

                        <input type="file" name="photo" class="form-control" placeholder="photo">
                               @if(!empty($blog->photo))
                                       <img width="80" src="{{asset('/admin/uploads/'.$blog->photo)}}"  alt="">
                        @endif

                    </div>

                 <div class="form-group mt-30">

                     <label>Description</label>
                     <input type="text" name="description" value="@if(!empty($blog)){{$blog->description}} @endif" class="form-control" placeholder="description">

                 </div>

                <div class="form-group mt-30">

                    <label>Status</label>
                    <select name="status" class="form-control">
                        @if(!empty($blog))


                            <option  @if($blog->status==1) selected @endif value=1>Published</option>
                            <option @if($blog->status==0) selected @endif value=0>UnPublished</option>
                            @else
                            <option value="1">Published</option>
                            <option value="0">UnPublished</option>
                        @endif

                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block reg-btn">Submit Now</button>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection