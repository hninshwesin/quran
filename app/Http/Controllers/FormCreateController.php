<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Database\Seeders\QuranSeeder;

class FormCreateController extends Controller
{
    public function index() {
        return view('formcreate');
    }

    public function create(Request $request) {

        // 'regex:/^\S*$/u'

        $validatedData = $request->validate([
            'modelName' => ['required', 'string', 'max:255', 'regex:/^\S*$/u']
        ]);

        $user_model = UserModel::where('model_name', $validatedData)->first();

        if(!$user_model) {

            $data = [];

            $id=[
                "name"=>"id",
                "dbType"=>"increments",
                "htmlType"=> null,
                "validations"=> null,
                "searchable"=> false,
                "fillable"=> false,
                "primary"=> true,
                "inForm"=> false,
                "inIndex"=> false,
                "inView"=> false
            ];
            array_push($data,$id);

            $chapter=[
                "name" => "chapter",
                "dbType" => "integer",
                "htmlType" => "number",
                "validations" => "required",
                "searchable" => true,
                "fillable" => true,
                "primary" => false,
                "inForm" => true,
                "inIndex" => true,
                "inView" => true
            ];
            array_push($data,$chapter);

            $verse=[
                "name" => "verse",
                "dbType" => "integer",
                "htmlType" => "number",
                "validations" => "required",
                "searchable" => true,
                "fillable" => true,
                "primary" => false,
                "inForm" => true,
                "inIndex" => true,
                "inView" => true
            ];
            array_push($data,$verse);

            $translation=[
                "name" => "translation",
                "dbType" => "string",
                "htmlType" => "text",
                "validations" => null,
                "searchable" => true,
                "fillable" => true,
                "primary" => false,
                "inForm" => true,
                "inIndex" => true,
                "inView" => true
            ];
            array_push($data,$translation);

            $created_at=[
                "name"=> "created_at",
                "dbType"=> "timestamp",
                "htmlType"=> null,
                "validations"=> null,
                "searchable"=> false,
                "fillable"=> false,
                "primary"=> false,
                "inForm"=> false,
                "inIndex"=> false,
                "inView"=> true
            ];
            array_push($data,$created_at);

            $updated_at=[
                "name"=> "updated_at",
                "dbType"=> "timestamp",
                "htmlType"=> null,
                "validations"=> null,
                "searchable"=> false,
                "fillable"=> false,
                "primary"=> false,
                "inForm"=> false,
                "inIndex"=> false,
                "inView"=> true
            ];
            array_push($data,$updated_at);

            $authname = $request->modelName;
            $filename=base_path()."/public/jsonFile/$authname.json";
            $json_data = json_encode($data);
            file_put_contents( "$filename", $json_data);

            $CMD = 'php ' .base_path().'/artisan infyom:scaffold '.$authname.' --fieldsFile='.base_path().'/public/jsonFile/'.$authname.'.json --paginate=10 --no-interaction';
            // dd($CMD);
            shell_exec($CMD);
            Artisan::call("migrate");
            $model = new QuranSeeder($authname);
            $model->run();

            $user_model = new UserModel();
            $user_model->user_id=Auth::user()->id;
            $user_model->user_name=Auth::user()->name;
            $user_model->model_name=$authname;
            $user_model->save();

            return redirect()->route('home')->with('message', 'Successfully created');
        }else {
            return redirect()->back()->with('error','This name is not available, Please choose another name!');
        } 
    }
}
