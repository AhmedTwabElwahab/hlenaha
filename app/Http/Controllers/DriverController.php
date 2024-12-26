<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Http\Requests\web\DriverRequest;
use App\Models\bankAccount;
use App\Models\driver;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DriverController extends BaseController
{
    /**
     * Display all Drivers.
     * @return View
     */
    public function index(Request $request): View
    {
        if ($request->has('search'))
        {
            $search = $request->get('search');
            $drivers = Driver::Join('users', 'drivers.user_id', '=', 'users.id')
                ->select('drivers.*', 'users.email')
                ->where('drivers.name','LIKE','%'.$search.'%')
                ->orWhere('drivers.phone','LIKE','%'.$search.'%')
                ->orWhere('users.email','LIKE','%'.$search.'%')
                ->orWhere('id_number','LIKE','%'.$search.'%')
                ->orWhere('country','LIKE','%'.$search.'%')
                ->orWhere('city','LIKE','%'.$search.'%')
                ->orWhere('district','LIKE','%'.$search.'%')
                ->paginate(20);
        }else
        {
            $drivers = Driver::paginate(APP_PAGINATE);
        }
        return view('drivers.index', compact('drivers'));
    }

    /**
     * create a new Driver.
     * @return View
     */
    public function create(): View
    {
        return view('drivers.create');
    }

    /**
     * Store a new Driver in dataBase.
     * @param DriverRequest $request
     * @return
     */
    public function store(DriverRequest $request)
    {
        DB::beginTransaction();
        try
        {
            $user = User::CreateUser($request);
            if ($user)
            {
                Driver::createDriver($request,$user->id);
                DB::commit();
            }
            return redirect()->route('driver.index')->withStatus(__('global.create_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }

    /**
     * exit Driver.
     * @param driver $driver
     * @return View
     */
    public function edit(driver $driver): View
    {
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the Driver information.
     * @param DriverRequest $request
     * @param Driver $driver
     * @return
     */
    public function update(DriverRequest $request, driver $driver)
    {
        DB::beginTransaction();
        try
        {
            $Driver = driver::updateDriver($request,$driver->id);
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
     * @param Driver $driver
     * @return
     */
    public function destroy(driver $driver)
    {
        DB::beginTransaction();
        try
        {
            if (!$driver->user->delete())
            {
                throw new Exception('delete_user_error');
            }
            if (!$driver->delete())
            {
                throw new Exception('delete_error');
            }

            DB::commit();
            return redirect()->route('driver.index')->withStatus(__('global.delete_success'));
        } catch (Exception $e)
        {
            DB::rollBack();
            $message = $this->handleException($e);
            return redirect()->back()->withErrors([$message]);
        }
    }


    public function bank_account(driver $driver): View
    {
        $accounts = bankAccount::where('user_id',$driver->user_id)->paginate(APP_PAGINATE);
        return view('drivers.bank_account', compact('driver','accounts'));
    }
}
