@extends('admin.admin_layout')
@section('admin_content')

    <h1>Admin Dashboard</h1>

    <form  role="form" action="{{URL::to('/updateArea/')}}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="admin_id" class="form-label">Admin_ID</label>
            <input type="text"class="form-control" name="admin_id" value="{{ $currentAdmin ? $currentAdmin->admin_id : '' }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="{{ $currentAdmin ? $currentAdmin->name : 'Unnamed' }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ $currentAdmin ? $currentAdmin->email : 'Indefinite' }}">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Change password') }}
        </a>
        @endif
        <br>
        <button type="submit" class="btn btn-primary">Update information</button>



        <h1>Create clone account</h1>

                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </a>
    </form>

@endsection