<?php

namespace App\Business;

class Page
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getTitle(): string
    {
        return $this->data['title'];
    }

    public function getDescription(): string
    {
        return $this->data['description'];
    }

    public function getHero(): array
    {
        return $this->data['hero'];
    }

    public function getProjects(): array
    {
        return $this->data['projects'];
    }

    public function getNewsletter(): array
    {
        return $this->data['newsletter'];
    }

    public function getContactEmail(): string
    {
        return $this->data['contactEmail'];
    }
}
