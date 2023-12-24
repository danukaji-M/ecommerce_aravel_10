@extends('leyouts.app')

@section('title' , 'test1')
@section('content')
    <div class=" cotainer-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-bold" >
                    @if($name != null)
                        hello, {{$name}}
                    @else
                        hello, user
                    @endif
                </h1>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
@endsection
