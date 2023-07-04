<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __invoke()
    {

    


    return view('admin.index');


}
}
