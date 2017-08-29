<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Events\Frontend\Auth\UserRegistered;
use App\Models\Access\User\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Repositories\Frontend\Access\User\UserRepository;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        // Where to redirect users after registering
        $this->redirectTo = route(homeRoute());

        $this->user = $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('frontend.auth.register');
    }

    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(RegisterRequest $request)
    {
        $newUser = new User();
        $newUser->first_name = $request->first_name;
        $newUser->last_name = $request->last_name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->confirmation_code = md5(uniqid(mt_rand(), true));
        $newUser->confirmed = true;
        $newUser->save();
        return redirect()->route('frontend.index')->withFlashSuccess('User have been created successfully.');
//        if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
//            $user = $this->user->create($request->only('first_name', 'last_name', 'email', 'password'));
//            event(new UserRegistered($user));
//
//            return redirect($this->redirectPath())->withFlashSuccess(
//                config('access.users.requires_approval') ?
//                    trans('exceptions.frontend.auth.confirmation.created_pending') :
//                    trans('exceptions.frontend.auth.confirmation.created_confirm')
//            );
//        } else {
//            access()->login($this->user->create($request->only('first_name', 'last_name', 'email', 'password')));
//            event(new UserRegistered(access()->user()));
//
//            return redirect($this->redirectPath());
//        }
    }
}
