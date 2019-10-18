@extends('admin.layout.master')

@section('content')

    <div class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-xl-2 offset-lg-1 col-12">
                    <div class="register">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2 col-12">
                                <div class="section-title text-center">
                                    <h4 class="fw-7">Email and Phone Number</h4>
                                    <p class="fz-16 fw-4">Only Email and Phone Nmuber you inserted which is showed your website</p>
                                </div>
                            </div>
                        </div>


                                {!! Form::open(['url' => 'settings/save' ]) !!}

                            @if(!empty($settings))
                                <input type="hidden" name="id" value="{{$settings->id}}">
                            @endif

                                    <div class="form-group mt-30">
                                        <label>Email</label>
                                        <input type="email" name="email"  value="@if(!empty($settings)) {{$settings->email}} @endif" class="form-control" placeholder="Your Email..">
                                    </div>



                                    <div class="form-group mt-30">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="@if(!empty($settings)) {{$settings->phone}} @endif" class="form-control" placeholder="Your Phone Number..">
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-block reg-btn">Submit Now</button>
                                {!! Form::close() !!}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection