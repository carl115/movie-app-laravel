<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideos()
    {
        return 'Videos';
    }

    public function getVideo()
    {
        return 'Video';
    }

    public function create()
    {
        return 'Create videos';
    }

    public function update()
    {
        return 'Update videos';
    }

    public function delete()
    {
        return 'Delete videos';
    }
}
