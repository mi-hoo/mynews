{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'MYプロフィール'を埋め込む --}}
@section('title', 'MYプロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>MYプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create')}}"method="post">
                    @csrf
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                        <div class="form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" value="male" checked="{{old('gender') =="male" ? 'checked':''}}" >
                         <label class="form-check-label" for="radio1">男性</label>
                        </div>
                        <div class="form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" value="female" checked="{{old('gender') =="female" ? 'checked':''}}">
                         <label class="form-check-label" for="radio2">女性</label>
                        </div>
                        </div>
　　　　　　　　　　</div>
                    <div class="form-group row">
                         <label class="col-md-2">趣味</label>
                         <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{old('hobby')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection