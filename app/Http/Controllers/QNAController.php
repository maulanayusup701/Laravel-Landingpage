<?php

namespace App\Http\Controllers;

use App\Models\QNA;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class QNAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Back-end.QNA.index', [
            'title' => 'QNA',
            'qnas' => QNA::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        QNA::create($data);
        return redirect('/QNA')->with('success', 'Data has been created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(QNA $qna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QNA $qna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QNA $QNA)
    {
        $data = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $QNA->update($data);
        return redirect('/QNA')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QNA $QNA)
    {
        QNA::destroy($QNA->id);
        return redirect('/QNA')->with('success', 'Data has been deleted!');
    }
}
