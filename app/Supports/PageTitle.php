<?php

namespace App\Supports;


class PageTitle
{
    /**
     *
     * @var string
     */
    protected $title = '';

    /**
     *
     * @param string $title
     */
    public function setTitle(String $title)
    {
        $this->title = $title;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
