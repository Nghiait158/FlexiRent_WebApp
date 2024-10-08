<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $currentAdmin = Auth::user();
        return view('admin.dashboard')->with('currentAdmin', $currentAdmin);
    }
    public function editAdmin(){
        $currentAdmin = Auth::user();
        return view('admin.dashboard')->with('currentAdmin', $currentAdmin);
    }

    public function updateAdmin(Request $request, $admin_id = null) {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . ($admin_id ? $admin_id : 'NULL'), // Bỏ qua kiểm tra unique cho admin hiện tại
        ]);
    
        // Lấy dữ liệu từ form
        $data = $request->all();
    
        // Nếu admin_id có giá trị, tìm admin
        if ($admin_id) {
            $admin = Admin::find($admin_id);
            if ($admin) {
                // Cập nhật thông tin admin
                $admin->name = $data['name'];
                $admin->save();
                Session::put('message', 'Admin updated successfully');
            } else {
                // Nếu không tìm thấy admin
                Session::put('message', 'Admin not found');
                return redirect()->back();
            }
        } else {
            // Tạo mới admin nếu không có admin_id
            Admin::create([
                'name' => $data['name'],
                'id' => Auth::id(), // Hoặc lấy id của user hiện tại
            ]);
            Session::put('message', 'Admin created successfully');
        }
    
        return redirect()->to('admin/dashboard');
    }
    
}
