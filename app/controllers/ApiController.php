<?php

class ApiController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->disable();
        $response = new \Phalcon\Http\Response();
        $response->setContentType('application/json', 'UTF-8');
        $todoRows = Todo::find();
        $response->setContent(json_encode($todoRows->toArray()));
        return $response;
    }

}

