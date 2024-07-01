<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Services\ImagesServices;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyController extends Controller
{
    protected $imagesServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ImagesServices $imagesServices)
    {
        $this->imagesServices = $imagesServices;
    }
    public function index()
    {
        $data = User::findOrFail(auth()->id())->load('Company');
        return Inertia::render("Admin/companie/Index", compact('data'));
    }
    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->id())->load('Company');

        if ($request->hasFile('image')) {
            $picture = $request->file('image');

            if ($user->Company->Image) {
                $this->imagesServices->deleteImageFromDirectory($user->Company->Image->url, 'images/Company');
                $image = $this->imagesServices->uploadImage($picture, 'images/Company');
                $user->Company->Image()->update(['url' => $image]);
            }else {
                $image = $this->imagesServices->uploadImage($picture, 'images/Company');
                $new_image = new Image(["url" => $image]);
                $user->Company->Image()->save($new_image);
            }
        }

        return redirect()->back()->with('success', 'Company image updated successfully.');
    }
}
