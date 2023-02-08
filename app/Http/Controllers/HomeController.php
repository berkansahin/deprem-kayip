<?php

namespace App\Http\Controllers;

use App\Http\Requests\LostRequest;
use App\Jobs\LostJob;
use App\Models\Lost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = Lost::orderBy('id', 'desc')->limit(10)->get();

        return view('home', compact('items'));
    }

    public function save()
    {
        return view('save');
    }

    public function saveForm(LostRequest $request)
    {
        $params = $request->validated();

        LostJob::dispatch($params);

        return redirect(route('save'))->with('status', true);
    }

    public function search()
    {
        $items = Lost::when(!blank(request('name')), function ($query) {
            $query->where('full_name', 'like', '%' . request('name') . '%');
        })->when(!blank(request('city')), function ($query) {
            $query->where('city', 'like', '%' . request('city') . '%');
        })->when(!blank(request('district')), function ($query) {
            $query->where('district', 'like', '%' . request('district') . '%');
        })->when(!blank(request('contact')), function ($query) {
            $query->where('contact', 'like', '%' . request('contact') . '%');
        })->orderBy('id', 'desc')->paginate();

        return view('search', compact('items'));
    }
}
