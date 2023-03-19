<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\CaasController;
use App\Http\Controllers\ShiftController;
use App\Models\Admins;
use App\Models\DataCaas;
use App\Models\AssistantContact;
use App\Models\PassCheck;
use App\Models\PassCheckMessage;
use App\Models\Plots;
use App\Models\Shifts;
use App\Models\Stages;
use App\Models\Statuses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// welcome page
Route::get('/', function () {
    return view('main');
})->name('main')->middleware('guest:datacaas', 'guest:admin');

// failed page
Route::fallback(function () {
    return redirect('/');
});

Route::get('/loginCaas', function () {
    return view('loginCaas');
})->name('loginCaas')->middleware('guest:admin','guest:datacaas');

Route::get('/dashboard', [CaasController::class, 'home'])->name('dashboard')->middleware('auth:datacaas');

Route::get('/changepass', function(){
    $title = 'Change Password';
    return view('changepass',[ 'title' => $title]);
})->name('changepass')->middleware('auth:datacaas');

Route::post('/submitnewpass', [CaasController::class, 'changepass'])->name('submitnewpass')->middleware('auth:datacaas');

Route::post('/loginCaas', [CaasController::class, 'login'])->name('loginCaas');

Route::get('/logoutCaas', [CaasController::class,'logout'])->name('logoutCaas');



//STATUSES
Route::get('/ceklulus', function () {
    $id = Auth::id();
    $title = "Cek Lulus";
    $statusid = Stages::get();
    $passcheck = PassCheck::find(1);
    $message = PassCheckMessage::find(1);
    $datacaas = DataCaas::where('datacaas.id', $id)
        ->leftjoin('statuses', 'datacaas.id', '=', 'statuses.datacaas_id')
        ->leftjoin('stages', 'stages.id', '=', 'statuses.stages_id')
        ->orderBy('statuses.stages_id', 'desc')->first();
    $statustahap = Stages::where('statusActive', 1)->first();
    $plotactive = DataCaas::where('datacaas.id', $id)
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->first();
    return view('cekLulus', [
        'name' => $datacaas->name,
        'isPass' => $datacaas->isPass,
        'nim' => $datacaas->nim,
        'statusstages' => $statustahap->statusActive,
        'stagesname' => $statustahap->stagesname,
        'Active' => $passcheck->isActiveCheck,
        'isPlotRun' => $passcheck->isPlotRun,
        'pass' => $message->pass,
        'failed' => $message->failed,
        'link' => $message->link,
        'isPlotActive' => $plotactive->isPlotActive,
        'title' => $title,
    ]);
})->name('ceklulus', )->middleware('auth:datacaas');

Route::post('/setStatus', function(Request $request){
    Stages::where('statusActive', 1)->update([
        'statusActive'=>0
    ]);
    Stages::where('id', $request->id)->update([
        'statusActive'=>1
    ]);
    PassCheck::where('id', 1)->update([
        'id' => 1,
        'isActiveCheck' => $request->isActiveCheck,
        'isPlotRun' => $request->isPlotRun,
    ]);
    Statuses::where('isPass', 1)->update([
        'stages_id'=>$request->id
    ]);
    return redirect('adminHome');
})->name('setStatus')->middleware('auth:admin');

// ADMIN
Route::get('/loginAdmin', function () {
    return view('loginAdmin');
})->name('loginAdmin')->middleware('guest:admin', 'guest:datacaas');

Route::get('/adminHome', function () {
    $id = Auth::id();
    $admin = Admins::find($id);
    $datacaas = DataCaas::get();
    $stages = Stages::where('statusActive', '=', '1')->first();
    $stagesAll = Stages::all();
    $announcement = passcheck::find(1);
    return view('dashboardAdmin', ['stagesAll'=>$stagesAll, 'datacaas' => $datacaas, 'stages' => $stages, 'admin'=>$admin, 'announcement'=>$announcement]);
})->name('dashboardAdmin')->middleware('auth:admin');
Route::post('/PassAdmin', [AdminController::class, 'changepass'])->name('changepass')->middleware('auth:admin');
Route::post('/loginAdminPost', [AdminController::class, 'login'])->name('loginAdminPost');
Route::get('/logoutAdmin', [AdminController::class, 'logout'])->name('logoutAdmin');


// SHIFT
Route::get('/ListShift', function () {
    $shift = Shifts::orderBy('day', 'asc')->orderBy('time_start', 'asc')->paginate(10);
    $countshift = Shifts::count();
    $stagesname = Stages::pluck('stagesname');
    $passcheck = PassCheck::find(1);
    $totalquota = Shifts::sum('quota');
    \Carbon\Carbon::setLocale('id');
    return view('shiftAdmin', ['shift' => $shift, 'countshift' => $countshift, 'stagesname' => $stagesname, 'passcheck' => $passcheck, 'totalquota' => $totalquota]);
})->name('ListShift')->middleware('auth:admin');
Route::post('/addShift', function (Request $request) {
    Shifts::create([
        'shiftname' => $request->shiftname,
        'day' => $request->day,
        'time_start' => $request->time_start,
        'time_end' => $request->time_end,
        'quota' => $request->quota,
    ]);
    return redirect('ListShift');
})->name('addShift')->middleware('auth:admin');

Route::get('/EditShift/{id}', function ($id) {
    $shift = Shifts::find($id);
    $passcheck = PassCheck::find(1);
    if (!$shift || $passcheck->isPlotRun == 1) {
        return redirect('ListShift');
    }
    return view('editShift', [
        'id' => $shift->id,
        'shiftname' => $shift->shiftname,
        'day' => $shift->day,
        'time_start' => $shift->time_start,
        'time_end' => $shift->time_end,
        'quota' => $shift->quota,
    ]);
})->name('EditShift')->middleware('auth:admin');

Route::post('/UpdateShift/{id}', function (Request $request, $id) {
    $passcheck = PassCheck::find(1);
    if (!$passcheck || $passcheck->isPlotRun == 1) {
        return redirect('ListShift');
    }
    Shifts::where('id', $id)->update([
        'shiftname' => $request->shiftname,
        'day' => $request->day,
        'time_start' => $request->time_start,
        'time_end' => $request->time_end,
        'quota' => $request->quota,
    ]);
    return redirect('ListShift');
})->name('UpdateShift')->middleware('auth:admin');

Route::post('/deleteShift/{id}', function ($id) {
    $passcheck = PassCheck::where('id', 1)->first();
    if ($passcheck->isPlotRun == 0) {
        $shift = Shifts::where('id', $id)->delete();
        return redirect('ListShift');
    } else return redirect('ListShift');
})->name('deleteShift')->middleware('auth:admin');

Route::post('/deleteShiftconfirm', function (Request $request) {
    $shift = Shifts::where('id', $request->id)->first();
    $passcheck = PassCheck::where('id', 1)->first();
    if ($passcheck->isPlotRun == 0)
        return view('delshift', [
            'id' => $shift->id,
            'shiftname' => $shift->shiftname,
            'day' => $shift->day,
            'time_start' => $shift->time_start,
            'time_end' => $shift->time_end,
            'quota' => $shift->quota,
        ]);
    else return redirect('ListShift');
})->name('deleteShiftconfrim')->middleware('auth:admin');

Route::post('/deleteAllShift', function () {
    $shift = Shifts::whereNotNull('id')->delete();
    $plot = Plots::whereNotNull('id')->delete();
    return redirect('/ListShift');
})->name('deleteAllShift')->middleware('auth:admin');


Route::get('/caasAccount', function(){
    $datacaas = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
				->leftjoin('stages','stages.id','=','statuses.stages_id')
                ->orderBy('statuses.isPass', 'desc')
				->orderBy('datacaas.nim', 'asc')->paginate(20);
	$stagesname = Stages::where('statusActive',1)->first();
	$countcaas = Datacaas::count();
	$countcaaslolos = Datacaas::leftjoin('statuses','datacaas.id','=','statuses.datacaas_id')
				->leftjoin('stages','stages.id','=','statuses.stages_id')
				->where('statuses.isPass',1)->count();
	$countcaasnotlolos = $countcaas-$countcaaslolos;
	return view('datacaasAdmin',compact('datacaas','stagesname','countcaas','countcaaslolos','countcaasnotlolos')); // disesuaikan sama nama bladenya

})->name('caasAccount')->middleware('auth:admin');

Route::post('/findCaasAccount', [CaasController::class, 'cari'])->name('findCaasAccount')->middleware('auth:admin');

// //PLOT
Route::get('/resultPlot', function () {
    $shift = Shifts::orderBy('day', 'asc')->orderBy('time_start', 'asc')->paginate(10);
    $countshift = Shifts::count();
    $stagesname = Stages::all();
    $passcheck = PassCheck::where('id', 1)->first();
    $datacaas = DataCaas::all();
    \Carbon\Carbon::setLocale('id');
    $plot = Plots::leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
        ->leftjoin('datacaas', 'datacaas.id', '=', 'plots.datacaas_id')->get();
    return view('resultplot', ['shift' => $shift, 'stagesname' => $stagesname, 'passcheck' => $passcheck, 'countshift' => $countshift, 'caas' => $datacaas, 'plot' => $plot]);
})->name('resultPlot')->middleware('auth:admin');

Route::get('/listplot', function () {
    $title = "Pilih Jadwal";
    $id = Auth::id();
    $shift = Shifts::orderBy('day', 'asc')->orderBy('time_start', 'asc')->paginate(10);
    $datacaas = DataCaas::where('datacaas.id', $id)
        ->leftjoin('statuses', 'datacaas.id', '=', 'statuses.datacaas_id')
        ->leftjoin('stages', 'stages.id', '=', 'statuses.stages_id')->first();
    $plots = Datacaas::where('datacaas.id', $id)
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
        ->first();
    $plotactive = Datacaas::where('datacaas.id', $id)
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->select('plots.isPlotActive')->first();
    $quotaremain = Datacaas::where('plots.shifts_id', 'shift.id')
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
        ->get()->count();
    $statusstages = Stages::where('statusActive', 1)->first();
    $passcheck = PassCheck::where('id', 1)->first();
    \Carbon\Carbon::setLocale('id');
    if ($datacaas->isPass == 1 && $datacaas->statusActive == 1 && $passcheck->isPlotRun == 1 && $plotactive->isPlotActive == NULL) {
        return view('pilihJadwal', compact('title','shift', 'datacaas', 'plotactive', 'quotaremain', 'plots'));
    } else if($datacaas->isPass == 1 && $datacaas->statusActive == 1 && $passcheck->isPlotRun == 1 && $plotactive->isPlotActive == 1){
        return redirect('/finalPlot');
    }else return redirect('dashboard');
})->name('listplot')->middleware('auth:datacaas');


Route::post('/fixtakePlot/{id}', function ($id) {
    $shift = Shifts::find($id);
    $caasid = Auth::id();
    $datacaas = DataCaas::where('datacaas.id', $caasid)
    ->leftjoin('statuses', 'datacaas.id', '=', 'statuses.datacaas_id')
    ->leftjoin('stages', 'stages.id', '=', 'statuses.stages_id')->first();
    $plots = DataCaas::where('datacaas.id', $caasid)
    ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
    ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
    ->first();
    $plotactive = DataCaas::where('datacaas.id', $caasid)
    ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
    ->select('plots.isPlotActive')->first();
    $quotaremain = DataCaas::where('plots.shifts_id', $shift->id)
    ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
    ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
    ->get()->count();
    $statusstages = Stages::where('statusActive', 1)->first();
    $limit = $shift->quota - 1;
    $passcheck = PassCheck::where('id', 1)->first();
    if ($datacaas->isPass == 1 && $plotactive->isPlotActive == NULL && $limit > 0 && $passcheck->isPlotRun == 1 && $statusstages->statusActive == $datacaas->statusActive) {
        Plots::create([
            'isPlotActive' => 1,
            'datacaas_id' => $caasid,
            'shifts_id' => $shift->id,
        ]);
        $shift->update([
            'quota' => $limit
        ]);
        return redirect('finalPlot');
    } elseif ($datacaas->isPass == 0 && $statusstages->statusActive == $datacaas->statusActive && $plotactive->isPlotActive == NULL && $datacaas->statusActive == 1 && $limit > 0) {
        Plots::create([
            'isPlotActive' => 1,
            'datacaas_id' => $caasid,
            'shifts_id' => $shift->id,
        ]);
        return redirect('finalPlot');
    } else return redirect('listplot');
})->name('fixtakePlot')->middleware('auth:datacaas');

Route::get('/finalPlot', function () {
    $id = Auth::id();
    $title = "Jadwal Kamu";
    $datacaas = DataCaas::where('datacaas.id', $id)
        ->leftjoin('statuses', 'datacaas.id', '=', 'statuses.datacaas_id')
        ->leftjoin('stages', 'stages.id', '=', 'statuses.stages_id')->first();
    $plots = DataCaas::where('datacaas.id', $id)
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
        ->first();
    $plotactive = DataCaas::where('datacaas.id', $id)
        ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
        ->select('plots.isPlotActive')->first();
    $statusstages = Stages::where('statusActive', 1)->first();
    $passcheck = PassCheck::where('id', 1)->first();
    \Carbon\Carbon::setLocale('id');
    if ($datacaas->isPass == 1 && $statusstages->statusActive == $datacaas->statusActive && $passcheck->isPlotRun == 1) {
        return view('FinalPlot', compact( 'datacaas', 'plotactive', 'plots', 'statusstages', 'title'));
    } else return redirect('dashboard');
})->name('finalPlot')->middleware('auth:datacaas');

Route::post('/resetPlot', function () {
    Plots::truncate();
    return redirect('ListShift');
})->name('resetPlot')->middleware('auth:admin');

Route::post('takeplot/{id}', [PlotController::class, 'takePlot'])->name('takePlot')->middleware('auth:datacaas');

//Add Caas
// Route::post('/AddStatus', function (){
//     $caas_id = DataCaas::latest()->first();
//     $stages = Stages::get();

//     Statuses::create([
//         'datacaas_id'=>$caas_id->id,
//         'stages_id'=>$stages->id,
//         'isPass'=>$request->isPass,
//     ]);
//     return redirect('caasAccount');

// })->name('AddStatus')->middleware('auth:admin');
Route::post('/AddCaas', [CaasController::class,'add'])->name('Addcaas')->middleware('auth:admin');
Route::get('/EditCaasAccount/{datacaas_id}', [CaasController::class,'edit'])->name('EditCaasAccount')->middleware('auth:admin');
Route::post('/UpdateCaasAccount/{datacaas_id}', [CaasController::class,'update'])->name('UpdateCaasAccount')->middleware('auth:admin');
Route::get('/CariNIM', [CaasController::class,'cari'])->name('cari')->middleware('auth:admin');
Route::get('/delcaasconfirm/{datacaas_id}', [CaasController::class,'delconfirm'])->name('delconfirm')->middleware('auth:admin');
Route::post('/delcaas/{datacaas_id}', [CaasController::class,'del'])->name('delcaas')->middleware('auth:admin');

//CONTACT ASISTEN
Route::get('/assistantContact', function(){
    $assistant = AssistantContact::orderBy('ascod', 'asc')->paginate(1);
    $title = "Asisstant Contact";
    return view('theAsistant', ['title'=> $title, 'asisstant' => $assistant]);
})->name('assistantContact')->middleware('auth:datacaas');
