<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use DB;  
class MapController extends Controller
{
    public function insertReq(Request $Request){
        if(!$Request->has('id') || !$Request->has('desc')) {
            return view('page404');
        }  
         $task = new Task;
        $task->id = $Request->input('id');
         $task->description = $Request->input('desc');
         $task->save();
        return Task::all();
    }
    public function deleteReq(Request $Request){
        if(!$Request->has('id')){
            return view('page404');
        }
        DB::delete('DELETE FROM tasks WHERE id = ?', [$Request->input('id')]);
        return Task::all();
    }

}
