@extends('layouts.backend')

@section('title')
    {{ isset($room) ? 'Edit Room' : 'Add New Room' }}
@endsection

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ isset($room) ? 'Edit Room' : 'Add New Room' }}</h3>
                </div>
                <div class="block-content">
                    <form method="POST"  action="{{ isset($room) ? route('rooms.update', $room->id ) : route('rooms.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($room))
                            @method('PUT')
                        @endif
                        <div class="row push">
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="col-md-12 alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-1">Name</label>
                                    <input type="text" class="form-control" id="example-text-input-1" name="name" value="{{ isset($room) ? $room->name : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-5">Property</label>
                                    <select class="form-select" id="example-select" name="property_id">
                                        @foreach($properties as $property)
                                            <option value="{{ $property->id }}" {{ (isset($room) && $room->property_id == $property->id ) ? 'selected' : '' }} >{{ $property->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-2">Price</label>
                                    <input type="text" class="form-control" id="example-text-input-2" name="price" value="{{ isset($room) ? $room->price : '' }}" placeholder="Enter here...">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input-3">Description</label>
                                    <textarea class="form-control form-control-alt" id="example-textarea-input-alt" name="description" rows="7" placeholder="Description..">{{ isset($room) ? $room->description : '' }}</textarea>
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
