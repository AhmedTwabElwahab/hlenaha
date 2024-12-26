<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\web\TripRequest;
use App\Models\Car;
use App\Models\driver;
use App\Models\trip;
use Exception;
use Illuminate\Support\Facades\DB;

class TripController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = trip::paginate(APP_PAGINATE);
        return view('trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = driver::all();
        $cars    = car::all();
        return view('trip.create', compact('cars','drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripRequest $request)
    {
        DB::beginTransaction();
        try
        {
            trip::createTrip($request);

            DB::commit();

            return redirect()->route('trips.index')->withStatus(__('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trip $trip)
    {
        $drivers = driver::all();
        $cars = car::all();
        return view('trip.edit', compact('cars','drivers','trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TripRequest $request, trip $trip)
    {
        DB::beginTransaction();
        try
        {
            $trip->driver_id            = $request->input('driver_id') ?? $trip->driver_id;
            $trip->car_id               = $request->input('car_id') ?? $trip->car_id;
            $trip->status               = $request->input('status') == null ? 0 : 1;
            $trip->date_start           = $request->input('date_start');
            $trip->kilo_start           = $request->input('kilo_start');
            $trip->date_end             = $request->input('date_end');
            $trip->kilo_end             = $request->input('kilo_end');

            if (!$trip->update())
            {
                throw new Exception('update_error',APP_ERROR);
            }
            DB::commit();
            return back()->withStatus(__('global.update_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trip $trip)
    {
        DB::beginTransaction();
        try {
            if (!$trip->delete())
            {
                throw new Exception('delete_error',APP_ERROR);
            }
            DB::commit();
            return redirect()->route('trips.index')->withStatus(__('global.delete_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }
}
