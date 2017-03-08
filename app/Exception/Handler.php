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

        if ($exception instanceof NotFoundException) {
            $result = [
                'code'    => 20,
                'message' => $exception->getMessage()
            ];
        } elseif ($exception instanceof \Pharest\Exception\RouterException) {
            $response->setStatusCode(404);
            $result = [
                'code'    => 21,
                'message' => 'uri invalid'
            ];
        } elseif ($exception instanceof MessageException) {
            $result = [
                'code'    => $exception->getCode(),
                'message' => $exception->getMessage()
            ];
        }

        $response->setJsonContent($result);
    }

}