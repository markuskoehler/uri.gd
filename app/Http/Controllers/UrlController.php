<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urls = Url::whereUserId(auth()->user()->id)->get();

        return view('urls.index', compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('urls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'slug'        => 'unique:urls|max:20',
            'title'       => 'required|max:50',
            'description' => 'nullable|max:255',
            'link'        => 'required|max:2000',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('urls.create')
                ->withErrors($validator)
                ->withInput($request->all());
        } else {
            // store
            $url = new Url();
            $url->slug = $request->input('slug') ?? $this->random_slug();
            $url->title = $request->input('title');
            $url->description = $request->input('description');
            $url->link = $request->input('link');
            $url->user_id = auth()->user()->id;
            $url->save();

            // redirect
            session()->flash('message', 'Successfully created URL!');

            return redirect()->route('urls.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = Url::withUuid($id)->first();

        return view('urls.show', compact('url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = Url::withUuid($id)->first();

        return view('urls.edit', compact('url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'slug'        => 'unique:urls|max:20',
            'title'       => 'required|max:50',
            'description' => 'nullable|max:255',
            'link'        => 'required|max:2000',
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('urls.edit', compact('id'))
                ->withErrors($validator)
                ->withInput($request->all());
        } else {
            // store
            $url = Url::withUuid($id)->first();
            $url->slug = $request->input('slug') ?? $this->random_slug();
            $url->title = $request->input('title');
            $url->description = $request->input('description');
            $url->link = $request->input('link');
            $url->save();

            // redirect
            session()->flash('message', 'Successfully updated nerd!');

            return redirect()->route('urls.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $url = Url::withUuid($id)->first();
        $url->delete();

        // redirect
        session()->flash('message', 'Successfully deleted the URL!');

        return redirect()->route('urls.index');
    }

    /**
     * @return string
     */
    private function random_slug(): string
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        $max = strlen($characters) - 1;
        for ($i = 0; $i < mt_rand(5, 20); $i++) {
            $string .= $characters[mt_rand(0, $max)];
        }

        return $string;
    }
}
