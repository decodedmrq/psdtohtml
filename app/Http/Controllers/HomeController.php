<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Carbon\Carbon;
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
        $story->name = trans('string.story.reason');
        $story->section_1 = 'Nhiều năm trước, trong quá trình tham vấn cho các doanh nghiệp, chúng tôi - một nhóm những nhà tư vấn chiến lược, nhân sự (và cả thầy bói) - nhận ra rằng: Cốt tuỷ của một doanh nghiệp không nằm ở sản phẩm, thương hiệu, hay những giá trị cao xa nào, mà nằm ở chính những nhân sự tạo nên doanh nghiệp đó. Nhân sự phải được tuyển chọn và sắp xếp, sao cho "đúng người - đúng việc - đúng thời điểm".';
        $story->read_more_link = '#';

        $features = trans('array.features');

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

        $publishDate = Carbon::create(2017, 6, 15, 12, 00);
        $timeRemaining = Carbon::now()->diff($publishDate);
        $timeRemaining->d = Carbon::now()->diffInDays($publishDate);

        $this->viewData(compact('slider', 'about', 'story', 'features', 'feedbacks', 'partners', 'timeRemaining'));

        return $this->renderView('home.index');
    }

    public function about()
    {
        $about = new Collection();
        $about->introduce = new Collection();
        $about->vision = new Collection();
        $about->mission = new Collection();
        $faker = Factory::create();
        $about->introduce->title = $faker->sentence(10);
        $about->introduce->body = $faker->text(10000);
        $about->vision->title = $faker->sentence(10);
        $about->vision->body = $faker->text(10000);
        $about->mission->title = $faker->sentence(10);
        $about->mission->body = $faker->text(10000);

        $this->viewData([
            'about' => $about,
        ]);

        return $this->renderView('about.index');
    }
}
