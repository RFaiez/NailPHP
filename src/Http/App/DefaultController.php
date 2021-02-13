<?php
namespace Http\App;

use rfaiez\framework_core\Service\Controller;

class DefaultController extends Controller
{
    public function index($name="world")
    {
        return $this->render('app/index', [
            'hello'=>'hello '.$name. " !"
        ]);
    }

    public function __invoke()
    {
        return $this->render('app/index', [
            'hello'=>'home page'
        ]);
    }
}
