@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('BookController@register') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    図書申請
                </button>
            </a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('TagController@register') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    タグ申請
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
