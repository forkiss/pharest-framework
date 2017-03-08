<?php

namespace App\Controller\Example;

class IndexController extends \Pharest\Controller
{

    public function show()
    {
        $this->response->setJsonContent([
            'code'    => 0,
            'message' => 'success'
        ]);

        return $this->response;
    }

}