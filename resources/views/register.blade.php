@extends('layouts.main')
@section('title', 'ECSL - 登録')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('BookController@register') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    図書登録
                </button>
            </a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('TagController@register') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    タグ登録
                </button>
            </a>
        </div>
    </div>
@endsection