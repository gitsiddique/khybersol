<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $validator = Validator::make($request->all(), [
                'upload' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp,mp4,webm,ogg,mov|max:40960',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'error' => [
                        'message' => $validator->errors()->first('upload')
                    ]
                ]);
            }

            $path = $request->file('upload')->store('media', 'public');
            $url = Storage::url($path);

            return response()->json([
                'url' => $url
            ]);
        }

        return response()->json([
            'error' => [
                'message' => 'The image upload failed.'
            ]
        ]);
    }
}
