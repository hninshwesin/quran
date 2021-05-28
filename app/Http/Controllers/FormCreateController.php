<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Database\Seeders\QuranSeeder;
use Illuminate\Support\Str;

class FormCreateController extends Controller
{
    public function index() {
        return view('formcreate');
    }

    public function create(Request $request) {

        // 'regex:/^\S*$/u'

        $request->validate([
            'modelName' => ['required', 'string', 'max:255', 'alpha', 'alpha_dash']
        ]);

        $validate = $request->input('modelName');

        $validatedData = Str::ucfirst(strtolower($validate));

        $user_model = UserModel::where('model_name', $validatedData)->first();
        // dd($user_model);

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

            $authname = $validatedData;
            $filename=base_path()."/public/jsonFile/$authname.json";
            $json_data = json_encode($data);
            file_put_contents( "$filename", $json_data);

            $CMD = 'php ' .base_path().'/artisan infyom:scaffold '.$authname.' --fieldsFile='.base_path().'/public/jsonFile/'.$authname.'.json --paginate=10 --no-interaction';
            // dd($CMD);
            shell_exec($CMD);
            Artisan::call("migrate");

            $relation = [];
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
            array_push($relation,$id);

            $realate = strtolower($authname);

            $model_id=[
                "name"=>"{$realate}_id",
                "dbType"=>"integer:unsigned:foreign,{$realate}s,id",
                "htmlType"=> "number",
                "relation" => "mt1,{$authname},{$realate}_id,id",
                "validations"=> null,
                "searchable"=> true,
                "fillable"=> true,
                "primary"=> false,
                "inForm"=> true,
                "inIndex"=> true,
                "inView"=> true
            ];
            array_push($relation,$model_id);

            $heading=[
                "name"=>"heading",
                "dbType"=>"string",
                "htmlType"=> "text",
                "validations"=> null,
                "searchable"=> true,
                "fillable"=> true,
                "primary"=> false,
                "inForm"=> true,
                "inIndex"=> true,
                "inView"=> true
            ];
            array_push($relation,$heading);

            $notes=[
                "name"=>"notes",
                "dbType"=>"string:nullable",
                "htmlType"=> "text",
                "validations"=> null,
                "searchable"=> true,
                "fillable"=> true,
                "primary"=> false,
                "inForm"=> true,
                "inIndex"=> true,
                "inView"=> true
            ];
            array_push($relation,$notes);

            $files=[
                "name"=>"files",
                "dbType"=>"string:nullable",
                "htmlType"=> "file",
                "validations"=> null,
                "searchable"=> true,
                "fillable"=> true,
                "primary"=> false,
                "inForm"=> true,
                "inIndex"=> true,
                "inView"=> true
            ];
            array_push($relation,$files);

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
            array_push($relation,$created_at);

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
            array_push($relation,$updated_at);

            $filename=base_path()."/public/jsonFile/{$authname}_footnote.json";
            $relation_data = json_encode($relation);
            file_put_contents( "$filename", $relation_data);
            $relationship_model = 'php ' .base_path().'/artisan infyom:scaffold '.$authname.'Footnote --fieldsFile='.base_path().'/public/jsonFile/'.$authname.'_footnote.json';
            // dd($relationship);
            shell_exec($relationship_model);
            Artisan::call("migrate");

            // $relationship_migration = 'php ' .base_path().'/artisan infyom:migration '.$authname.'_footnotes --fieldsFile='.base_path().'/public/jsonFile/'.$authname.'_footnote.json';
            // shell_exec($relationship_migration);
            // Artisan::call("migrate");

            // $table = 'php ' .base_path().'/artisan infyom:scaffold '.$realate.'_footnotes --tableName='.$realate.'_footnotes' ;
            // shell_exec($table);

            $model = new QuranSeeder($authname);
            $model->run();

            $user_model = new UserModel();
            $user_model->user_id=Auth::user()->id;
            $user_model->user_name=Auth::user()->name;
            $user_model->model_name=$authname;
            $user_model->save();

            $user_model = new UserModel();
            $user_model->user_id=Auth::user()->id;
            $user_model->user_name=Auth::user()->name;
            $user_model->model_name="{$authname}Footnote";
            $user_model->save();


            return redirect()->route('home')->with('message', 'Successfully created');
        }else {
            return redirect()->back()->with('error','This name is not available, Please choose another name!');
        } 
    }
}
