<?php

declare(strict_types=1);

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request): Response
    {
        $email = Auth::user()->email;

        if($email == 'hadibutt476@gmail.com'){
            return redirect('/dashboard');
        }else{
            return redirect('/');
        }
    }
}