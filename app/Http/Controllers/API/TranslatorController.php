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

    public function all_translation(Request $request)
    {
        $chapter = $request->input('chapter');
        $verse = $request->input('verse');
        $translators = UserModel::where('model_name', 'not like', '%Footnote')->get();
        $translators_count = UserModel::where('model_name', 'not like', '%Footnote')->count();

        $translation_data = [];

        foreach ($translators as $key => $translator) {
            $translator_name = $translator->model_name;

            $model_name = 'App\\Models\\' . $translator_name;

            $translation[$key] = $model_name::when($chapter, function ($query) use ($chapter) {
                return $query->where('chapter', $chapter);
            })
                ->when($verse, function ($query) use ($verse) {
                    return $query->where('verse', $verse);
                })->get();
            // foreach ($translation as $data) {
            //     $result = [
            //         'id' => $data->id,
            //         'chapter' => $data->chapter,
            //         'verse' => $data->verse,
            //         'translation' => $data->translation,
            //         'translator' => $translator_name
            //     ];
            //     array_push($translation_data, $result);
            // }
        }
        // dd($translation);
        for ($i = 0; $i < $translation[0]->count(); $i++) {
            for ($j = 0; $j < $translators_count; $j++) {
                if (isset($translation[$j][$i])) {
                    $result = [
                        'id' => $translation[$j][$i]->id,
                        'chapter' => $translation[$j][$i]->chapter,
                        'verse' => $translation[$j][$i]->verse,
                        'translation' => $translation[$j][$i]->translation,
                        'translator' => $translators[$j]->model_name
                    ];
                    array_push($translation_data, $result);
                }
            }
        }

        // dd($translation_data);

        return response()->json([
            'data' => $translation_data
        ]);

        // return new TranslationResourceCollection($translation);
    }
}
