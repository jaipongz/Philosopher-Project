<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Perform;
use App\Models\Tambol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        $id = Auth::user()->id;
        $perform = Role::where('user_id', $id)->get();
        return view('user.performance', ['perform' => $perform]);
    }
    public function performance($id)
    {
        $perform = Role::where('user_id', $id)->get();

        return view('user.performance', ['perform' => $perform]);
    }
    public function performinfo($id)
    {
        $perform = Role::where('image_id', $id)->get();
        $info = Perform::where('image_id', $id)->get();
        // dd($perform);

        return view('user.performinfo', ['info' => $info, 'perform' => $perform]);
    }
    public function performedit($id)
    {
        $perform = Role::where('image_id', $id)->get();
        $info = Perform::where('image_id', $id)->get();
        // dd($perform);

        return view('user.editperform', ['info' => $info, 'perform' => $perform]);
    }
    public function upload()
    {
        return view('user.upload-work');
    }
    public function update(Request $request,$id)
    {
        // dd($request);
        $perform = Role::find($id);
        $perform->image_alt = $request->input('newheader');
        $perform->perform = $request->input('dataform');
        if ($request->hasFile('newprofile')) {
            $file = $request->file('newprofile');
            $filename = date('YmdHi') . time();
            $file->move(public_path('public/image'), $filename);
            $perform->image = $filename;
            $perform->save();
        }
        $perform->save();
        return redirect()->route('user.performance', ['perform' => $perform, 'id' => $perform->user_id]);
    }

    public function storeperform(Request $request, $id)
    {
        // dd($request);
        $perform = new Role();
        $perform->image_alt = $request->input('perfomalt');
        $perform->user_id = $id;
        if ($request->hasFile('perfomimg')) {
            $file = $request->file('perfomimg');
            $filename = date('YmdHi') . time();
            $file->move(public_path('public/image'), $filename);
            $perform->image = $filename;
            $perform->perform = $request->input('dataform');
            $perform->save();

            // if (isset($_POST['additionalPerfomalt']) && $request->hasFile('additionalPerfomimg')) {
            //     $addperformalts = $request->input('additionalPerfomalt');
            //     $addperformimgs = $request->file('additionalPerfomimg');
            //     foreach ($addperformimgs as $key => $performimg) {
            //         $info = new Perform();
            //         $perfile = $performimg;
            //         $perfilename = date('YmdHi') . time() . $key;
            //         $perfile->move(public_path('public/image'), $perfilename);
            //         $info->perform_image = $perfilename;
            //         $info->image_id = $perform->image_id;
            //         $info->perform_alt = $addperformalts[$key];

            //         $info->save();
            //     }
            // }
        }
        return redirect()->route('user.performance', ['perform' => $perform, 'id' => $perform->user_id]);
    }

    public function profile($id)
    {


        $user = User::where('id', $id)->get();
        // dd($id);
        $ct = User::find($id);
        $idcreate = $ct->created_by;
        $creator = User::where('id', $idcreate)->get();
        $provinces = Tambol::select('province')->distinct()->get();
        $amphoes = Tambol::select('amphoe')->distinct()->get();
        $tambons = Tambol::select('tambon')->distinct()->get();
        // dd($creator);
        return view('user.users-profile', ['user' => $user, 'creator' => $creator,'provinces' => $provinces, 'amphoes' => $amphoes, 'tambons' => $tambons]);
    }

    public function editprofile(Request $request, $id)
    {
        // dd($request);
        // dd($id);
        $user = User::find($id);
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
        return redirect()->route('user.profile', ['user' => $user, 'id' => $user->id]);
    }

    public function destroy($id)
    {
        $info = Perform::where('image_id', $id);
        $info->delete();
        $perform = Role::find($id);
        $perform->delete();

        return redirect()->route('user.performance', ['perform' => $perform, 'id' => $perform->user_id]);
    }
}
