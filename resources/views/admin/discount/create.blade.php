@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9 offset-2 p-4">
                <div class="card">
                    <div class="card-header">
                        Insert a new discount
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control"
                                    {{ $errors->has('name') ? 'is_invalid' : '' }}" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Code</label>
                                <input name="code" type="text" class="form-control"
                                    {{ $errors->has('code') ? 'is_invalid' : '' }}"> {{ old('code') }} @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Description</label>
                                <textarea name="description" cols="0" rows="2" class="form-control"
                                    {{ $errors->has('description') ? 'is_invalid' : '' }}"
                                    value="{{ old('description') }}"></textarea>
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Discount Percentage</label>
                                <input type="number" name="precentage" class="form-control"
                                    {{ $errors->has('precentage') ? 'is_invalid' : '' }}"
                                    value="{{ old('precentage') }}" min="1" max="100">
                                @if ($errors->has('precentage'))
                                    <p class="text-danger">{{ $errors->first('precentage') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
