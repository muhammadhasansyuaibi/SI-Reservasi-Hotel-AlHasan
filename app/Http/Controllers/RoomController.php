<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use Dompdf\Dompdf;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::all();
        return view('rooms.index', compact('room'));
    }

    public function printPdf()
    {
        $printpdf_room = Room::get();
        $html = view('rooms.printpdf', compact('printpdf_room'));

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'potrait');
        
        $dompdf->render();

        $dompdf->stream('Laporan_Kamar.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg,svg',
            'type' => 'required',
            'rates' => 'required'
        ]);

        $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imgName);

        Room::create([
            'name' => $request->name,
            'image' => $imgName,
            'type' => $request->type,
            'rates' => $request->rates
        ]);

        return redirect('/rooms')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'type' => 'required',
            'rates' => 'required'
        ]);
        
        $file = $request->file('image');
        if($file!=null)
        {
            $imgName = $request->image->getClientOriginalName() . '-' . time() . '.' . 
            $request->image->extension();
            $request->image->move(public_path('images'), $imgName);
        }else
        {
            $imgName = $request->image_old;
        }
        Room::where('id', $room->id)
            ->update([
                'name' => $request->name,
                'image' => $imgName,
                'type' => $request->type,
                'rates' => $request->rates
            ]);
            return redirect('/rooms')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/rooms')->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
