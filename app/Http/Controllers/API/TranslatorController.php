<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\FootnoteResource;
use App\Http\Resources\FootnoteResourceCollection;
use App\Http\Resources\TranslationResourceCollection;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TranslatorController extends Controller
{
    public function translator()
    {
        $translator = UserModel::where('model_name', 'not like', '%Footnote')->get();

        return response()->json(['translator' => $translator]);
    }

    public function translate_details(Request $request)
    {
        $translator_name = $request->input('translator_name');

        $model = UserModel::where('model_name', $translator_name)->first();

        if ($model) {
            $model_name = 'App\\Models\\' . $translator_name;
            // $model_lc = lcfirst($model);

            // $model_footnote = lcfirst($model_name) . '_footnotes';

            $translation = $model_name::get();

            return new TranslationResourceCollection($translation);
        }
    }

    public function footnotes(Request $request)
    {
        $translator_name = $request->input('translator_name');
        $translation_id = $request->input('translation_id');

        $model = UserModel::where('model_name', $translator_name)->first();

        if ($model) {
            $model_footnote = 'App\\Models\\' . $model->model_name . 'Footnote';

            $model_lc = lcfirst($model->model_name) . '_id';

            $footnote = $model_footnote::where($model_lc, $translation_id)->get();

            return new FootnoteResource($footnote);
        }
    }
}
