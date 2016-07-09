<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class WelcomeController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('vendor.installer.welcome');
    }

    public function key(){
        if(!file_exists(storage_path('keys'))){
            return redirect()->route("LaravelInstaller::environment");
        }
        return view('vendor.installer.key');
    }

    public function keySave(Request $request){
        if(sizeof($request->get('key'))!=4) return redirect()->route("LaravelInstaller::key")->with('message',"Please enter key");
        foreach ($request->get('key') as $key){
            if($key=="" || $key==null){
                return redirect()->route("LaravelInstaller::key")->with('message',"Please enter key");
            }
        }
        $secrets_key = implode("-",$request->get('key'));
        $key_file = File::get(storage_path('keys/keys.json'));
        $s_keys = json_decode($key_file);
        $serial_keys = $s_keys->keys;
        if(in_array($secrets_key,$serial_keys)){
            return redirect()->route("LaravelInstaller::environment");
        }else{
            return redirect()->route("LaravelInstaller::key")->with('message',"Please enter correct keys");
        }
    }
}
