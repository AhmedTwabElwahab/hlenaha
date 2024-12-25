<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\web\CarRequest;
use App\Models\Car;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class CarController extends BaseController
{
    /**
     * Display main page.
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $cars = Car::all();
        return $this->sendResponse($cars, 'All cars have arrived.');
    }

    /**
     * Store a new Car in dataBase.
     * @param CarRequest $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function store(CarRequest $request): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $car = Car::createCar($request);

            DB::commit();
            $this->success('success_add');
            return $this->sendResponse($car,'success_add');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Display information for a specific customer.
     * @param Car $car
     * @return JsonResponse
     */
    public function show(Car $car): JsonResponse
    {
        return $this->sendResponse($car, 'car info');
    }

    /**
     * Update the Car information.
     * @param CarRequest $request
     * @param Car $car
     * @return JsonResponse
     */
    public function update(CarRequest $request, Car $car): JsonResponse
    {
        DB::beginTransaction();
        try
        {
            $car->type              = $request->input('type');
            $car->brand             = $request->input('brand');
            $car->model             = $request->input('model');
            $car->year              = $request->input('year');
            $car->color             = $request->input('color');
            $car->price_day         = $request->input('price_day');
            $car->kilo              = $request->input('kilo');
            $car->insurance         = $request->input('insurance');
            $car->insurance_expiry  = $request->input('insurance_expiry');
            $car->description       = $request->input('description');
            $car->status            = $request->input('status');


            if (!$car->update())
            {
                throw new Exception('update_error',APP_ERROR);
            }
            DB::commit();
            return $this->sendResponse($car,'update success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Car $car
     * @return JsonResponse
     */
    public function destroy(Car $car): JsonResponse
    {
        DB::beginTransaction();
        try {
            if (!$car->delete())
            {
                throw new Exception('delete_error',APP_ERROR);
            }
            DB::commit();
            return $this->success('delete success');
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return $this->failed($message);
        }
    }
}
