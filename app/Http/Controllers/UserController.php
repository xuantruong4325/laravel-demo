<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Mail;
use App\Mail\MailPass;
use Illuminate\Support\Str;
use Carbon\Carbon; 

class UserController extends Controller
{
    public function register(){
        return view('from');
    }
    public function fromSumbit(Request $request){
        $email = $request->input('Email');

        $existingemail = User::where('Email', $email)->first();

    if ($existingemail) {
        return redirect()->back()->withErrors(['Email' => 'Tên email đã tồn tại']);
    }

        $user = new User();
        $user->Name = $request->Name;
        $user->Email = $request->Email;
        $user->Password = bcrypt($request->Password);
        $user->save();
        return redirect()->route(route:'dkn');
    }
    public function Login(){
        return view('login');
    }
    public function fromLogin(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (User::where('email', $credentials['email'])->first()->user_type === 'user') {
                return redirect()->route(route:'index');
            }else {
                return redirect()->route(route:'Admin');
            }
        }else {
            return redirect()->back()->withErrors(['email'=>'Tài khoản hoặc mật khẩu không chính xác']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }

    public function index()
    {
        $users=User::query();
        // $user = DB::table('users')->get();
        // return view('shows',['users' => $user]);
        // $users = User::all();
        // dd(Auth::User()->role === 'user');
        if(Auth::User()->user_type === 'user'){
            $users=$users->where('user_type','=','user');
        }
        $users = $users->get();
        return view('shows', ['users' => $users])   ;
    }
    public function Update($id){
    $user = User::find($id);
    return view('update', compact('user'));
    }

    public function fromUpdate(Request $request, $id)
    {
        $email = $request->input('Email');
        $existingEmail = User::where('Email', $email)->where('id', '!=', $id)->first();

        if ($existingEmail) {
            return redirect()->back()->withErrors(['Email' => 'Tên email đã tồn tại']);
        }

        $user = User::find($id);
        $user->Name = $request->input('Name');
        $user->Email = $request->input('Email');
        $user->Password = bcrypt($request->input('Password'));
        $user->save();
    }
    public function Admin(){
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
    public function delete($id){
        $user = User::where('id', '=', $id)->delete();
    }
    public function store( Request $request){
        // $email = $request->input('email');

        // $existingemail = User::where('email', $email)->first();

        // if ($existingemail) {
            // dd($request);
            $user = User::create([
                'name' => $request->name,
                'user_type' => $request->user_type,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
           
        // }
        // return redirect()->back()->withErrors(['Email' => 'Tên email đã tồn tại']);
    }
    // public function search(Request $request)
    // {
    //     $keyword = $request->input('keyword');

    //     $users = User::where('name', 'like', '%' . $keyword . '%')->get();

    //     return view('search', ['users' => $users]);
    //     $keyword = $request->input('keyword');

    // $users = User::where('name', 'like', '%' . $keyword . '%')
    //             ->orWhere('email', 'like', '%' . $keyword . '%')
    //             ->orWhere('user_type', 'like', '%' . $keyword . '%')
    //             ->get();

    // return response()->json($users);
    // }
    public function Reset(){
        return view('reset');
    }
    public function fromReset(Request $request){
        $email = $request->input('email');

        $existingemail = User::where('email', $email)->first();

    if ($existingemail) {
        $newPassword = Str::random(8);

        $existingemail->password = bcrypt($newPassword);
        $existingemail->save();
        $mailData = [
            'title' => 'Lấy lại mật khẩu',
            'body' => 'Bạn đang yêu cầu lấy lại mật khẩu qua email:',
            'email' => $request->email,
            'new_password' => $newPassword
        ];

        Mail::to($request->email)->send(new MailPass($mailData));
        return redirect()->back()->withErrors(['Email'=>'Gửi thành công']);
    }
        return redirect()->back()->withErrors(['Email' => 'Tài khoản không tồn tại']);
    }

}
