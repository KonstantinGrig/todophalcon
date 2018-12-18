<?php

class CmsController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->todoRows = Todo::find();
    }

}

