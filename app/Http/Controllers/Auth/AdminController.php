<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Models\DataCaas;
use App\Models\PassCheck;
use App\Models\PassCheckMessage;
use App\Models\Stages;
use App\Models\StatusStages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    protected $redirectTo = '/loginAdmin';


    public function login(Request $request)
    {
        $request->validate([
            'nim' => 'required|min:10|string',
            'password' => 'required|min:8|string'
        ]);
        $credentials = $request->only('nim', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('adminHome');
        } else {
            return back()->withErrors([
                'message' => 'NIM / Password salah.',
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


    public function home()
    {
        $id = Auth::id(); //id admin
        $admin = Admins::find($id);
        $message = PassCheckMessage::find(1);
        $announcement = PassCheck::find(1);
        $stagesname = Stages::select('stagesname')->get();
        $stagesactive = StatusStages::find(1);
        return view('adminHome', compact('admin', 'message', 'announcement', 'stagesname', 'stagesactive'));
    }
}
