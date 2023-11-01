<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $data = Admin::select('id', 'nama', 'username', 'role')
                ->when($search, function($query, $search){
                    return $query->where('nama', 'like', "%{$search}%");
                })
                ->orderBy('id')
                ->paginate(5);
        return view('admin.index', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'username' => 'required|alpha_dash|unique:admins',
            'password' => 'required|min:4|confirmed'
        ]);

        Admin::create([
            'nama' =>$request->nama,
            'username' =>$request->username,
            'password' =>bcrypt($request->password),
            'role' =>'resepsionis',
        ]);

        return redirect()->route('admin.index')->with('status', 'store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.edit', ['row'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|alpha_dash|unique:admins,username,{$admin->id}',
            'password' => 'nullable|min:4|confirmed'
        ]);

        if ($request->password) {
            $arr = [
                'nama' =>$request->nama,
                'username' =>$request->username,
                'password' =>bcrypt($request->password)
            ];
        } else {
            $arr = [
                'nama' => $request->nama,
                'username' => $request->username
            ];
        }

        $admin->update($arr);

        return redirect()->route('admin.index')->with('status', 'update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admin.index')->with('status', 'destroy');
    }

    public function akun(Admin $admin)
    {
        $admin = Auth::user();

        return view('admin.akun', ['row'=>$admin]);
    }

    public function UpdateAkun(Admin $admin)
    {
        $admin = Auth::user();

        return view('admin.akun', ['row'=>$admin]);
    }
}
