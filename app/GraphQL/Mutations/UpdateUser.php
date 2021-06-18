<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class UpdateUser
{
    /**
     * @param null $_
     * @param array<string, mixed> $args
     * @return User
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
