<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request){
        $categories = null;
        $categoryName = null;
        if ($request->has('category_name')){
            $categoryName = $request->category_name;
            $categories = $this->category->where('name', 'like', '%'.$categoryName.'%')->paginate(2);
            $categories->appends(['category_name' => $categoryName]);
        }else{
            $categories = $this->category->paginate(5);
        }
        return view('admin.category.index', compact('categories', 'categoryName'));
    }

    public function create(){
        $recusive = new Recusive($this->category);
        $htmlOptions = $recusive->selectRecusive();
        return view('admin.category.add', compact('htmlOptions'));
    }

    public function store(CategoryAddRequest $request){
        $message_code = -1;
        try {
            $this->category->create([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name)
            ]);
            $message_code = 1;
        }catch (\Exception $e){
            Log::error('Message: '.$e->getMessage().', Line: '.$e->getLine());
        }
        return redirect()->route('categories.index', compact('message_code'));
    }
}
