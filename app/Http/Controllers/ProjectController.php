<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ProjectsImport;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    public function importView(){
        try{
            return view('importFile');
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }

    public function importFile(Request $request){
       
        
         try{
           Excel::import(new ProjectsImport,$request->file('file'));
           return back();
        }
        catch(\Exception $e){

            return back()->with('error',$e->getMessage());
        }
    }
}
