<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Collection;

class UserIndexResponse implements Responsable
{
    protected $users;

    public function __construct(Collection $users)
    {
        $this->users = $users;
    }

    public function toResponse($request)
    {
        return response()->json($this->transformUsers());
    }

    protected function transformUsers()
    {
        return $this->users->map(function ($user) {
            return [
                'name' => $user->name,
                'email' => $user->email,
            ];
        });
    }
}