@extends('layouts.backend')

@section('title')
    {{ isset($property) ? 'Edit Property' : 'Add New Property' }}
@endsection

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ isset($property) ? 'Edit Property' : 'Add New Property' }}</h3>
                </div>
                <div class="block-content">
                    <form method="POST"  action="{{ isset($property) ? route('properties.update', $property->id ) : route('properties.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($property))
                            @method('PUT')
                        @endif
                        <div class="row push">
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12 alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-1">Name</label>
                                    <input type="text" class="form-control" id="example-text-input-1" name="name" value="{{ isset($property) ? $property->name : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-2">Street Address</label>
                                    <input type="text" class="form-control" id="example-text-input-2" name="street_address" value="{{ isset($property) ? $property->street_address : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-3">Address2</label>
                                    <input type="text" class="form-control" id="example-text-input-3" name="address2" value="{{ isset($property) ? $property->address2 : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-4">Town</label>
                                    <input type="text" class="form-control" id="example-text-input-4" name="town" value="{{ isset($property) ? $property->town : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-5">Postcode</label>
                                    <input type="text" class="form-control" id="example-text-input-5" name="postcode" value="{{ isset($property) ? $property->postcode : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-5">District</label>
                                    <select class="form-select" id="example-select" name="district_id">
                                        <option value="1">Colombo</option>
                                        <option value="2">Gampaha</option>
                                        <option value="3">Kalutara</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row push">
                            <hr>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </div>
                    </form>
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
