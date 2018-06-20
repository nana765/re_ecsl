@extends('layouts.main')

@section('title', 'ECSL 図書登録')
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@section('content')

<div class="container pt-50">
  {!! Form::open(['url' => 'register/book']) !!}
  <!--バリデーションエラー表示-->
  @if (count($errors) > 0)
  <!-- フォームのエラーリスト -->
  <div class="alert alert-danger">
    <strong>入力情報に間違いがあるようです</strong>
    <br>
  </div>
  @endif
  <div class="form-group @if($errors->first('name'))has-error @endif">
    <label for="exampleInputEmail1">書籍名</label>
    @if(old('confirming', 'false') === 'false')
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    @else
    <p class="form-control-static">{{ old('name') }}</p>
    <input type="hidden" name="name" value="{{ old('name') }}">
    @endif
    <span class="text-danger">{{$errors->first('name')}}</span>
  </div>
  <div class="form-group @if($errors->first('place'))has-error @endif">
    <label for="place">配置場所</label>
    @if(old('confirming', 'false') === 'false')
    <input type="text" class="form-control" name="place" value="{{ old('place') }}">
    @else
    <p class="form-control-static">{{ old('place') }}</p>
    <input type="hidden" name="place" value="{{ old('place') }}">
    @endif
    <span class="text-danger">{{$errors->first('place')}}</span>
  </div>
  <div class="form-group @if($errors->first('symbol'))has-error @endif">
    <label for="symbol">請求記号</label>
    @if(old('confirming', 'false') === 'false')
    <input type="text" class="form-control" name="symbol" value="{{ old('symbol') }}">
    @else
    <p class="form-control-static">{{ old('symbol') }}</p>
    <input type="hidden" name="symbol" value="{{ old('symbol') }}">
    @endif
    <span class="text-danger">{{$errors->first('symbol')}}</span>
  </div>
  <div class="form-group @if($errors->first('isbn'))has-error @endif">
    <label for="isbn">ISBNコード</label>
    @if(old('confirming', 'false') === 'false')
    <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}">
    @else
    <p class="form-control-static">{{ old('isbn') }}</p>
    <input type="hidden" name="isbn" value="{{ old('name') }}">
    @endif
    <span class="text-danger">{{$errors->first('isbn')}}</span>
  </div>
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" class="form-control" id="isbn">
  </div>
  <div class="form-group">
    <label>tag1</label>
    <select class="selectpicker form-control" name="tag1">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>tag2</label>
    <select class="selectpicker form-control" name="tag2">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>tag3</label>
    <select class="selectpicker form-control" name="tag3">
      <option value="0">タグを登録しない</option>
      @foreach ($tags as $tag)
      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="mt-20 btn btn-primary">申請</button>
</div>

@endsection
