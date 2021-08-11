<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    public function render($request, Throwable $e)
    {
//        return parent::render($request, $e);

        if ($e instanceof ModelNotFound || $e instanceof ModelNotFoundException) {
            return ModelNotFound::render($request);
        }

        return response()->json([
            'msg' => [
                'summary' => 'Error en el servidor',
                'detail' => '',
                'code' => '500',
            ]
        ], 500);
    }
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
