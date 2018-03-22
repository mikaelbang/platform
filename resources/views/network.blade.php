@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">{{ auth()->user()->firstname . ' ' . auth()->user()->lastname}} - {{ $recruiters->count() }} pers i ditt nätverk</div>

                <div class="card-body">
                    @forelse($recruiters as $recruiter)
                        <p>
                            @for($i = 0; $i < $recruiter->depth; $i++)
                                ->
                            @endfor
                            {{ $recruiter->user->firstname }}
                        </p>
                    @empty
                        <p>Du har inga rekryterare i ditt nätverk ännu. Bjud in några och tjäna ännu mer pengar!</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
