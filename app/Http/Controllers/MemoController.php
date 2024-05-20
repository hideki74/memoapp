<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;
use App\Models\Person;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memos = Memo::all();
        return view('memo.index', ['memos' => $memos]);
    }

    public function people() {
        $people = Person::all();
        return view('memo.people', ['people' => $people]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $memo = Memo::find($id);
        $person = Person::find($memo->person_id);
        return view('memo.show', ['memo' => $memo, 'person' => $person]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
