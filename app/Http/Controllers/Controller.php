<?php

namespace App\Http\Controllers;

use App\Models\Perform;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function portfolio($id)
    {
        $user = User::where('id', $id)->get();

        $cd = User::find($id);
        // dd($user);
        $perform = Role::where('user_id', $cd->id)->get();
        $cont = Role::where('user_id', $cd->id)->get();
        // dd($perform);
        return view('portfolio-details', ['user' => $user, 'perform' => $perform, 'cont' => $cont]);
    }
    public function portinfo($id)
    {
        // dd($id);
        // $user = User::where('id',$id)->get();

        $header = Role::where('image_id', $id)->get();

        $info = Perform::where('image_id', $id)->get();


        return view('portfolioinfo', ['header' => $header, 'info' => $info]);
    }
    public function serch(Request $request)
    {
        // dd($request)->input();
        $request->validate([
            'searchData' => 'required'
        ]);

        $keyword = $request->input('searchData');

        // $keyword = $request->input('keyword');

        $data = Role::where('image_alt', 'like', "%$keyword%")
            ->orWhere('perform', 'like', "%$keyword%")
            ->get();
        if ($data->isEmpty()) {

            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('name', 'like', "%$keyword%")
                        ->orWhere('address', 'like', "%$keyword%")
                        ->orWhere('province', 'like', "%$keyword%")
                        ->orWhere('amphoe', 'like', "%$keyword%")
                        ->orWhere('tambon', 'like', "%$keyword%")
                        ->orWhere('groups', 'like', "%$keyword%")
                        ->orWhere('skill', 'like', "%$keyword%");
                })
                ->get();

            $count = count($user);
            return view('result', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        } else {

            $user = [];
            foreach ($data as $data) {
                $users = User::find($data->user_id);

                $user[] = [
                    'id' => $users->id,
                    'name' => $users->name,
                    'address' => $users->address,
                    'groups' => $users->groups,
                    'skill' => $users->skill,
                    'profile_pic' => $users->profile_pic,
                    'image_id' => $data->image_id,
                    'image_alt' => $data->image_alt,
                    'perform' => $data->perform,
                ];
            }
            $count = count($user);
            return view('result', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
    }
    public function serchfilter()
    {

        return view('searchfilter');
    }
    public function findfilter(Request $request)
    {
        $keyword = $request->input('keyword');
        if ($request->input('filter') == 'all') {
            $data = Role::where('image_alt', 'like', "%$keyword%")
                ->orWhere('perform', 'like', "%$keyword%")
                ->get();
            if ($data->isEmpty()) {

                $user = User::where('role', 0)
                    ->where(function ($query) use ($keyword) {
                        $query->where('name', 'like', "%$keyword%")
                            ->orWhere('address', 'like', "%$keyword%")
                            ->orWhere('province', 'like', "%$keyword%")
                            ->orWhere('amphoe', 'like', "%$keyword%")
                            ->orWhere('tambon', 'like', "%$keyword%")
                            ->orWhere('groups', 'like', "%$keyword%")
                            ->orWhere('skill', 'like', "%$keyword%");
                    })
                    ->get();

                $count = count($user);
                return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
            } else {

                $user = [];
                foreach ($data as $data) {
                    $users = User::find($data->user_id);

                    $user[] = [
                        'id' => $users->id,
                        'name' => $users->name,
                        'address' => $users->address,
                        'groups' => $users->groups,
                        'profile_pic' => $users->profile_pic,
                        'image_id' => $data->image_id,
                        'image_alt' => $data->image_alt,
                        'perform' => $data->perform,
                    ];
                }
                $count = count($user);
                return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
            }
        }
        if ($request->input('filter') == 'group') {
            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('groups', 'like', "%$keyword%");
                })->get();
            $count = count($user);
            // dd($user);
            return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
        if ($request->input('filter') == 'village') {
            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('address', 'like', "%$keyword%");
                })->get();
            $count = count($user);
            return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
        if ($request->input('filter') == 'province') {
            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('province', 'like', "%$keyword%");
                })->get();
            $count = count($user);
            return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
        if ($request->input('filter') == 'district') {
            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('amphoe', 'like', "%$keyword%");
                })->get();
            $count = count($user);
            return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
        if ($request->input('filter') == 'subdistrict') {
            $user = User::where('role', 0)
                ->where(function ($query) use ($keyword) {
                    $query->where('tambon', 'like', "%$keyword%");
                })->get();
            $count = count($user);
            return view('resultfilter', ['result' => $user, 'keyword' => $keyword, 'count' => $count]);
        }
    }
}
