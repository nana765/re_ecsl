@extends('layouts.main')

@section('title', 'ECSL タグ登録')
<style>

.pt-50{
    padding-top:50px;
}
.pt-20{
    padding-top:20px;
}
.mt-20{
    margin-top:20px;
}
</style>

@section('content')

<div class="container pt-50">
  {!! Form::open(['url' => 'register/tag']) !!}
  <!--バリデーションエラー表示-->
  @if (count($errors) > 0)
  <!-- フォームのエラーリスト -->
  <div class="alert alert-danger">
    <strong>すでに登録されています</strong>
    <br>
  </div>
  @endif

  <div class="form-group">
    <label for="tag">タグ名</label>
    <input type="text" name="tag" class="form-control" id="tag">
    <span class="text-danger">{{$errors->first('tag')}}</span>
  </div>
  <button type="submit" class="mt-20 btn btn-primary">申請</button>
</div>

@endsection
