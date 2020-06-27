@extends('admin.default')

@section('page-header')
    Portfolio <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

    <div class="mB-20">
        <a href="{{ route(ADMIN . '.portfolio.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>


    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @php $no = 1; @endphp
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ !empty($item->title) ? $item->title : '-' }}</td>
                        <td>{{ !empty($item->year) ? $item->year : '-' }}</td>
                        <td>{{ !empty($item->location) ? $item->location : '-' }}</td>
                        <td>{{ !empty($item->category_id) ?  $item->category->name : '-' }}</td>
                        <td>{{ ucwords($item->status) }}</td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route(ADMIN . '.portfolio.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                <li class="list-inline-item">
                                    {!! Form::open([
                                        'class'=>'delete',
                                        'url'  => route(ADMIN . '.portfolio.destroy', $item->id),
                                        'method' => 'DELETE',
                                        ])
                                    !!}

                                        <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>

                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
