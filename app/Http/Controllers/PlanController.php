<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\PlanShopForm;

class PlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $plans = Plan::where('content','like','%'.$keyword . '%')->paginate(2);
        }else{
            $plans = Plan::select('*')->paginate(2);
        }
            return view('plan.index',['plans' => $plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('plan.new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanShopForm $request)
    {
        $plan = new Plan();
        $user = \Auth::user();

        $plan->content = $request->content;
        $plan->user_name = $request->user_name;
        $plan->user_id = $user->id;
        $plan->save();
        return redirect()->route('plan.show',['id' => $plan->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Plan $plan)
    {
        $message = 'This is your plan ' . $id;
        $plan = Plan::find($id);
        return view('plan.show', ['message' => $message, 'plan' => $plan]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Plan $plan)
    {
        $message = 'This is your plan ' . $id;
        $plan = Plan::find($id);
        return view('plan.edit', ['message' => $message, 'plan' => $plan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Plan $plan)
    {
        $plan = Plan::find($id);

        $plan->content = $request->content;
        $plan->user_name = $request->user_name;
        $plan->save();
        return redirect()->route('plan.show',['id' => $plan->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Plan $plan)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return redirect('/plans');
    }
}
