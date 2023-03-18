<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\DataCaas;
use App\Models\PassCheck;
use App\Models\PassCheckMessage;
use App\Models\Stages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $redirectTo = '/loginAdmin';


    public function login(Request $request)
    {
        $request->validate([
            'ascod' => 'required|min:3|string',
            'password' => 'required|min:8|string'
        ]);
        $credentials = $request->only('ascod', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->intended('adminHome');
        } else {
            return back()->withErrors([
                'message' => 'Ascod / Password salah.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('loginAdmin');
    }

    public function changepass(Request $request)
    {
        $this->validate($request, [
            'password'  => 'required|min:8|string|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',
        ]);
        $admin = Admins::find(Auth::id());
        $admin->update([
            'name' => $admin->name,
            'ascod' => $admin->ascod,
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('admin')->logout();
        return redirect('loginAdmin');
    }
}
