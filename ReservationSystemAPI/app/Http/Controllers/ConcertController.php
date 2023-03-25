<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

/**
 * Class ConcertController
 * @package App\Http\Controllers
 */
class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concerts = Concert::paginate();

        return view('concert.index', compact('concerts'))
            ->with('i', (request()->input('page', 1) - 1) * $concerts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concert = new Concert();
        return view('concert.create', compact('concert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Concert::$rules);

        $concert = Concert::create($request->all());

        return redirect()->route('concerts.index')
            ->with('success', 'Concert created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concert = Concert::find($id);

        return view('concert.show', compact('concert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concert = Concert::find($id);

        return view('concert.edit', compact('concert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Concert $concert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concert $concert)
    {
        request()->validate(Concert::$rules);

        $concert->update($request->all());

        return redirect()->route('concerts.index')
            ->with('success', 'Concert updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $concert = Concert::find($id)->delete();

        return redirect()->route('concerts.index')
            ->with('success', 'Concert deleted successfully');
    }
}
