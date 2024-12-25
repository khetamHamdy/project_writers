<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Language;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;


class SettingController extends Controller
{
    private $locales = '';

    public function __construct()
    {
        $this->locales = Language::all();
        view()->share([
            'locales' => $this->locales,
        ]);

        $this->middleware(function ($request, $next) {
            if (!can('settings')) {
                return redirect()->back()->with('status', __('cp.no_permission'));
            }
            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function image_extensions()
    {

        return array('jpg', 'png', 'jpeg', 'gif', 'bmp', 'pdf', 'txt', 'docx', 'doc', 'ppt', 'xls', 'zip', 'rar');

    }


    public function index()
    {

        $item = Setting::query()->first();
        //return $setting->translate('en')->title;
        return view('admin.settings.edit', ['item' => $item]);
    }

    public function system_maintenance()
    {

        $item = Setting::query()->first();
        //return $setting->translate('en')->title;
        return view('admin.settings.editMaintanense', ['item' => $item]);
    }

    public function system_seo()
    {
        $item = Setting::query()->first();
        return view('admin.settings.editSeo', ['item' => $item]);
    }

    public function update(Request $request)
    {

        $locales = Language::all()->pluck('lang');
        $roles = [

            'info_email' => 'required|email',
            'mobile' => 'required|numeric',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ];

        foreach ($locales as $locale) {
            $roles['title_' . $locale] = 'required';
        }
        $this->validate($request, $roles);
        $setting = Setting::query()->findOrFail(1);
        $setting->info_email = trim($request->get('info_email'));
        $setting->mobile = trim($request->get('mobile'));
        $setting->linkedin = trim($request->get('linkedin'));
        $setting->facebook = trim($request->get('facebook'));
        $setting->twitter = trim($request->get('twitter'));
        $setting->whatsapp = trim($request->get('whatsapp'));
        $setting->tax_amount = trim($request->get('tax_amount'));
        $setting->currency = trim($request->get('currency'));

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $extention = $logo->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            /*Image::make($logo)->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
            })->save("uploads/images/settings/$file_name");*/
            $logo->move(public_path('uploads/settings'), $file_name);
            $setting->logo = $file_name;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();
            $file_name = str_random(15) . "" . rand(1000000, 9999999) . "" . time() . "_" . rand(1000000, 9999999) . "." . $extention;
            /*Image::make($image)->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
            })->save("uploads/images/settings/$file_name");*/
            $image->move(public_path('uploads/settings'), $file_name);
            $setting->image = $file_name;
        }



        foreach ($locales as $locale) {
            $setting->translate($locale)->title = trim(ucwords($request->get('title_' . $locale)));
            $setting->translate($locale)->description = ucwords($request->get('description_' . $locale));
        }
        $setting->save();

        return redirect()->back()->with('status', __('cp.update'));
    }


    public function update_system_seo(Request $request)
    {

        $locales = Language::all()->pluck('lang');


        $setting = Setting::query()->findOrFail(1);

        $setting->seo_in_header = trim($request->get('seo_in_header'));
        $setting->seo_in_body = trim($request->get('seo_in_body'));


        foreach ($locales as $locale) {
            $setting->translate($locale)->key_words = ucwords($request->get('key_words_' . $locale));

        }

        $setting->save();

        return redirect()->back()->with('status', __('cp.update'));
    }


}
