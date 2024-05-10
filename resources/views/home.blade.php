@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    <a href="{{Route('show')}}">عرض قائمة الكتب والملخصات والدورات</a><br><br>
                    <a href="{{Route('showCategory')}}">عرض التصنيفات الرئيسية </a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
