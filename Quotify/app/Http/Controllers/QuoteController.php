<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('quotes.index', [
            'quotes' => Quote::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuoteRequest $request)
    {
        Quote::create($request->validated());
        //Session::flash('success', 'Quote added successfully');
        return redirect() -> route('quotes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quote $quote)
    {
        return view('quotes.edit', compact('quote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $quote->update($request->validated());
    }

    
    public function trash($id)
    {
        Quote::Destroy($id);
        Session::Flash('success', 'Quote trashed successfully');
        return redirect()-> route('quotes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quote = Quote::withTrashed() -> where('id', $id) -> first();
        $quote -> forceDelete();
        Session::Flash('success', 'Quote deleted successfully');
        return redirect() -> route('quotes.index');
    }

    public function restore($id)
    {
        $quote = Quote::withTrashed() -> where('id', $id) -> first();
        $quote -> restore();
        Session::Flash('success', 'Quote restored successfully');
        return redirect() -> route('quotes.trashed');
    }
        
}
