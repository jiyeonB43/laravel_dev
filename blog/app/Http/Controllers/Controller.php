<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function AddControllerFuntion1()
  {
    echo 'test 1';
  }


  public function AddControllerFuntion2()
  {
    echo 'test 2';
  }

  public function AddControllerFuntion3()
  {
    echo 'test 3';
  }


  public function AddControllerFuntion4()
  {
    echo 'test 4';
  }


  public function AddControllerFuntion5()
  {
    echo 'test 4';
  }


  public function AddControllerFuntion6()
  {
    echo 'test 6';
  }


  public function AddControllerFuntion7()
  {
    echo 'test 7';
  }


  public function AddControllerFuntion8()
  {
    echo 'test 8';
  }
}

