<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function manage_admin(){  //hiển thị danh sách các job 
        $Alladmins = Admin::with('user')->get();

        // Trả về view với danh sách admin
        return view('admin.manage_admin', compact('Alladmins'));
    }
    public function currentAdmin(){
        $currentUser = Auth::user();
        // Kiểm tra xem user hiện tại có admin không
        $currentAdmin = Admin::where('id', $currentUser->id)->first();
        // Nếu không tìm thấy admin
        if (!$currentAdmin) {
            return redirect()->back()->with('error', 'No admin data found for this user.');
        }
        // dd($currentUser);
        // Trả về view và truyền dữ liệu admin vào
        return view('admin.dashboard', compact('currentAdmin'));
    }
    public function editAdmin($areaID){
        // $editPosts= DB::table('posts')->where('postID',$postID)->get();
        // $editArea=Area::find($areaID);
        // $allArea= view('admin.editArea')->with('editArea', $editArea);
        // return view('admin.admin_layout')->with('admin.editArea',$allArea);
    }
    public function updatecurrentAdmin(Request $request, $admin_id) {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $admin_id, // Bỏ qua email cho admin hiện tại
        ]);

        // Tìm admin dựa trên admin_id
        $admin = Admin::find($admin_id);
        
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->save();
            $user = $admin->user;
            if ($user) {
                $user->email = $request->input('email');
                $user->save();
            }

            // Đặt thông báo thành công
            Session::put('message', 'Admin updated successfully.');
        } else {
            // Đặt thông báo lỗi nếu không tìm thấy admin
            Session::put('message', 'Admin not found.');
            return redirect()->back();
        }

        // Điều hướng trở lại dashboard
        return redirect()->to('admin/dashboard');
    }
    
}
