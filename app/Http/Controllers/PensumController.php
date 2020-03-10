<?php

namespace App\Http\Controllers;

use App\Pensum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pensums = Pensum::latest()->simplePaginate(10);

        return view('pensums.index', compact('pensums'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pensums.create');
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
            'titre' =>'required',
            'detail' =>'nullable',
        ]);

        Pensum::create($request->all());

        return redirect()->route('pensums.index')
            ->with('success', 'Rajout créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function show(Pensum $pensum)
    {
        return view('pensums.show', compact('pensum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function edit(Pensum $pensum)
    {
        return view('pensums.edit', compact('pensum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pensum $pensum)
    {
        $request->validate([
            'titre' =>'required',
            'detail' =>'nullable',
        ]);

        $pensum->update($request->all());

        return redirect()->route('pensums.index')
            ->with('success', 'Modification effectuée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pensum $pensum)
    {
        $pensum->delete();

        return redirect()->route('pensums.index')
            ->with('success', 'Terme supprimé.');
    }
}
