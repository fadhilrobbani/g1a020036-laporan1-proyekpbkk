<?php

namespace Model;

class Thread
{
    public string $id;
    public string $title;
    public string $description;

    public function __construct($id, $title, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }
}
