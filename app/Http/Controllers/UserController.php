<?php


namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserController
{
    /**
     * Return all user list
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        return response()->json(['users' => User::all()]);
    }


    /**
     * Show user info in admin area
     * @param User $user
     * @return JsonResponse
     */
    public function preview(User $user): JsonResponse
    {
        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * Update the current user, id receiving by model bindings
     * @param User $user
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function update(User $user, UserRequest $request): JsonResponse
    {
        $user = tap($user)
            ->update($request->validated());

        return response()->json([
            'user' => $user,
            'status' => 200,
        ]);
    }

    /**
     * Delete the user
     * @param User $user
     * @return JsonResponse
     * @throws \Exception
     */
    public function delete(User $user): JsonResponse
    {
        return response()->json([
            'status' => $user->delete(),
            'message' => __('user.user_deleted')
        ]);
    }
}
