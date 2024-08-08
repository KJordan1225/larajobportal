@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-4">
                <div class="row justify-content-center fs-1 font-weight-bold">
                    {{ $totaljobs }} Jobs Listed 
                </div>
                <div class="row justify-content-center fs-1 font-weight-bold">
                    {{ $jobs->links() }}
                </div>
            </div>            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                    <div class="card-body">                    
                            <ul class="list-group">
                            @php
                                $job_count=1;
                            @endphp
                            @foreach ($jobs as $job)
                                <li class="list-group-item d-flex mb-2">
                                    <!-- <a href="{{ route('single.job', $job->id) }}"></a> -->
                                    <div class="image-column" style="width: 100px;">
                                        <img src="{{ asset ('assets/images/logo/'.$job->image.'') }}" alt="Image 1" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="{{ route('single.job', $job->id) }}"><p class="fs-1 font-weight-bold" style="padding-left: 10px">{{ $job->job_title }}</p></a>
                                        <p class="fs-2 font-weight-bold" style="padding-left: 10px">{{ $job->company  }}</p>
                                    </div>
                                    <div class="flex-grow-1 fs-4 font-weight-bold">{{ $job->job_region }}</div>
                                    <div class="flex-grow-1 fs-4 font-weight-bold">{{ $job->job_type }}</div>
                                    <div class="flex-grow-1 fs-4 font-weight-bold">{{ $job->job_location }}</div>
                                </li>
                                @php
                                    $job_count++;
                                @endphp
                            @endforeach
                            </ul>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-8 pb-4">
                        <div class="row justify-content-center fs-1 font-weight-bold">
                            {{ $jobs->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
