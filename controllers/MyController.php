<?php
namespace Controllers;

use Models\MyModel;
use Models\Sub\SubModel;

class MyController
{
    public function run()
    {
        $myModel = new MyModel;
        echo $myModel->getMessage();

        $subModel = new SubModel;
        echo $subModel->getSubMessage();
    }
}