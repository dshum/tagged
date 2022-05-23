<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        // return $request->user()->notes()->orderBy('id', 'desc')->get();

        $skip = $request->get('skip', 0);
        $take = $request->get('take', 16);

        $notes = Note::with('tags')
            ->orderBy('id', 'desc')
            ->skip($skip)
            ->take($take)
            ->get();

        return response()->json($notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreNoteRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreNoteRequest $request): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Note $note): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Note $note): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateNoteRequest $request
     * @param \App\Models\Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNoteRequest $request, Note $note): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Note $note
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Note $note): JsonResponse
    {
        return response()->json(['result' => 'success']);
    }
}
