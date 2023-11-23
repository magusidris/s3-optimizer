<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $file)
    {
        $fileNameWithExtension = "{$file}.pdf";
        $userId = $request->user()->id;
        $url = Storage::disk('s3-private')->temporaryUrl(
            "files/{$userId}/$fileNameWithExtension",
            now()->addMinutes(5),
            [
                "ResponseContentType" => "application/octet-stream",
                "ResponseContentDisposition"    => "attachment; filename={$fileNameWithExtension}",
            ]
        );

        return redirect($url);
    }
}
