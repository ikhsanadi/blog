<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
        ]);

        $data = [
            'name' => $request->name,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect('admin')->with('success', 'Data user berhasil diperbarui');
    }

    function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('admin')->with('success', 'User berhasil dihapus');
    }
}
