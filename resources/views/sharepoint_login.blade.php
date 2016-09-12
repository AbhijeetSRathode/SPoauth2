@extends('layouts.layout')


@section('content')       
       <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="login-form"><!--login form-->
                           @if ($link)
								<a href="{{url($link)}}">Authenticate</a>
							@else
								<p>Time to make money</p>
							@endif

						</div>
                    </div>
                </div>
            </div>
        </section><!--/form-->
@endsection
