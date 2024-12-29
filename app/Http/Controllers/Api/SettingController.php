<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\SettingRequest;
use App\Models\setting;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class SettingController extends BaseController
{
    public function index()
    {
       return setting::where('user_id',auth()->user()->id)->get();
    }

    public function store(SettingRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $setting = setting::createSetting(
                auth()->user()->id,
                $request->input('key'),
                $request->input('value')
            );
            return $this->sendResponse($setting,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    public function update(SettingRequest $request,Setting $setting): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            if (auth()->user()->id != $setting->user_id)
            {
                throw new Exception('no have permission',APP_ERROR);
            }

            $setting->user_id       = auth()->user()->id;
            $setting->key           = $request->input('key') ?? $setting->key;
            $setting->value         = $request->input('value');

            if (!$setting->update())
            {
                throw new Exception('update_error',APP_ERROR);
            }
            DB::commit();
            return $this->sendResponse($setting,'update_success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
