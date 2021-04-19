<?php

namespace Modules\Dashboard\Controllers;

use App\Controllers\BaseController;


class DashboardController extends BaseController
{
	public function index()
	{
		return view("\Modules\Dashboard\Views\admin\dashboard");
	}


	

}
