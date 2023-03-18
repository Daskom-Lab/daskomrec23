<?php

namespace App\Http\Controllers;

use App\Models\PassCheck;
use App\Models\Plots;
use App\Models\Shifts;
use App\Models\Stages;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function ListShift()
    {
        $data['shift'] = Shifts::orderBy('day', 'asc')->orderBy('time_start', 'asc')->paginate(10);
        $data['countshift'] = Shifts::count();
        $data['stagesname'] = Stages::select('stagesname')->get();
        $data['passcheck'] = PassCheck::where('id', 1)->first();
        \Carbon\Carbon::setLocale('id');
        return view('shift', ['data' => $data]);
    }

    public function addShift(Request $request)
    {
        Shifts::create([
            'shiftname' => $request->shiftname,
            'day' => $request->day,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'quota' => $request->quota,
        ]);
        return redirect('ListShift');
    }

    public function EditShift($id)
    {
        $shift = Shifts::where('id', $id)->first();
        $passcheck = PassCheck::where('id', 1)->first();
        if ($passcheck->isPlotRun == 0)
            return view('editshift', [
                'id' => $shift->id,
                'namashift' => $shift->shiftname,
                'hari' => $shift->day,
                'time_start' => $shift->time_start,
                'time_end' => $shift->time_end,
                'quota' => $shift->quota,
            ]);
        else return redirect('ListShift');
    }

    public function UpdateShift($id, Request $request)
    {
        $passcheck = PassCheck::where('id', 1)->first();
        if ($passcheck->isPlotRun == 0) {
            Shifts::where('id', $id)->update([
                'shiftname' => $request->shiftname,
                'day' => $request->day,
                'time_start' => $request->time_start,
                'time_end' => $request->time_end,
                'quota' => $request->quota,
            ]);
            return redirect('ListShift');
        } else return redirect('ListShift');
    }

    public function delShift($id)
    {
        $passcheck = PassCheck::where('id', 1)->first();
        if ($passcheck->isPlotRun == 0) {
            $shift = Shifts::where('id', $id)->delete();
            return redirect('ListShift');
        } else return redirect('ListShift');
    }

    public function delShiftConfirm($id)
    {
        $shift = Shifts::where('id', $id)->first();
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
    }

    public function deleteAll()
    {
        $shift = Shifts::whereNotNull('id')->delete();
        $plot = Plots::whereNotNull('id')->delete();
        return redirect('ListShift');
    }
}
