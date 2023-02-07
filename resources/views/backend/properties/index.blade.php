@extends('layouts.backend')

@section('title')
    All Properties
@endsection

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">All Properties</h3>
                </div>
                <div class="block-content">
                    <table class="table table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 5%;">#</th>
                            <th style="width: 40%;">Name</th>
                            <th style="width: 30%;">User</th>
                            <th style="width: 10%;">Status</th>
                            <th class="text-end" style="width: 15%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <td>{{ $property->id }}</td>
                                <td>{{ $property->name }}</td>
                                <td>{{ $property->user->first_name . ' ' . $property->user->last_name }}</td>
                                <td>
                                    @if($property->status == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-warning">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('style')
@endsection

@section('script')
@endsection
