<?php
/**
 * Created by PhpStorm.
 * User: Radioactiveman
 * Date: 21.07.2018
 * Time: 15:46
 */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Add Item
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('items.store')}}" aria-label="Add Item">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Domain (name)</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="domain.com"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="key" class="col-sm-4 col-form-label text-md-right">Assotiative word
                                    (key)</label>
                                <div class="col-md-6">
                                    <input id="key" type="text" placeholder="orange"
                                           class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}" name="key"
                                           value="{{ old('key') }}" required autofocus>

                                    @if ($errors->has('key'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('key') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create my new item
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="{{route('items.index')}}" class="btn btn-secondary mt-3"><i class="fa fa-reply"></i> Back</a>
            </div>
        </div>
    </div>
@endsection
