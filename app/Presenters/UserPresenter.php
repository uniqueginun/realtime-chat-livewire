<?php


namespace App\Presenters;


class UserPresenter extends BasePresenter
{
    public function name()
    {
        return (auth()->id() === $this->model->id) ? 'You' : $this->model->name;
    }

    public function avatar()
    {
        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->model->email ) ) ) . "?d=mm";
    }
}