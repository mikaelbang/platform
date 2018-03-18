@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default" style="margin-bottom: 10px">
                <div class="card-header">{{ $ad->id .'. '.  $ad->title }}</div>
                <div class="card-body">
                    {{ $ad->description }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection