<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectionRequest;
use App\Http\Resources\SectionResource;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::included()
                            ->filter()
                            ->sort()
                            ->getOrPaginate();

        return SectionResource::collection($sections);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        $section = Section::create([
            'section' => $request->section,
            'shift' => $request->shift,
            'grade_id' => $request->grade_id,
        ]);

        return SectionResource::make($section);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $section = Section::included()->findOrFail($id);
        return SectionResource::make($section);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, Section $section)
    {
        $section->update([
            'section' => $request->section,
            'shift' => $request->shift,
            'grade_id' => $request->grade_id,
        ]);

        return SectionResource::make($section);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();
        return SectionResource::make($section);
    }
}
