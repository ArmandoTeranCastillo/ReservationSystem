@extends('layouts.app')

@section('template_title')
    {{ $concert->name ?? "{{ __('Show') Concert" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Concert</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('concerts.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $concert->title }}
                        </div>
                        <div class="form-group">
                            <strong>Date Time:</strong>
                            {{ $concert->date_time }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $concert->description }}
                        </div>
                        <div class="form-group">
                            <strong>Avalaible Seats:</strong>
                            {{ $concert->avalaible_seats }}
                        </div>
                        <div class="form-group">
                            <strong>General Price:</strong>
                            {{ $concert->general_price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
