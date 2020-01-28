<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Requests\Domains\DomainStoreRequest;
use App\User;

class DomainController extends Controller
{
    public function index()
    {
        $domains = auth()->user()->domain()->index();
        return view('domain.index', compact('domains'));
    }

    public function show(Domain $domain)
    {
        return $domain;
    }

    public function create()
    {
        return view('domain.create');
    }

    public function store(DomainStoreRequest $request)
    {

        $user = auth()->user();
        $user->domain()->add($request);

        return redirect()->route('domains.index');
    }

    public function destroy(Domain $domain)
    {
        // Delete
    }
}
