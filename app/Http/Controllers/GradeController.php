<?php

namespace App\Http\Controllers;

use App\Http\Resources\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::included()
                        ->filter()
                        ->sort()
                        ->getOrPaginate();
        return GradeResource::collection($grades);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        return GradeResource::make($grade);
    }
}
