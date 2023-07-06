<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Podkast;
use App\Models\Post;
use App\Models\User;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $authorCount = Author::count();
        $bookCount = Book::count();
        $postCount = Post::count();
        $podcastCount = Podkast::count();
        $genreCount = Genre::count();
        $webCount = User::where('device', 'web')->count();
        $androidCount = User::where('device', 'android')->count();
        $iosCount = User::where('device', 'ios')->count();
        $data = "";
        $data = "['Web users'," . $webCount . "],";
        $data .= "['Android users'," . $androidCount . "],";
        $data .= "['Ios users'," . $iosCount . "]";
        $chartData = $data;
        $user = User::whereNotNull('last_seen')->orderBy('last_seen', 'desc')->get();
        return view('Admin.index', compact('user', 'userCount', 'authorCount', 'bookCount', 'postCount', 'podcastCount', 'genreCount', 'chartData'));
    }
}
