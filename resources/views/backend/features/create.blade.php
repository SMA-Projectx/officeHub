@extends('layouts.backend')

@section('title')
    {{ isset($feature) ? 'Edit Feature' : 'Add New Feature' }}
@endsection

@section('content')

    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">{{ isset($feature) ? 'Edit Feature' : 'Add New Feature' }}</h3>
                </div>
                <div class="block-content">
                    <form method="POST"  action="{{ isset($feature) ? route('features.update', $feature->id ) : route('features.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($feature))
                            @method('PUT')
                        @endif
                        <div class="row push">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Name</label>
                                    <input type="text" class="form-control" id="example-text-input" name="name" value="{{ isset($feature) ? $feature->name : '' }}" placeholder="Enter here...">
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
