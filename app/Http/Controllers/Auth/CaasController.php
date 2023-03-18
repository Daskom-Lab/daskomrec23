<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\DataCaas;
use App\Models\Stages;
use App\Models\Statuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CaasController extends Controller
{
    protected $redirectTo = '/loginCaas';

    public function login(Request $request){
        $this->validate($request, [
            'nim'      => 'required|min:10|string',
			'password'  => 'required|min:8|string'
        ]);

        if(Auth::guard('datacaas')->attempt([
            'nim' => $request->nim,
            'password' => $request->password
            ], true)){
                return redirect('dashboard'); // disesuaikan sama nama route
            }
            return redirect()->back()->with(['error' => 'NIM / Password Salah']); // disesuaikan sama nama routenye
    }

    public function logout(){
        Auth::guard('datacaas')->logout();
        return redirect('loginCaas'); // disesuaikan sama nama routnya
    }

    public function home(){
        $id = Auth::id();
        $title = 'Dashboard';
        $datacaas = DataCaas::where('id', $id)->first();
        $photo = $datacaas->photo;

        return view('dashboard', ['datacaas' => $datacaas, 'title' => $title, 'photo'=>$photo]); // disesuaikan sama nama bladenya
    }

    public function caasAccount() {
        $caas = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
					->leftjoin('stages','stages.id','=','statuses.stages_id')
					->orderBy('datacaas.nim', 'asc')->paginate(20);
        $caas_id = DataCaas::all()->select('id');
		$stagesname = Stages::select('stagesname')->first();
		$countcaas = Datacaas::count();
		$countcaaslolos = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
					->leftjoin('stages','stages.id','=','statuses.stages_id')
					->where('statuses.isPass',1)->count();
		$countcaasnotlolos = $countcaas-$countcaaslolos;
		return view('CaasAccount',compact('caas','caas_id','stagesname','countcaas','countcaaslolos','countcaasnotlolos')); // disesuaikan sama nama bladenya
    }
    public function changepass(Request $request)
    {
    $this->validate($request, [
        'password'  => 'required|min:8|string',
            'confirmpassword'  => 'required|same:password',
    ]);

    $datacaas = DataCaas::where('id', Auth::id())->first();
    $datacaas->update([
        'password' => Hash::make($request->password),
    ]);
    Auth::guard('datacaas')->logout();
    $title = 'Change Password';
    // return redirect('loginCaas', ['title'=>$title]);
    return redirect()->route('loginCaas')->with('title', $title);
    }

    public function add(Request $request){
        $rules = [
            'nim' => 'required|unique:datacaas|min:10',
        ];

        $this->validate($request, $rules);

        $caas = DataCaas::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'email' => $request->email,
            'password' => Hash::make($request->nim.='2023'),
            'major' => $request->major,
            'class' => $request->class
        ]);

        $stages = Stages::findOrFail($request->stages_id);

        Statuses::create([
            'datacaas_id'=>$caas->id,
            'stages_id'=>$stages->id,
            'isPass'=>$request->isPass,
        ]);

        return redirect('caasAccount');
    }

    public function edit($datacaas_id){
        $caas = DataCaas::where('datacaas.id', $datacaas_id)
                ->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
                ->leftjoin('stages','stages.id','=','statuses.stages_id')
                ->orderBy('statuses.stages_id', 'desc')->first();
        $stages = Stages::get();
        $countcaas = Datacaas::count();
        $countcaaslolos = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
                    ->leftjoin('stages','stages.id','=','statuses.stages_id')
                    ->where('statuses.isPass',1)->count();
        $countcaasnotlolos = $countcaas-$countcaaslolos;
        return view('editCaas',[
            'datacaas'=>$caas,
            'datacaas_id'=>$caas->datacaas_id,
            'name'=>$caas->name,
            'isPass'=>$caas->isPass,
            'stages_id'=>$caas->id, // merujuk ke stages.id
            'nim'=>$caas->nim,
            'email'=>$caas->email,
            'stagesname'=>$caas->stagesname,
            'countcaas' => $countcaas,
            'countcaaslolos' => $countcaaslolos,
            'countcaasnotlolos' => $countcaasnotlolos
        ]);
    }

    public function update($datacaas_id,Request $request){
    $a = Datacaas::find($datacaas_id);
    $caas = Datacaas::where('datacaas.id',$datacaas_id)
                    ->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
                    ->leftjoin('stages','stages.id','=','statuses.stages_id')
                    ->update([
                        'name'=>$request->name,
                        'nim'=>$request->nim,
                        'email'=>$request->email,
                        'password'=>$a->password,
                        'datacaas.id'=>$datacaas_id,
                        'isPass'=>$request->isPass,
                        'stages_id'=>$request->stages_id,
                    ]);
    return redirect('caasAccount');
    }

    public function cari(Request $request){
    $find = $request->find;
    $datacaas = Datacaas::where('nim','like',$find."%")
        ->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
        ->leftjoin('stages','stages.id','=','statuses.stages_id')
        ->first();
    $countcaas = Datacaas::count();
    $countcaaslolos = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
                ->leftjoin('stages','stages.id','=','statuses.stages_id')
                ->where('statuses.isPass',1)->count();
    $countcaasnotlolos = $countcaas-$countcaaslolos;
    return view('findDataCaas',compact('datacaas','countcaas','countcaaslolos','countcaasnotlolos'));
 }

    public function del($datacaas_id){
  $caas = Datacaas::find($datacaas_id);
  $caas -> delete();
  return redirect('caasAccount');
 }

    public function delconfirm($datacaas_id){
  $caas = Datacaas::where('datacaas.id', $datacaas_id)
                ->leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
                ->leftjoin('stages','stages.id','=','statuses.stages_id')
                ->orderBy('statuses.stages_id', 'desc')->first();
  $stages = Stages::where('statusActive', 1)->first();
  return view('delcaas',[
    'datacaas' => $caas,
   'datacaas_id'=>$caas->datacaas_id,
   'name'=>$caas->name,
   'isPass'=>$caas->isPass,
   'nim'=>$caas->nim,
   'email'=>$caas->email,
   'stages'=>$stages,
   'stagesname'=>$caas->stagesname,
   ]);
 }


}
