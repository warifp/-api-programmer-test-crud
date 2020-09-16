<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// models
use App\Book as BookModel;

// requests
use App\Http\Requests\Book\AddForm;
use App\Http\Requests\Book\UpdateForm;
use App\Http\Requests\Book\Show;
use App\Http\Requests\Book\Delete;

class Book extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @queryParam name required Book title name. Example: Nanti Kita Cerita Tentang Hari Ini
     * @queryParam serial_number Serial number qr code book. Example: 9CZ6XTDIMN7GE4WB
     * @queryParam publisher_year required Book published. Example: 2020
     * @queryParam price required Book price. Example: 10000
     *
     * @response {
     *      "message": "The article was successfully added."
     * }
     * @return \Illuminate\Http\Response
     */
    public function create(AddForm $request)
    {
        $validated = $request->only([
            'name',
            'serial_number',
            'publisher_year',
            'price',
        ]);

        BookModel::create($validated);

        return response(['message' => 'The article was successfully added.']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @queryParam id Book id. Example: 3
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request)
    {
        $validated = $request->only([
            'id',
        ]);

        if (!empty($validated['id']))
        {
            $book = BookModel::where('id', $validated['id'])->first();
            return response($book);
        } else {
            $book = BookModel::select([
                'name',
                'serial_number',
                'publisher_year',
                'price',
            ])->get();

            return response()->json($book);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @queryParam id required Book id. Example: 3
     * @queryParam name Book title name. Example: Nanti Kita Cerita Tentang Hari Ini
     * @queryParam serial_number Serial number qr code book. Example: 9CZ6XTDIMN7GE4WB
     * @queryParam publisher_year Book published. Example: 2020
     * @queryParam price Book price. Example: 10000
     *
     * @response {
     *      "message": "The article was successfully updated."
     * }
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForm $request)
    {
        $validated = $request->only([
            'id',
            'name',
            'serial_number',
            'publisher_year',
            'price',
        ]);

        BookModel::where('id', $validated['id'])->update($validated);

        return response(['message' => 'The article was successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @queryParam id required Book id. Example: 3
     *
     * @response {
     *      "message": "The book was successfully deleted."
     * }
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delete $request)
    {
        $validated = $request->only([
            'id',
        ]);

        BookModel::destroy($validated['id']);

        return response(['message' => 'The book was successfully deleted.']);
    }
}
