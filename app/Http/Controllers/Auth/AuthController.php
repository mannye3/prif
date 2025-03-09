<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterAccount;
use App\Http\Requests\ResetPasswordSubmitRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerPost(RegisterAccount $request)
    {
        $user = $this->authService->register($request->validated());

        if ($user) {
            return redirect()->route('login')->with('success', 'Please click on the link sent to your email.');
        }

        return redirect()->back()->with('error', 'Failed to create account');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginPost(LoginRequest $request)
    {
        $loginResponse = $this->authService->login($request->only('email', 'password'));

        if ($loginResponse['status']) {
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', $loginResponse['message']);
    }

    /**
     * Handle forgot password request.
     */
    public function userForgetpassword(ForgetPasswordRequest $request)
    {

        $success = $this->authService->forgetPassword($request->email);

        if (! $success) {
            return back()->with('error', 'Email not found.');
        }

        return back()->with('success', 'We have e-mailed your password reset link!');
    }

    /**
     * Show reset password view.
     */
    public function resetpassword($token)
    {
        $data = $this->authService->getResetPasswordView($token);

        if (! $data) {
            return redirect()->route('password.request')->with('error', 'Invalid password reset token.');
        }

        return view('auth.passwords.reset', $data);
    }

    /**
     * Handle password reset submission.
     */
    public function resetpasswordsubmit(ResetPasswordSubmitRequest $request)
    {
        $result = $this->authService->resetPasswordSubmit($request->validated());

        if ($result !== true) {
            return back()->withInput()->with('error', $result);
        }

        return redirect('/login')->with('success', 'Your password has been changed!');
    }

    public function verifyEmail($token)
    {
        $result = $this->authService->verifyEmail($token);

        return redirect(route('login'))->with(
            $result['status'] ? 'success' : 'error',
            $result['message']
        );
    }

    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }
}
