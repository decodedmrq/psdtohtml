<?php namespace App\Repositories;

/**
 * Created by IntelliJ IDEA.
 * User: hnc
 * Date: 2/17/2017
 * Time: 10:33 AM
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Repository
{

    protected $model = null;

    /**
     * @return Model
     */
    protected function instance(): Model
    {
        if (is_null($this->model)) {
            throw new \InvalidArgumentException('Please set the $model parameter on your controller');
        }

        return app($this->model);
    }

    public function success($message, $data = null)
    {
        $result = [
            'message' => $message,
            'data' => $data,
            'success' => true,
        ];

        return $result;
    }

    public function failed($message, $data = null)
    {
        $result = [
            'success' => false,
            'message' => $message,
            'data' => $data,
        ];

        return $result;
    }


}