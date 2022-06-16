<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;

class EditController extends BaseController
{
   public function __invoke(Home $home)
   {

       return view('admin.home.edit',compact('home'));

   }
}
