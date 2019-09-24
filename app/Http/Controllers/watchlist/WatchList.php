<?php

namespace App\Http\Controllers\watchlist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WatchList extends Controller{

    public function index(){
        return view('watchlist/index', \compact('response'));
    }

    public function store(Request $request){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("EXEC Sp_TreePerId ?, ?",array(14960100, 201909));
        \DB::disconnect('sqlsrv');
        return \Response::json($response);
    }

    public function reloadTab(Request $request){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("EXEC Sp_TreePerId_Watch ?, ?",array(14960100, 201909));
        \DB::disconnect('sqlsrv');
        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function addAssoc(Request $request){
        $associateid = $request->input("associated");
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select('SELECT * FROM Watch_List_Conf WHERE Owner_w = ? AND associateid = ?', array(14960100, $associateid));
            if(!empty($response)){
                $response = 0;
            }
            else{
                $response = $conection->insert('INSERT INTO Watch_List_Conf (Owner_w, associateid) VALUES (?, ?)', array(14960100, $associateid));
            }
        \DB::disconnect('sqlsrv');
        return \Response::json($response);
    }

    public function delAsoc(Request $request){
        $associateid = $request->id;
        $conection = \DB::connection('sqlsrv');
            $response = $conection->insert('DELETE FROM Watch_List_Conf WHERE Owner_w = ? AND associateid = ?', array(14960100, $associateid));
        \DB::disconnect('sqlsrv');
        return \Response::json($response);
    }
}
