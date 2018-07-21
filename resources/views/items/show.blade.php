<?php
/**
 * Created by PhpStorm.
 * User: Radioactiveman
 * Date: 21.07.2018
 * Time: 15:47
 */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="mb-3">Show item {{$item->id}}</h2>
                    </div>

                    <div class="panel-body">
                        <div class="card card-block mb-4">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="http://www.{{ $item->name }}">{{ $item->name }}</a>
                                </h4>
                                <p class="card-text">
                                    Key is: {{$item->key}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection