<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Brand;
use Carbon\Carbon;

use App\Models\Contact;
use App\Models\Divison;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;

class HomeController extends Controller
{


    public function index()
    {

        $sales_from_all_vendors_in_this_day = 5;

        return view('admin.home.dashboard')->with(compact(
            'sales_from_all_vendors_in_this_day',
        ));
    }


    public function changeStatus($model, Request $request)
    {
        $role = "";
        if ($model == "admins")
            $role = 'App\Models\Admin';
        if ($model == "notifications")
            $role = 'App\Models\NotificationToUsers';
        if ($model == "banners")
            $role = 'App\Models\Banner';
        if ($model == "products")
            $role = 'App\Models\Product';
        if ($model == "pages")
            $role = 'App\Models\Page';
        if ($model == "countries")
            $role = 'App\Models\Country';
        if ($model == "cities")
            $role = 'App\Models\City';
        if ($model == "promo_codes")
            $role = 'App\Models\PromoCode';

        if ($model == "orders")
            $role = 'App\Models\Order';

        if ($role != "") {
            if ($request->action == 'delete') {
                $role::query()->whereIn('id', $request->IDsArray)->delete();
            } else {
                if ($request->action) {
                    $role::query()->whereIn('id', $request->IDsArray)->update(['status' => $request->action]);
                }
            }

            return $request->action;
        }
        return false;
    }
}
