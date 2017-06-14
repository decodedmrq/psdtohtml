<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag as Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class NewsController extends RenderController
{
    const VIEWED_NEWS = 'viewed_news';

    protected $model = News::class;
    protected $numSidebarItem = 5;
    protected $numRelatedItem = 5;

    public function __construct()
    {
        $this->dataShare();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @internal param Request $request
     * @internal param Request $request
     */
    public function index()
    {
        $this->setRecentViewed();

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
        $news->view_count += 1;
        $news->save();
        $this->setRecentViewed($news);

        return $this->renderView('news.show');
    }


    /**
     * show category
     *
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function category($slug)
    {
        $category = Category::whereSlug($slug)->first();
        if (!$category) {
            return redirect()->route('news.index');
        }
        $this->viewData['category'] = $category;
        $this->setRecentViewed();

        return $this->renderView('category.show');
    }

    /**
     * Paginate news in category
     *
     * @param $slug
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
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

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function related(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|numeric',
        ]);
        $id = $request->get('id');
        $news = $this->instance()->with(['tagged'])->find($id);
        if (!$news) {
            return response()->json([], Response::HTTP_BAD_REQUEST);
        }
        $tags = $news->tags->pluck('name')->toArray();
        $related = $this->instance()
            ->select('title', 'slug', 'id', 'preview_image')
            ->withAnyTag($tags)
            ->inRandomOrder()
            ->take($this->numRelatedItem)->get();

        return response()->json($related);
    }

    private function dataShare()
    {
        $this->viewData['keyword'] = \request()->get('keyword', '');
        $this->viewData['popularNews'] = $this->instance()->orderBy('view_count', 'desc')->take($this->numSidebarItem)->get();
    }

    private function setRecentViewed($news = null)
    {
        $recentViewedId = Cookie::get(Self::VIEWED_NEWS);
        if ($news) {
            $recentViewedId = $this->getRecentViewed($news);
        }
        $recentViewed = [];
        if ($recentViewedId) {
            $recentViewedIdString = implode(',', array_reverse($recentViewedId));
            $recentViewed = $this->instance()->whereIn('id', $recentViewedId)
                ->orderByRaw(DB::raw("FIELD(id, $recentViewedIdString)"))->get();
        }

        $this->viewData['recentViewed'] = $recentViewed;
        Cookie::queue(Cookie::forever(Self::VIEWED_NEWS, $recentViewedId));
    }

    private function getRecentViewed($news)
    {
        $viewedNews = Cookie::get(Self::VIEWED_NEWS);
        if (!$viewedNews) {
            $viewedNews = [$news->id];
        }
        $newsIndex = array_search($news->id, $viewedNews);

        if (!in_array($news->id, $viewedNews) && count($viewedNews) <= $this->numSidebarItem) {
            $viewedNews[] = $news->id;
        } else if (count($viewedNews) <= $this->numSidebarItem) { //Move news Id to top of array
            unset($viewedNews[$newsIndex]);
            $viewedNews[] = $news->id;
        }

        return $viewedNews;
    }
}
