<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function viewCV()
    {
        $path = 'CV_PHP_NguyenThiNhuY.pdf';
        $name_file = "CV_BackEnd_NguyenThiNhuY.pdf";
        $mim_doc = 'application/pdf';
        if (!Storage::disk('public')->exists($path)) {
            return false;
        }
        return Storage::disk('public')->response($path, $name_file, [
            'Content-Type' => $mim_doc,
        ]);
    }
    public function downloadCV()
    {
        $path = 'CV_PHP_NguyenThiNhuY.pdf';
        $name_file = "CV_BackEnd_NguyenThiNhuY.pdf";
        $mim_doc = 'application/pdf';
        if (!Storage::disk('public')->exists($path)) {
            return false;
        }
        return Storage::disk('public')->download($path, $name_file, [
            'Content-Type' => $mim_doc,
            'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'attachment; filename="' . $name_file . '"',
        ]);
    }

}
