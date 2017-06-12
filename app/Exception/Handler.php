<?php

namespace App\Exception;

use App\Enums\Code;

class Handler implements \Pharest\Exception\ExceptionHandler
{

    /**
     * handle the exception
     *
     * @param \Phalcon\Http\Response $response
     * @param \Exception             $exception
     *
     */
    public function handle(\Phalcon\Http\Response &$response, \Exception $exception)
    {
        if ($exception instanceof MessageException) {
            $result = [
                'code'    => Code::Ok,
                'message' => $exception->getMessage(),
                'data'    => null
            ];
        } elseif ($exception instanceof \Pharest\Exception\NotFoundException) {
            $result = [
                'code'    => Code::NotFound,
                'message' => $exception->getMessage(),
                'data'    => null
            ];
        } elseif ($exception instanceof \Pharest\Exception\ValidateException) {
            $result = [
                'code'    => Code::ValidateFail,
                'message' => $exception->getMessage(),
                'data'    => $exception->getFields()
            ];
        } else {
            $result = [
                'code'    => Code::NoMessage,
                'message' => 'unknown error',
                'data'    => null
            ];
        }

        $response->setJsonContent($result);
    }

}