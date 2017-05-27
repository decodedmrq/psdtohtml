<?php

namespace App\Http\Controllers;

use App\Models\Model;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ArticleController extends RenderController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function index()
    {
        return $this->renderView('article.index');
    }

    public function load(Request $request)
    {
        $page = $request->get('page', 1);
        //Create fake data
        $data = [];
        $faker = Factory::create();
        for ($i = 1; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(),
                'short_description' => str_limit($faker->text(), 150, ' '),
                'cover_image' => $faker->imageUrl(697, 350),
                'updated_at' => Carbon::now()->format('g:i A d/m/Y'),
                'alias' => str_slug($faker->sentence()),
                'category' => [
                    'name' => $faker->word,
                ],
                'is_like' => $i % 2 == 0,
            ];
        }
        $articles = [
            'current_page' => $page,
            'last_page' => $page + 5,
            'data' => $data,
            'next_page_url' => route('article.load', ['page' => $page + 1]),
        ];

        return response()->json($articles);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param string $alias
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(string $alias)
    {
        $faker = Factory::create();
        $article = [
            'title' => $faker->sentence(),
            'short_description' => str_limit($faker->text(), 150, ' '),
            'cover_image' => $faker->imageUrl(697, 350),
            'updated_at' => Carbon::now()->format('g:i A d/m/Y'),
            'alias' => str_slug($faker->sentence()),
            'category' => [
                'name' => $faker->word,
            ],
            'content' => $faker->text(1000),
            'is_like' => !!rand(0, 1),
        ];
        $this->viewData([
            'article' => $article,
        ]);

        return $this->renderView('article.show');
    }

    public function tag($slug)
    {
    }

    public function loadMore(Request $request)
    {

    }
}
