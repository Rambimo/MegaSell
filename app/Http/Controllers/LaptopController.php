<?php

namespace App\Http\Controllers;

use App\Models\LaptopModel;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index(Request $request)
    {

        if ($request->has('search')) {
            $lpt = LaptopModel::where('merk', 'like', '%' . $request->search . '%')
                ->orWhere('seri', 'like', '%' . $request->search . '%')
                ->orWhere('display', 'like', '%' . $request->search . '%')
                ->orWhere('ram', 'like', '%' . $request->search . '%')
                ->orWhere('internal', 'like', '%' . $request->search . '%')
                ->orWhere('battery', 'like', '%' . $request->search . '%')
                ->orWhere('harga', 'like', '%' . $request->search . '%')
                ->paginate(3);
            return view('laptop.laptop')
                ->with('lpt', $lpt);
        }

        $lpt = LaptopModel::paginate(1);
        return view('laptop.laptop')
        ->with('lpt', $lpt);
    }

    public function create()
    {
        return view('laptop.create_laptop')
                ->with('url_form', url('/laptop'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required|string|max:15',
            'seri' => 'required|string|max:30',
            'processor' => 'required|string|max:50',
            'display' => 'required|string|max:50',
            'ram' => 'required|string|max:50',
            'internal' => 'required|string|max:50',
            'battery' => 'required|string|max:20',
            'harga' => 'required|string|max:25'
        ]);

        LaptopModel::create($request->except(['_token']));

        return redirect('laptop')
                ->with('success', 'Data Laptop Berhasil Ditambahkan');
    }

    public function show(LaptopModel $laptop)
    {
        //
    }

    public function edit($id)
    {
        $laptop = LaptopModel::find($id);
        return view('laptop.create_laptop')
                ->with('smp', $laptop)
                ->with('url_form', url('/laptop/'. $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merk' => 'required|string|max:15',
            'seri' => 'required|string|max:30',
            'processor' => 'required|string|max:50',
            'display' => 'required|string|max:50',
            'ram' => 'required|string|max:50',
            'internal' => 'required|string|max:50',
            'battery' => 'required|string|max:20',
            'harga' => 'required|string|max:25'
        ]);

        LaptopModel::where('id','=', $id)->update($request->except(['_token', '_method']));

        return redirect('laptop')
                ->with('success', 'Data Laptop Berhasil Diupdate');
    }

    public function destroy($id)
    {
        LaptopModel::where('id', '=', $id)->delete();
        return redirect('laptop')
        ->with('success', 'Data Laptop Berhasil Dihapus');
    }
}
