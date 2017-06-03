<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag as Category;
use Illuminate\Http\Request;

class NewsController extends RenderController
{
    protected $model = News::class;
    protected $numSidebarItem = 5;

    public function __construct()
    {
        $this->dataShare();
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function index()
    {
        return $this->renderView('news.index');
    }

    public function load()
    {
        $news = $this->instance()->with(['tagged'])
            ->where('title', 'like', '%' . $this->viewData['keyword'] . '%')
            ->paginate();

        return response()->json($news);
    }

    /**
     * Display the specified resource.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     * @internal param string $alias
     * @internal param Request $request
     * @internal param int $id
     */
    public function show(string $slug)
    {
        $news = $this->instance()->with(['tagged'])->where('slug', $slug)->first();
        if (!$news) {
            return redirect()->route('news.index');
        }
        $this->viewData([
            'news' => $news,
        ]);

        return $this->renderView('news.show');
    }

    public function category($slug)
    {
        $category = Category::whereSlug($slug)->first();
        if (!$category) {
            return redirect()->route('news.index');
        }
        $this->viewData['category'] = $category;

        return $this->renderView('category.show');
    }

    public function loadNewsCategory($slug)
    {
        $category = Category::whereSlug($slug)->first();
        if (!$category) {
            return redirect()->route('news.index');
        }

        $news = $this->instance()
            ->withAllTags([$category->name])
            ->with(['tagged'])->paginate();

        return response()->json($news);
    }

    private function dataShare()
    {
        $this->viewData['keyword'] = \request()->get('keyword', '');
        $this->viewData['popularNews'] = $this->instance()->orderBy('view_count', 'desc')->take($this->numSidebarItem)->get();
        $this->viewData['newestNews'] = $this->instance()->orderBy('view_count', 'desc')->take($this->numSidebarItem)->get();
    }
}
