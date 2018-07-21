<?php
/**
 * Created by PhpStorm.
 * User: Radioactiveman
 * Date: 21.07.2018
 * Time: 15:45
 */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="mb-3">All Items</h2>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($items as $item)
                                <div class="col-sm-4 col-xs-6">
                                    <div class="card card-block mb-4">
                                        <div class="card-body">
                                            <h4 class="card-title">Item {{ $item->id }}</h4>
                                            <p class="card-text">
                                                <a href="http://www.{{ $item->name }}">{{ $item->name }}</a>
                                            </p>
                                            <a  href="{{route('items.show', $item->id)}}" class="btn btn-success">Show key</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
