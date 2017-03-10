<?php

namespace App\Exception;

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
        $result = [];

        if ($exception instanceof MessageException) {
            $result = [
                'code'    => $exception->getCode(),
                'message' => $exception->getMessage()
            ];
        } elseif ($exception instanceof \Pharest\Exception\NotFoundException) {
            $result = [
                'code'    => 20,
                'message' => $exception->getMessage()
            ];
        } elseif ($exception instanceof \Pharest\Exception\ValidateException) {
            $result = [
                'code'    => 30,
                'message' => $exception->getMessage(),
                'data'    => $exception->getMessages()
            ];
        }

        $response->setJsonContent($result);
    }

}