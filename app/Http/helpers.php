<?php


use App\Models\Setting;
use App\Models\Store;
use App\Models\StoreUsers;
use App\User;
use Illuminate\Support\Facades\Cache;

function getLocal()
{
    return app()->getLocale();
}

function can($permission)
{
    //  $user = auth()->user();

    $userCheck = auth()->guard('admin')->check();
    $user = '';

    if ($userCheck == false) {
        return redirect('admin/login');
    } else {
        $user =  auth()->guard('admin')->user();
    }

    /*
        $users = User::where('status', 1)->get();
        $users->map(function ($item, $key) {
            return ucfirst($item->name);
        });
        dd($users);
    */


    if ($user->id == 1) {
        return true;
    }

    //Cache::forget('permissions_' . $user->id);

    $minutes = 5;
    $permissions = Cache::remember('permissions_' . $user->id, $minutes, function () use ($user) {

        return explode(',', $user->permission->permission);
    });

    $permissions = array_flatten($permissions);
    return in_array($permission, $permissions);

    //@if(can('reservations.panel'))
}
