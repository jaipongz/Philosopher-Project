<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tambol;
use App\Models\Skill;
use Illuminate\Support\Facades\Hash;

class SubAdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('sub-admin.index');
    }
    public function formuser()
    {
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        $group = Skill::all();
        return view('sub-admin.forms', ['group' => $group,'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }
    public function storeuser(Request $request, $id)
    {
        // dd($request);
        $user = new User();
        $user->name = $request->input('name');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->amphoe = $request->input('amphoe');
        $user->tambon = $request->input('tambon');
        $user->zipcode = $request->input('zipcode');
        $user->tel = $request->input('tel');
        $user->groups = $request->input('group');
        if ($request->input('more') !== null) {
            $user->groups = $request->input('more');
            $skill = new Skill();
            $skill->skill = $request->input('more');
            $skill->save();
        }

        $user->email = $request->input('email');
        $user->skill = $request->input('skill');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('user_pass'));
        $user->created_by = $id;
        $user->role = 0;


        if ($request->file('profile_pic')) {
            $file = $request->file('profile_pic');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $user->profile_pic = $filename;
        }


        $user->save();
        return redirect()->route('staff.tableuser');
    }

    public function tableuser()
    {
        $user = User::where('role', 0)->get();
        return view('sub-admin.tables-data', ['user' => $user]);
    }

    public function profile($id)
    {

        // dd($id);
        $staff = User::where('id', $id)->get();
        $ct = User::find($id);
        $idcreate = $ct->created_by;
        $creator = User::where('id', $idcreate)->get();
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        // dd($user);
        return view('sub-admin.staff-profile', ['staff' => $staff, 'creator' => $creator, 'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }

    public function userprofile($id)
    {
        $user = User::where('id', $id)->get();
        // dd($id);
        $ct = User::find($id);
        $idcreate = $ct->created_by;
        $creator = User::where('id', $idcreate)->get();
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        $group = Skill::all();
        // dd($creator);
        return view('sub-admin.users-profile', ['group' => $group,'user' => $user, 'creator' => $creator, 'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }

    public function edituser(Request $request, $id)
    {
        // dd($request);
        // dd($id);
        $user = User::find($id);
        $user->name = $request->input('newname');
        if ($request->input('newgroup') !== 'กรุณาเลือก') {
            $user->groups = $request->input('newgroup');
        }
        $user->skill = $request->input('newskill');
        $user->address = $request->input('newaddress');
        $user->province = $request->input('province');
        $user->amphoe = $request->input('amphoe');
        $user->tambon = $request->input('tambon');
        $user->zipcode = $request->input('zipcode');
        $user->tel = $request->input('newphone');
        if ($request->hasFile('newprofile')) {
            $file = $request->file('newprofile');
            $filename = date('YmdHi') . time();
            $file->move(public_path('public/image'), $filename);
            $user->profile_pic = $filename;
            $user->save();
        }
        $user->save();


        // dd($user);
        return redirect()->route('staff.userprofile', ['user' => $user, 'id' => $user->id]);
    }

    public function editprofile(Request $request, $id)
    {
        // dd($request);

        // dd($id);
        $staff = User::find($id);
        $staff->name = $request->input('newname');
        $staff->address = $request->input('newaddress');
        $staff->province = $request->input('province');
        $staff->amphoe = $request->input('amphoe');
        $staff->tambon = $request->input('tambon');
        $staff->zipcode = $request->input('zipcode');
        $staff->tel = $request->input('newphone');
        if ($request->hasFile('newprofile')) {
            $file = $request->file('newprofile');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $staff->profile_pic = $filename;
            $staff->save();
        }
        $staff->save();

        // dd($user);
        return redirect()->route('staff.profile', ['staff' => $staff, 'id' => $staff->id]);
    }
}
