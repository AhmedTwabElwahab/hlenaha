<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\setting;
use Exception;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{

    public function index()
    {
       return setting::where('user_id',auth()->id)->get();
    }

    public function store(SettingRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $user = setting::createSetting(
                $request->input('user_id'),
                $request->input('key'),
                $request->input('value')
            );

            return redirect()->route('dashboard')->withStatus(__('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }


    public function update(SettingRequest $request,Setting $setting)
    {
        DB::beginTransaction();
        try
        {
            $setting->user_id       = $request->input('user_id');
            $setting->key           = $request->input('key');
            $setting->value         = $request->input('value');


            if (!$setting->update())
            {
                throw new Exception('update_error',APP_ERROR);
            }
            DB::commit();
            return redirect()->route('dashboard');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }
}
