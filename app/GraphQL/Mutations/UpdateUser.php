<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Log;

class UpdateUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args): User
    {
        $user = User::findOrFail($args['id']);
        $user->update([
            'name' => $args['name'],
        ]);

        return $user;
    }
}
