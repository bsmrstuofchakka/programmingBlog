@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">

        @if(!isset($settings[0]))

        <div class="col-12">
            <a class="btn btn-default text-right"  href="{{url('settings/add')}}">Add Setting</a>
        </div>

        @endif

        <div class="row">
            <div class="col-12 table-responsive"></div>
            <table class="table table-condensed">
                <tr>
                    <th>ID</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>ACTION</th>
                </tr>


                    @foreach($settings as $setting)

                    <tr>
                        <th>{{$setting->id}}</th>
                        <th>{{$setting->email}}</th>

                        <th>{{$setting->phone}}</th>
                        <th>
                            <a href="{{url('settings/edit').'?id='.$setting->id}}">Edit /</a>
                            <a href="{{url('settings/delete').'?id='.$setting->id}}">Delete</a>
                        </th>
                    </tr>

       @endforeach



            </table>


        </div>

    </div>

@endsection