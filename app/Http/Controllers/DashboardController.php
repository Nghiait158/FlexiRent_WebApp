<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Lấy thông tin user đã đăng nhập

        // Kiểm tra vai trò của user
        if ($user->role === 'admin') {
            return redirect()->to('admin/dashboard'); // Trả về view cho admin
        } elseif ($user->role === 'landlord') {
            return redirect()->to('landlord/dashboard'); // Trả về view cho landlord
        } elseif ($user->role === 'guest') {
            return redirect()->to('guest/dashboard'); // Trả về view cho landlord
        }
         else {
            abort(403, 'Unauthorized action.'); // Nếu không phải admin hoặc landlord
        }
    }
}
