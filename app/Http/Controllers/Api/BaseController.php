<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    /**
     * TO SEND RESPONSE.
     *
     * @param $response
     * @param string $status
     * @param int $code
     * @return JsonResponse
     */
    public function sendResponse($response, string $status = 'Success', int $code = 200): JsonResponse
    {
        return response()->json(['data' => $response, 'status' => $status],$code);
    }

    /**
     * handel api exception.
     *
     * @param Exception $exception
     * @return array|string
     */
    protected function handleException(Exception $exception)
    {
        if ($exception->getCode() == -1)
        {
            $message = __('Api/response.'.$exception->getMessage());
        }
        else
        {
            //$message = __('Api/response.API_Error');
            $message = $exception->getMessage().'  code error is:'.$exception->getCode();
        }
        report($exception);
        return $message;
    }

    /**
     * Response failed case.
     *
     * @param $message
     * @return JsonResponse
     */
    public function failed($message): JsonResponse
    {
        return $this->sendResponse($message,'failed',400);
    }

    /**
     * Response success case.
     *
     * @param $message
     * @return JsonResponse
     */
    public function success($message): JsonResponse
    {
        return $this->sendResponse($message);
    }
}
