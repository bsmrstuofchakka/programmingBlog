@extends('admin.layout.master')

@section('content')


    <div class="container-fluid">

        <div class="col-12">
            <a class="btn btn-default text-right"  href="{{url('blog/add')}}">Add blog</a>

        </div>


        <div class="row">
            <div class="col-12 table-responsive"></div>
            <table class="table table-condensed">
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>PHOTO</th>
                    <th>DESCRIPTION</th>
                    <th>STATUS</th>
                    <th>ACTION</th>
                </tr>

                @if(isset($blogs[0]))
                    @foreach($blogs as $blog)
                <tr>
                    <th>{{$blog->id}}</th>
                    <th>{{$blog->title}}</th>
                    <th><img width="80px" src="{{asset('/admin/uploads/'.$blog->photo)}}"/> </th>
                    <th>{{$blog->description}}</th>
                    <th>{{$blog->status}}</th>
                    <th>
                        <a href="{{url('blog/edit').'?id='.$blog->id}}">Edit /</a>
                        <a href="{{url('blog/delete').'?id='.$blog->id}}">Delete</a>
                    </th>
                </tr>
                    @endforeach

                    @endif

            </table>


        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">{{$blogs->links()}}</li>

                        <!-- <li class="page-item"><a class="page-link" href="#">04</a></li>  -->
                    </ul>
                </nav>
            </div>
        </div>
        </div>







    @endsection