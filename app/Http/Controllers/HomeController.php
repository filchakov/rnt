<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var \Illuminate\Support\Collection
     */
    protected $data_for_render = [];

    protected $form_id = null;

    public function __construct()
    {
        $this->data_for_render = collect();

        $this->form_id = '324234324324';

        $this->data_for_render->pull('form_id' , $this->form_id);
    }

    public function index(){
        return view('which_role', compact('teams'));
    }

    public function application($type, Request $request){
        $teams = Team::all();

        $club = Team::where('id', $request->get('club', 0))->first();

        //Club already selected
        if(!empty($club)){

            if ($type == 'host') {
                return $this->applicationForHost($request);
            } else {
                return $this->applicationForCouche($request);
            }

        } else {

            $this->data_for_render['type'] =  $type;
            $this->data_for_render['teams'] =  $teams;

            return view('which_team', $this->data_for_render->toArray());
        }

    }

    public function processor(Request $request){
        echo '<pre>';
        var_dump($request->toArray());
        die;
    }

    private function applicationForHost($request)
    {
        return view('application.host.step_1');
    }

    private function applicationForCouche($request)
    {
    }


}
