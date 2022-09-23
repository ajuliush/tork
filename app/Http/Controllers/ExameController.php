<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Exam::all();
        return view('dashboard', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        if ($request->type_1) {
            $type_1 =  $request->type_1 = .25;
        } else {
            $type_1 =  $request->type_1 = .05;
        }
        if ($request->type_3_a) {
            $type_3_a =  $request->type_3_a = .25;
        } else {
            $type_3_a =  $request->type_3_a = .05;
        }
        if ($request->type_3_b) {
            $type_3_b =  $request->type_3_b = .25;
        } else {
            $type_3_b =  $request->type_3_b = .05;
        }
        if ($request->type_3_c) {
            $type_3_c =  $request->type_3_c = .25;
        } else {
            $type_3_c =  $request->type_3_c = .05;
        }
        if ($request->type_3_d) {
            $type_3_d =  $request->type_3_d = .25;
        } else {
            $type_3_d =  $request->type_3_d = .05;
        }
        $total =  $type_1 + $type_3_a + $type_3_b + $type_3_c + $type_3_d;
        Exam::create([
            'user_id' => Auth::user()->id,
            'type_1' =>  $type_1,
            'type_2' => json_encode($request->type_2),
            'type_3_a' => $type_3_a,
            'type_3_b' => $type_3_b,
            'type_3_c' => $type_3_c,
            'type_3_d' => $type_3_d,
            'total' =>  $total,
        ]);
        return back()->with('success', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
