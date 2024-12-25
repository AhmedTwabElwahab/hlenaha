<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\web\DriverRequest;
use App\Models\driver;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class DriverController extends BaseController
{
    /**
     * Display all Drivers.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $drivers = Driver::all();
        return $this->sendResponse($drivers, 'All drivers have arrived.');
    }

    /**
     * Store a new Driver in dataBase.
     * @param DriverRequest $request
     * @return JsonResponse
     */
    public function store(DriverRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $driver = Driver::createDriver($request);
            DB::commit();
            return $this->sendResponse($driver,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Display information for a specific Driver.
     * @param Driver $driver
     * @return JsonResponse
     */
    public function show(driver $driver): JsonResponse
    {
        return $this->sendResponse($driver, 'Driver info');
    }

    /**
     * Update the Driver information.
     * @param DriverRequest $request
     * @param Driver $driver
     * @return JsonResponse
     */
    public function update(DriverRequest $request, driver $driver): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $Driver = $driver->updateDriver($request,$driver->id);
            DB::commit();
            return $this->sendResponse($Driver,'update_success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Driver $driver
     * @return JsonResponse
     */
    public function destroy(driver $driver): JsonResponse
    {
        DB::beginTransaction();
        try {
            if (!$driver->delete())
            {
                throw new Exception('delete_error');
            }
            DB::commit();
            return $this->success('success_delete');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
