@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-9 offset-2 p-4">
                <div class="card">
                    <div class="card-header">
                        Update Data discount
                        <span class="badge bg-primary">{{ $discount->name }} </span>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.discount.update', $discount->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $discount->id }}">
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control"
                                    {{ $errors->has('name') ? 'is_invalid' : '' }}"
                                    value="{{ old('name') ?: $discount->name }}">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Code</label>
                                <input name="code" type="text" class="form-control"
                                    {{ $errors->has('code') ? 'is_invalid' : '' }}"
                                    value="{{ old('code') ?: $discount->code }}">
                                @if ($errors->has('code'))
                                    <p class="text-danger">{{ $errors->first('code') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Name</label>
                                <input name="description" type="text" class="form-control"
                                    {{ $errors->has('description') ? 'is_invalid' : '' }}"
                                    value="{{ old('description') ?: $discount->description }}">
                                @if ($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Discount Percentage</label>
                                <input type="number" name="precentage" class="form-control"
                                    {{ $errors->has('precentage') ? 'is_invalid' : '' }}"
                                    value="{{ old('precentage') ?: $discount->precentage }}" min="1" max="100">
                                @if ($errors->has('precentage'))
                                    <p class="text-danger">{{ $errors->first('precentage') }}</p>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
