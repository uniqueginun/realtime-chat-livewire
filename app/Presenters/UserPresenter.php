<?php


namespace App\Presenters;


class UserPresenter extends BasePresenter
{
    public function name()
    {
        return (auth()->id() === $this->model->id) ? 'You' : $this->model->name;
    }
}