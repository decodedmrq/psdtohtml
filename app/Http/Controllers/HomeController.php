<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class HomeController extends RenderController
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
        $about->gg->link = '#';

        $about->apple = new Collection();
        $about->apple->button = '/images/btn_app_store.svg';
        $about->apple->greeting = 'Download on the';
        $about->apple->name = 'App Store';
        $about->apple->link = '#';

        $story = new Collection();
        $story->image = '/images/story_cover.png';
        $story->name = 'Why do we use it?';
        $story->content = 'It is a long established fact that a reader will be distracted by the 
        readable content of a page when looking at its layout. 
        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
        as opposed to using \'Content here, content here\', making it look like readable English.
         Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, 
         and a search for';
        $story->read_more_link = '#';

        $features = new Collection();
        foreach (range(1, 5) as $index) {
            $feature = new Collection();
            $feature->image = '/images/feature_default.png';
            $feature->name = 'Feature ' . $index;
            $feature->content = 'This is sentence 1 of content of Feature ' . $index
                . '. This is sentence 2 of content of Feature ' . $index
                . '. This is sentence 3 of content of Feature ' . $index
                . '. This is sentence 4 of content of Feature ' . $index;
            $features->push($feature);
        }

        $feedbacks = new Collection();
        foreach (range(1, 3) as $index) {
            $feedback = new Collection();
            $feedback->image = '/images/avatar_default.png';
            $feedback->info = 'Feature ' . $index;
            $feedback->content = 'This is sentence 1 of content of Feedback ' . $index
                . '. This is sentence 2 of content of Feedback ' . $index;
            $feedbacks->push($feedback);
        }

        $partners = new Collection();
        foreach (range(1, 6) as $index) {
            $partner = new Collection();
            $partner->image = '/images/partner_default.png';
            $partner->name = 'Default partner';
            $partners->push($partner);
        }

        $this->viewData(compact('slider', 'about', 'story', 'features', 'feedbacks', 'partners'));

        return $this->renderView('home.index');
    }
}
