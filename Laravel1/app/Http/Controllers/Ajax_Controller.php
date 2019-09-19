<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajax_Controller extends Controller
{
    $data['jurusan'] = \App\Jurusan::all();
    $result['data'] = $data;
    $result['response_code'] = 200;
    echo json_encode($result);
}

public function save_kelas()
{
	# code...
}

public function get-kelas()
{
	# code...
}