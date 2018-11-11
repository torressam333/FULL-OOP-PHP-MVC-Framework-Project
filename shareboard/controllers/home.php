<?php
//Home Controller

//Extend our Base Controller
class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel();
        $this->ReturnView($viewmodel->Index(), true);
    }
}