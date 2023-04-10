<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register()
    {
        return view('pages.register');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function doLogin(Request $request)
    {
        // Validate form
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        $param = $request->only(['email', 'password']);
        // select credentials to login
        $result = User::where('email', $param['email'])->first();

        if ($result) {
            if (Hash::check($param['password'], $result['password'])) {
                if (Auth::attempt($param)) {
                    $user = Auth::user();
                    // SET SESSION
                    Session::put('login', true);
                    Session::put('id_user', $result['id']);
                    Session::put('nama', $result['nama']);
                    Session::put('password', $param['password']);
                    Session::put('role', $result['role']);
                    // END OF SESSION

                    if (isset($request->remember)) {
                        // SET COOKIE
                        Cookie::queue('remember', 'remembered', 120);
                        Cookie::queue('id_user', $result['id'], 120);
                        Cookie::queue('email', $result['email'], 120);
                        Cookie::queue('password', $param['password'], 120);
                    }

                    // Redirect pages
                    if (Session::get('role') == 'pasien') {
                        return Redirect::to('pendaftaran-pasien');
                    } else if (Session::get('role') == 'admin') {
                        return Redirect::to('home-admin');
                    }
                }
            }
        } else {
            return redirect()->to('login')->with('error', 'Email atau Password salah!');
        }
    }

    public function doRegister(Request $request)
    {
        $param = $request->all();
        $user = Auth::user();

        $this->validate($request, [
            'nama'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'string',
                'min:8'
            ],
            'konfirmasi_password' => ['required', 'string']
        ]);

        if ($param['konfirmasi_password'] == $param['password']) {
            $register = User::create([
                'nama' => $param['nama'],
                'email' => $param['email'],
                'role' => 'pasien',
                'password' => Hash::make($param['password']),
                'created_at' => date('Y-m-d H:i:s')
            ]);

            if ($register) {
                return redirect()->to('login')->with('success', 'Registrasi akun berhasil');
            } else {
                return redirect()->to('login')->with('error', 'Registrasi akun gagal');
            }
        } else {
            return redirect()->to('login')->with('error', 'Registrasi akun gagal! Password tidak sama');
        }
    }

    public function doLogout()
    {
        Session::flush();
        if (Cookie::has('remember') == true) {
            Cookie::queue(Cookie::forget('remember'));
            Cookie::queue(Cookie::forget('user_id'));
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
        }
        return Redirect::to('/login');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
