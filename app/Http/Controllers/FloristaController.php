<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use Session;


use App\Bunga;
use App\Admin;
use App\Customer;
use App\Testimoni;

class FloristaController extends Controller
{
    protected $request;

    public function __construct(Request $req)
    {
        $this->request = $req;
    }

    public function index()
    {
        if (Session::has('user')) {
            $user = Customer::findOrFail(Session::get('admin'));
        }
        if (Session::has('admin')) {
            $user = Admin::findOrFail(Session::get('user'));
        }

        return view('navbar.index', ['user' => $user]);
    }

    public function testimoni()
    {
        $testi = Testimoni::all();
        return view('navbar/testimoni', compact('testi'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Testimoni::create($input);

        return redirect('testimoni');
    }

    public function input_bunga()
    {
        $halaman = 'input_bunga';
        return view('navbar/input_bunga', compact('halaman'));
    }

    public function store_bunga(Request $request)
    {
        $input = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'stok' => 'required|min:0'
        ]);
        Bunga::create($input);
        return redirect('lihat_bunga');
    }

    public function lihat_bunga(Request $request)
    {
        if (!Session::has('admin')) {
            return back();
        }
        if ($request->get('jenis') != "semua") {
            $bunga_list = Bunga::where('jenis', 'like', "%" . $request->get('jenis') . "%")->get();
        } else {
            $bunga_list = Bunga::all();
        }

        $jumlah_bunga = $bunga_list->count();
        return view('lihat_bunga', compact('bunga_list', 'jumlah_bunga'));
    }

    public function show_bunga($id)
    {
        $halaman = 'bunga';
        $bunga = Bunga::findOrFail($id);
        return view('show_bunga', compact('halaman', 'bunga'));
    }

    public function create()
    {
        $halaman = 'create';
        return view('create', compact('halaman'));
    }

    public function edit($id)
    {
        $bunga = Bunga::findOrFail($id);
        return view('edit', compact('bunga'));
    }

    public function update($id, Request $request)
    {
        $bunga = Bunga::findOrFail($id);
        $bunga->update($request->all());
        return redirect('lihat_bunga');
    }

    public function destroy($id)
    {
        $bunga = Bunga::findOrFail($id);
        $bunga->delete();
        return redirect('lihat_bunga');
    }

    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Customer::where('username', $input['username'])->first();

        $check = Hash::check($input['password'], $user->password);

        if ($check) {
            Session::put('user', $user->id);
            return redirect('index');
        }
        return redirect('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $input['password'] = Hash::make($input['password']);

        Customer::create($input);

        return redirect('index');
    }

    public function registerAdmin()
    {
        return view('register_admin');
    }

    public function registerAdminPost(Request $request)
    {
        $input = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $input['password'] = Hash::make($input['password']);

        Admin::create($input);

        return redirect('index');
    }

    public function loginAdmin()
    {
        return view('login_admin');
    }

    public function loginAdminPost(Request $request)
    {
        $input = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $input['username'])->firstOrFail();

        $check = Hash::check($input['password'], $admin->password);

        if ($check) {
            Session::put('admin', $admin->id);
            return redirect('index');
        }
        return redirect('/login_admin');
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }

    public function aboutUs()
    {
        return view('about_us');
    }
}
