<?php

namespace App\Http\Controllers;

use App\Models\Sneker;
use App\Http\Requests\StoreSnekerRequest;
use App\Http\Requests\UpdateSnekerRequest;
use App\Http\Resources\SnekerResources;

class SnekerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sneker = Sneker::query()->select(['id','title','price','image'])->get();
        return SnekerResources::collection($sneker);
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
    public function store(StoreSnekerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sneker $sneker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sneker $sneker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSnekerRequest $request, Sneker $sneker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sneker $sneker)
    {
        //
    }
}
