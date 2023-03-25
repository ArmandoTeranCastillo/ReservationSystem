@extends('layouts.app')

@section('template_title')
    Concert
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Concert') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('concerts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Title</th>
										<th>Date Time</th>
										<th>Description</th>
										<th>Avalaible Seats</th>
										<th>General Price</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($concerts as $concert)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $concert->title }}</td>
											<td>{{ $concert->date_time }}</td>
											<td>{{ $concert->description }}</td>
											<td>{{ $concert->avalaible_seats }}</td>
											<td>{{ $concert->general_price }}</td>

                                            <td>
                                                <form action="{{ route('concerts.destroy',$concert->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('concerts.show',$concert->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('concerts.edit',$concert->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $concerts->links() !!}
            </div>
        </div>
    </div>
@endsection
