@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('AdminbookController@index') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    図書申請
                    <span>{{$book_num}}件</span>
                </button>
            </a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <a href="{!! action('AdmintagController@index') !!}">
                <button type="button" class="btn btn-secondary btn-lg btn-block" style="margin-top:300px">
                    タグ申請
                    <span>{{$tag_num}}件</span>
                </button>
            </a>
        </div>
    </div>
</div>
@endsection
