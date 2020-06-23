<?php


namespace App\Presenters;


use Illuminate\Database\Eloquent\Model;

class BasePresenter
{
    /**
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function __get($name)
    {
        if (method_exists($this, $name)) {
            return $this->{$name}();
        }

        return null;
    }
}