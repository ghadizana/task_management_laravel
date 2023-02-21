@extends('layouts.app')
@section('main')
<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">password</label>
                    <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                    @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                    @enderror                    
                </div>
                <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>
</div>
@endsection