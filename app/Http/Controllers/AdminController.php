<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Skill;
use App\Models\Tambol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $user = User::where('role', 0)->get();
        $st = User::where('role', 2)->get();
        $pf = Role::all();
        $count = count($user);
        $staff = count($st);
        $perform = count($pf);

        $countDuplicates = User::where('role', 0)
            ->select('groups', User::raw('COUNT(*) as count'))
            ->groupBy('groups')
            ->havingRaw('COUNT(*) > 0')
            ->get();

        // dd($countDuplicates);
        return view('admin.index', ['user' => $user, 'count' => $count, 'staff' => $staff, 'plot' => $countDuplicates, 'perform' => $perform]);
    }

    public function formstaff()
    {
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();

        // dd($provinces);
        return view('admin.forms-staff', ['provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }
    public function formuser()
    {
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        $group = Skill::all();
        return view('admin.forms-elements', ['provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons, 'group' => $group]);
    }
    public function tableuser()
    {
        $user = User::where('role', 0)->get();
        return view('admin.tables-data', ['user' => $user]);
    }
    public function tablestaff()
    {
        $staff = User::where('role', 2)->get();
        return view('admin.staff-tables', ['staff' => $staff]);
    }

    public function profile($id)
    {

        // dd($id);
        $admin = User::where('id', $id)->get();
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        // dd($user);
        return view('admin.admin-profile', ['admin' => $admin, 'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }
    public function staffprofile($id)
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
        return view('admin.staff-profile', ['staff' => $staff, 'creator' => $creator, 'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
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
        return view('admin.users-profile', ['group' => $group, 'user' => $user, 'creator' => $creator, 'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }

    public function edituser(Request $request, $id)
    {
        // dd($request);
        // dd($id);
        $user = User::find($id);
        $user->name = $request->input('newname');
        $user->groups = $request->input('newgroup');
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
        return redirect()->route('admin.userprofile', ['user' => $user, 'id' => $user->id]);
    }

    public function editstaff(Request $request, $id)
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
        return redirect()->route('admin.staffprofile', ['staff' => $staff, 'id' => $staff->id]);
    }
    public function editadmin(Request $request, $id)
    {
        // dd($request);

        // dd($id);
        $admin = User::find($id);
        $admin->name = $request->input('newname');
        $admin->address = $request->input('newaddress');
        $admin->province = $request->input('province');
        $admin->amphoe = $request->input('amphoe');
        $admin->tambon = $request->input('tambon');
        $admin->zipcode = $request->input('zipcode');
        $admin->tel = $request->input('newphone');
        if ($request->hasFile('newprofile')) {
            $file = $request->file('newprofile');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $admin->profile_pic = $filename;
            $admin->save();
        }
        $admin->save();

        // dd($user);
        return redirect()->route('admin.profile', ['admin' => $admin, 'id' => $admin->id]);
    }

    public function storestaff(Request $request, $id)
    {
        // dd($request);
        $staff = new User();
        $staff->name = $request->input('staff_name');
        $staff->address = $request->input('staff_address');
        $staff->province = $request->input('province');
        $staff->amphoe = $request->input('amphoe');
        $staff->tambon = $request->input('tambon');
        $staff->zipcode = $request->input('zipcode');
        $staff->tel = $request->input('staff_tel');
        $staff->email = $request->input('staff_email');
        $staff->password = Hash::make($request->input('staff_pass'));
        $staff->created_by = $id;
        $staff->role = 2;


        if ($request->file('staff_pic')) {
            $file = $request->file('staff_pic');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $staff->profile_pic = $filename;
        }
        $staff->save();
        return redirect()->route('admin.tablestaff');
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

        // $user->email = $request->input('email');
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
        return redirect()->route('admin.tableuser');
    }

    public function destroystaff($id)
    {
        // dd($id);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.tablestaff');
    }
    public function destroyuser($id)
    {
        // dd($id);
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.tableuser');
    }
    public function changepass(Request $request, $id)
    {
        if ($request->input('newpassword') == $request->input('renewpassword')) {
            $user = User::find($id);
            $user->password = Hash::make($request->input('renewpassword'));
            // dd($user->password);
            $user->save();
            if ($user->role == 0) {
                return redirect()->route('admin.tableuser')->with('success', 'บันทึกสำเร็จ');
            }
            if ($user->role == 2) {
                return redirect()->route('admin.tablestaff')->with('success', 'บันทึกสำเร็จ');
            }
            if ($user->role == 3) {
                return redirect()->route('admin.dashboard')->with('success', 'บันทึกสำเร็จ');
            }
        } else {
            return redirect()->back()->with('error', 'รหัสผ่านไม่ตรงกัน');
        }
    }
    public function editgroup()
    {
        $skill = Skill::all();

        return view("admin.groupsedit", ['skill' => $skill]);
    }
    public function updategroup(Request $request, $id)
    {
        // dd($request);
        $skill = Skill::find($id);
        $skill->skill = $request->input('editSkillName');
        $skill->save();

        return redirect()->back()->with('success', 'แก้ไขเรียบร้อย');
    }
    public function destroygroup($id)
    {
        // dd($request);
        $skill = Skill::find($id);
        $skill->delete();
        return redirect()->back()->with('success', 'ลบเรียบร้อย');
    }
    public function storegroup(Request $request)
    {
        // dd($request);
        $skill = new Skill;
        $skill->skill = $request->input('addSkillName');
        $skill->save();
        return redirect()->back()->with('success', 'เพิ่มเรียบร้อย');
    }
}
