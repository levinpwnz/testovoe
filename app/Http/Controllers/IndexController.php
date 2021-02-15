<?php


namespace App\Http\Controllers;


use App\Models\Section;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class IndexController
{
    /**
     * This invokable controller use DI and return some stats...
     * @param User $user
     * @param Section $section
     * @return JsonResponse
     */
    public function __invoke(User $user, Section $section): JsonResponse
    {
        return response()->json([
            'userCount' => $user->count(),
            'sectionCount' => $section->count(),
        ]);
    }
}
