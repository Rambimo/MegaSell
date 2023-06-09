<?php

namespace App\Http\Controllers;

use App\Models\SmartphoneModel;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 1;

        if ($request->has('search')) {
            $searchQuery = $request->search;
            $smp = SmartphoneModel::where('merk', 'like', '%' . $searchQuery . '%')
                ->orWhere('seri', 'like', '%' . $searchQuery . '%')
                ->orWhere('display', 'like', '%' . $searchQuery . '%')
                ->orWhere('kamera', 'like', '%' . $searchQuery . '%')
                ->orWhere('battery', 'like', '%' . $searchQuery . '%')
                ->orWhere('harga', 'like', '%' . $searchQuery . '%')
                ->paginate($perPage)
                ->appends(['search' => $searchQuery]);
            return view('smartphone.smartphone')
                ->with('smp', $smp)
                ->with('searchQuery', $searchQuery);
        }

        $smp = SmartphoneModel::paginate($perPage);
        return view('smartphone.smartphone')
            ->with('smp', $smp);
    }


    public function create()
    {
        return view('Smartphone.Create_smartphone')
                ->with('url_form', url('/smartphone'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:15',
            'seri' => 'required|string|max:30',
            'processor' => 'required|string|max:50',
            'display' => 'required|string|max:50',
            'kamera' => 'required|string|max:50',
            'battery' => 'required|string|max:20',
            'harga' => 'required|string|max:25'
        ]);

        SmartphoneModel::create($request->except(['_token']));

        return redirect('smartphone')
                ->with('success', 'Data Smartphone Berhasil Ditambahkan');
    }

    public function show(SmartphoneModel $smartphone)
    {
        //
    }

    public function edit($id)
    {
        $smartphone = SmartphoneModel::find($id);
        return view('smartphone.create_smartphone')
                ->with('smp', $smartphone)
                ->with('url_form', url('/smartphone/'. $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string|max:15',
            'seri' => 'required|string|max:30',
            'processor' => 'required|string|max:50',
            'display' => 'required|string|max:50',
            'kamera' => 'required|string|max:50',
            'battery' => 'required|string|max:20',
            'harga' => 'required|string|max:25'
        ]);

        SmartphoneModel::where('id','=', $id)->update($request->except(['_token', '_method']));

        return redirect('smartphone')
                ->with('success', 'Data Smartphone Berhasil Diupdate');
    }

    public function destroy($id)
    {
        SmartphoneModel::where('id', '=', $id)->delete();
        return redirect('smartphone')
        ->with('success', 'Data Smartphone Berhasil Dihapus');
    }
}
