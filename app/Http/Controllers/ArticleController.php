<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ArticleController extends RenderController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = new Collection();
        $slider->background = '/images/slider-bg.png';
        $slider->title = 'Ứng dụng tự học nhân tướng trên điện thoại';
        $slider->description = 'Cảm giác vốn không ổn định, con người lại luôn thay đổi.
         Để việc đánh giá được chính xác, chúng ta cần một phương pháp logic và khách quan.';

        $about = new Collection();
        $about->gg = new Collection();
        $about->gg->button = '/images/btn_gg_play.png';
        $about->gg->greeting = 'Get it on';
        $about->gg->name = 'Google play';
        $about->gg->link = 'https://translate.google.com/#vi/en/link%20%C4%91%C3%A2y%20th%C3%A2y!%20%3Av';

        $about->apple = new Collection();
        $about->apple->button = '/images/btn_app_store.svg';
        $about->apple->greeting = 'Download on the';
        $about->apple->name = 'App Store';
        $about->apple->link = 'https://translate.google.com/#vi/en/link%20%C4%91%C3%A2y%20th%C3%A2y!%20%3Av';

        $articleApps = new Collection();
        $articlePromotions = new Collection();
        foreach (range(1, 5) as $index) {
            $article = new Model();
            $article->title = 'This is title of the article ' . $index;
            $article->cover = '/images/story_cover.png';
            $article->content = 'This is sentence 1 of the article ' . $index
                . '. This is sentence 2 of the article ' . $index
                . '. This is sentence 3 of the article ' . $index
                . '. This is sentence 4 of the article ' . $index
                . '. This is sentence 5 of the article ' . $index
                . '. This is sentence 6 of the article ' . $index;
            $article->updated_at = Carbon::now();

            $tags = new Collection();
            foreach (range(1, 3) as $idx) {
                $tag = new Model();
                $tag->name = 'Tag ' . $idx;
                $tag->slug = 'tag-' . $idx;

                $tags->push($tag);
            }
            $article->tags = $tags;

            $articleApps->push($article);
            $articlePromotions->push($article);
        }

        $this->viewData(compact('articleApps', 'articlePromotions', 'slider', 'about'));

        return $this->renderView('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function tag($slug)
    {
    }

    public function loadMore(Request $request)
    {

    }
}
