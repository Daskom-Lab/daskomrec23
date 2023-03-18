<?php

namespace App\Http\Controllers;

use App\Models\DataCaas;
use App\Models\PassCheck;
use App\Models\Plots;
use App\Models\Shifts;
use App\Models\Stages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlotController extends Controller
{
    public function takePlot($id)
    {
        $shift = Shifts::find($id);
        $caasid = Auth::id();
        $datacaas = DataCaas::where('datacaas.id', $caasid)
            ->leftjoin('statuses', 'datacaas.id', '=', 'statuses.datacaas_id')
            ->leftjoin('tahaps', 'tahaps.id', '=', 'statuses.tahaps_id')
            ->orderBy('tahaps.urut_tahap', 'desc')->first();
        $plots = DataCaas::where('datacaas.id', $caasid)
            ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
            ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
            ->first();
        $plotactive = Datacaas::where('datacaas.id', $id)
            ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
            ->select('plots.isPlotActive')->first();
        $quotaremain = Datacaas::where('plots.shifts_id', $shift)
            ->leftjoin('plots', 'datacaas.id', '=', 'plots.datacaas_id')
            ->leftjoin('shifts', 'shifts.id', '=', 'plots.shifts_id')
            ->get()->count();
        $statusstages = Stages::where('stages.statusActive', 1)->first();
        $passcheck = PassCheck::where('id', 1)->first();
        $limit = $shift->quota - $quotaremain;
        \Carbon\Carbon::setLocale('id');
        if ($datacaas->isPass == 1 && $statusstages->statusActive == $datacaas->statusActive && $passcheck->isPlotRun == 1 && $plotactive->isPlotActive == NULL) {
            return view('plotchoose', compact('shift', 'datacaas', 'plotactive', 'quotaremain', 'plots', 'statustages', 'limit'));
        } elseif ($datacaas->isPass == 0 && $statusstages->statusActive == $datacaas->statusActive && $plotactive->isPlotActive == NULL && $datacaas->statusActive == 1) {
            return view('plotfirst', compact('shift', 'datacaas', 'plotactive', 'quotaremain', 'plots', 'statustages', 'limit'));
        } else return redirect('listplot');
        
    }
}
