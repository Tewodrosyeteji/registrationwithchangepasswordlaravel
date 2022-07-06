@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('change-password') }}</div>
               <form action="{{ route('update-password') }}" method="POST">
                @csrf
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @elseif (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                        <div class="mb-3">
                            <label for="oldpasswordInput" class="form-label">Old password</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldpasswordInput" placeholder="Old password">
                            @error('old_password')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="newpasswordInput" class="form-label">New password</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newpasswordInput" placeholder="New password">
                            @error('new_password')
                               <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="confirmnewpasswordInput" class="form-label">Confirm New password</label>
                            <input name="new_password_confirmation"type="password" class="form-control" id="confirmnewpasswordInput" placeholder="Confirm New password">

                          </div>
                          <div class="card-footer">
                            <button class="btn btn-success">Submit</button>
                          </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
