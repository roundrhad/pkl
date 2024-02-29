<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        // Mendapatkan data user yang sedang login
        $user = $request->user();
    
        // Memeriksa apakah terdapat data karyawan terkait dengan pengguna yang sedang login
        $karyawan = Karyawan::where('username', $user->username)->first();
            
        // Memeriksa apakah ada data karyawan yang terkait
        if ($karyawan) {
            // Jika ada, tampilkan profil dari tabel 'karyawan'
            return view('karyawan.profile', ['karyawan' => $karyawan]);
        } else {
            // Jika tidak ada, tampilkan profil dari tabel 'user'
            return view('karyawan.home');
        }
    }

    public function show2()
    {
        // Mendapatkan id karyawan dari sesi, request, atau sumber lainnya
        $id = 1; // Contoh: anggap saja id karyawan yang ingin ditampilkan adalah 1

        // Ambil data karyawan dari database berdasarkan id
        $karyawan = Karyawan::find($id);

        // Kirim data karyawan ke view
        return view('karyawan.editprofil', ['karyawan' => $karyawan]);
    }
    public function editPassword()
    {
        $user = auth()->user();
        return view('edit-password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        
        // Lakukan validasi input password di sini

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diperbarui!');
    }

    public function show3(Request $request)
    {
        // Mendapatkan data user yang sedang login
        $user = $request->user();
    
        // Memeriksa apakah terdapat data karyawan terkait dengan pengguna yang sedang login
        $admin = Admin::where('username', $user->username)->first();
            
        // Memeriksa apakah ada data karyawan yang terkait
        if ($admin) {
            // Jika ada, tampilkan profil dari tabel 'karyawan'
            return view('admin.profil', ['admin' => $admin]);
        } else {
            // Jika tidak ada, tampilkan profil dari tabel 'user'
            return view('admin.home');
        }
    }

    public function show4()
    {
        // Mendapatkan id karyawan dari sesi, request, atau sumber lainnya
        $id = 2; // Contoh: anggap saja id karyawan yang ingin ditampilkan adalah 1

        // Ambil data karyawan dari database berdasarkan id
        $admin = admin::find($id);

        // Kirim data karyawan ke view
        return view('admin.editprofil', ['admin' => $admin]);
    }
    
    
    
    





//     public function edit(Request $request)
//     {
//         $user = $request->user();
//         $nip = $request->user()->karyawan->nip;
//         $nkaryawans = Karyawan::join('users', 'karyawan.iduser', '=', 'users.id')
//             ->where('karyawan.nip', $nip)
//             ->select('karyawan.nama', 'karyawan.nip', 'users.id', 'users.username', 'users.password')
//             ->first();
//         return view('karyawan.profile', ['user' => $user, 'karyawans' => $nkaryawan]);
//     }

//     public function showEdit(Request $request)
//     {
//         $user = $request->user();
//         $nip = $request->user()->karyawan->nip;
//         $nkaryawans = Karyawan::join('users', 'karyawan.iduser', '=', 'users.id')
//             ->where('karyawan.nip', $nip)
//             ->select('karyawan.nama', 'karyawan.nip', 'users.id', 'users.username', 'users.password')
//             ->first();
//         return view('karyawan.profile-edit', ['user' => $user, 'karyawans' => $nkaryawan]);
//     }



//     public function update(Request $request)
// {
//     $user = $request->user();

//     $validated = $request->validate([
//         'username' => 'nullable|string',
//         'current_password' => 'nullable|string',
//         'new_password' => 'nullable|string|min:8',
//         'new_confirm_password' => 'nullable|same:new_password',
//         'foto' => 'max:10240|image|mimes:jpeg,png,jpg',
//     ]);

//     if ($request->has('foto')) {
//         $fotoPath = $request->file('foto')->store('profile', 'public');
//         $validated['foto'] = $fotoPath;

//         $user->update([
//             'foto' => $validated['foto'],
//         ]);
//     }

//     // Check if 'new_password' key exists and not null in $validated
//     if (array_key_exists('new_password', $validated) && $validated['new_password'] !== null) {
//         if (!Hash::check($validated['current_password'], $user->password)) {
//             return redirect()
//                 ->route('karyawan.showEdit')
//                 ->with('error', 'Password lama tidak cocok');
//         }
//     }

//     DB::beginTransaction();

//     try {
//         $userData = ['username' => $validated['username'] ?? null];

//         if (!is_null($userData['username'])) {
//             $user->update($userData);
//             Karyawan::where('iduser', $user->id)->update($userData);
//         }

//         if (array_key_exists('new_password', $validated) && $validated['new_password'] !== null) {
//             $user->update([
//                 'password' => Hash::make($validated['new_password']),
//             ]);
//         }

//         DB::commit();

//         return redirect()
//             ->route('karyawan.editprofil')
//             ->with('success', 'Profil berhasil diperbarui');
//     } catch (\Exception $e) {
//         DB::rollBack();
//         return redirect()
//             ->route('karyawan.showEdit')
//             ->with('error', 'Gagal memperbarui profil.');
//     }
// }

}
