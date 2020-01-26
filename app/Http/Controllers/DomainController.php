<?php

namespace App\Http\Controllers;

use App\Classes\Connections\DomainApiConnection;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index(DomainApiConnection $connection)
    {
        $res = $connection->domainName('momburger.com')->call();
        return dd($res);
    }

    public function create()
    {
        return view('domain.create');
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
