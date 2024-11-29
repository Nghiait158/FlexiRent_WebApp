@extends('admin.admin_layout')
@section('admin_content')

    <h1>Admin Dashboard</h1>
    <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
    ?>
    <form role="form" action="{{ URL::to('/updatecurrentAdmin/' . ($currentAdmin ? $currentAdmin->admin_id : '')) }}" method="post">
        {{ csrf_field() }}
        
        <div class="mb-3">
            <label for="admin_id" class="form-label">Admin ID</label>
            <input type="text" class="form-control" name="admin_id" value="{{ $currentAdmin ? $currentAdmin->admin_id : '' }}" readonly>
        </div>
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $currentAdmin ? $currentAdmin->name : 'Unnamed' }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $currentAdmin->user->email }}" required>
        </div>
        
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Change password') }}
            </a>
        @endif
        
        <br>
        <button type="submit" class="btn btn-primary">Update Information</button>
        <br>
        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register Clone Account
        </a>
    </form>


    <div class="container">
        <h1>List of undefined properties</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Property Name</th>
                    <th>Location</th>
                    <th>Price per month</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr>
                        <td>{{ $property->property_id }}</td>
                        <td>{{ $property->property_name }}</td>
                        <td>{{ $property->location }}</td>
                        <td>{{ number_format($property->price_per_month) }}</td>
                        <td>
                            <form action="{{ route('admin.properties.verify', $property->property_id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Confirm</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
