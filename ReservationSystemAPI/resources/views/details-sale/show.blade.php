@extends('layouts.app')

@section('template_title')
    {{ $detailsSale->name ?? "{{ __('Show') Details Sale" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Details Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('details-sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sale Id:</strong>
                            {{ $detailsSale->sale_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ticket Id:</strong>
                            {{ $detailsSale->ticket_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
