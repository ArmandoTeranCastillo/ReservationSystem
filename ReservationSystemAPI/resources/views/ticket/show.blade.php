@extends('layouts.app')

@section('template_title')
    {{ $ticket->name ?? "{{ __('Show') Ticket" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ticket</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tickets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Concert Id:</strong>
                            {{ $ticket->concert_id }}
                        </div>
                        <div class="form-group">
                            <strong>Sale Id:</strong>
                            {{ $ticket->sale_id }}
                        </div>
                        <div class="form-group">
                            <strong>Place:</strong>
                            {{ $ticket->place }}
                        </div>
                        <div class="form-group">
                            <strong>Row:</strong>
                            {{ $ticket->row }}
                        </div>
                        <div class="form-group">
                            <strong>Seat:</strong>
                            {{ $ticket->seat }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $ticket->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
