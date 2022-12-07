<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


session_start();

function checkSessionValidity(){
        //print_r($_SESSION);
        $flag = false;
        if (!isset($_SESSION['is_login'])) {
            var_dump("is_login not set");
            $flag = true;
            return $flag;
        }
        if ($_SESSION['is_login'] !== true) {
            var_dump("is_login not true");
            session_destroy();
            $flag = true;
            return $flag;
        }
        
        if ($_SESSION['ip_address'] !== $_SERVER['REMOTE_ADDR']) {
            var_dump("ip address not valid");
            session_destroy();
            $flag = true;
            return $flag;
        }
        if (!isset($_SESSION['ip_address'])) {
            var_dump("ip not set");
            $flag = true;
            return $flag;
        }
        if ($_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
            var_dump("username not valid");
            session_destroy();
            $flag = true;
            return $flag;
        }
        if (!isset($_SESSION['user_agent'])) {
            var_dump("username not set");
            $flag = true;
            return $flag;
        }
        if (time() - $_SESSION['lastLogin'] > 43200) {
            var_dump("lifetime not valid");
            session_destroy();
            $flag = true;
            return $flag; 
        }
        if (!isset($_SESSION['lastLogin'])) {
            var_dump("time not set");
            $flag = true;
            return $flag;
        }
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $city = $geo["geoplugin_city"];
        if ($_SESSION['city'] !== $city) {
            var_dump("city not valid");
            session_destroy();
            $flag = true;
            return $flag;  
        }
        if (!isset($_SESSION['city'])) {
            var_dump("city not set");
            $flag = true;
            return $flag;
        }
        return $flag;
    }

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(checkSessionValidity() == true){
            return view('logout');
        }
        $adm = User::count();
        $acr = Acara::count();
        $son = Acara::where('date', '>=', Carbon::now())->count();
        return view('admin.dashboard.dashboard', compact('adm', 'acr', 'son'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
