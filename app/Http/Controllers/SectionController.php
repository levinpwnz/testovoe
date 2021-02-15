<?php


namespace App\Http\Controllers;


use App\Http\Requests\SectionRequest;
use App\Models\Section;
use Illuminate\Http\JsonResponse;

class SectionController
{
    /**
     * Returns all sections
     * @return JsonResponse
     */
    public function list()
    {
        return response()->json([
            'sections' => $section = Section::with('users')->get(),
        ]);
    }

    public function edit(Section $section)
    {

    }

    public function store(SectionRequest $request)
    {

    }

    public function update(SectionRequest $request)
    {

    }
}
