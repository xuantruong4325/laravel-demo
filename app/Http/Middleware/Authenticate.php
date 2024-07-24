<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // if($request->expectsJson() != null){
        //     return route('Login');
        // }else{
        //     return route('error');
        // }
        return route('Login');
        // if ($request->expectsJson()) {
        //     return response()->json(['message' => 'Bạn vui lòng đăng nhập.'], 401);
        // } else {
        //     // Thêm thông báo trước khi chuyển hướng
        //     session()->flash('message', 'Bạn vui lòng đăng nhập.');
    
        //     // Chuyển hướng đến route Login hoặc error
        //     return $request->has('some_condition') ? redirect()->route('Login') : redirect()->route('error');
        // }
        // return $request->expectsJson() ? null : route('error');
    }
}
