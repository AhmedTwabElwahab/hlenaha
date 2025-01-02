<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\web\CarRequest;
use App\Models\Car;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CarController extends BaseController
{
    /**
     * Display main page.
     * @return View
     */
    public function index(Request $request): View
    {
        if ($request->has('search'))
        {
            $search = $request->get('search');
            $cars = Car::where('type','LIKE','%'.$search.'%')
                ->orWhere('model','LIKE','%'.$search.'%')
                ->orWhere('year','LIKE','%'.$search.'%')
                ->orWhere('color','LIKE','%'.$search.'%')
                ->orWhere('brand','LIKE','%'.$search.'%')
                ->orWhere('insurance_expiry','LIKE','%'.$search.'%')
                ->orWhere('price_day','LIKE','%'.$search.'%')
                ->paginate(20);
        }else
        {
            $cars = Car::paginate(APP_PAGINATE);
        }
        return view('cars.index', compact('cars'));
    }

    /**
     * Display create paage.
     * @return View
     */
    public function create():View
    {
        return view('cars.create');
    }

    /**
     * Store a new Car in dataBase.
     * @param CarRequest $request
     * @return
     * @throws \Exception
     */
    public function store(CarRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $car = Car::createCar($request);

            DB::commit();
            return redirect()->route('cars.index')->withStatus(__('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors(__('global.create_error'));
        }
    }

    /**
     * Display information for a specific customer.
     * @param Car $car
     * @return View
     */
    public function edit(Car $car):View
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the Car information.
     * @param CarRequest $request
     * @param Car $car
     * @return
     */
    public function update(CarRequest $request, Car $car)
    {
        DB::beginTransaction();
        try
        {
            $car->type              = $request->input('type');
            $car->brand             = $request->input('brand');
            $car->model             = $request->input('model');
            $car->year              = $request->input('year');
            $car->color             = $request->input('color');
            $car->price_day         = $request->input('price_day') ?? $car->price_day;
            $car->kilo              = $request->input('kilo');
            $car->insurance         = $request->input('insurance');
            $car->insurance_expiry  = $request->input('insurance_expiry');
            $car->description       = $request->input('description');
            $car->status            = $request->input('status') == null ? 0 : 1;


            if (!$car->update())
            {
                throw new Exception('update_error',APP_ERROR);
            }
            DB::commit();
            return back()->withStatus(__('global.update_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors(__('global.error_update'));
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Car $car
     * @return
     */
    public function destroy(Car $car)
    {
        DB::beginTransaction();
        try {
            if (!$car->delete())
            {
                throw new Exception('delete_error',APP_ERROR);
            }
            DB::commit();
            return redirect()->route('cars.index')->withStatus(__('global.delete_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors(__('global.error_delete'));
        }
    }
}
