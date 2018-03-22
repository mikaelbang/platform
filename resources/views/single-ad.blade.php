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
            @if( isset($token) )
                <p><a href="{{ route('ad.shared', ['ad' => $ad->slug, 'token' => auth()->user()->recruiter->token]) }}">Din länk</a></p>
            @else
                <button>Ansök</button>
            @endif
        </div>
    </div>
</div>
@endsection