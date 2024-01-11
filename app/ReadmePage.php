<?php

namespace App;

use Autodocs\DataFeed\JsonDataFeed;
use Autodocs\Page\ReferencePage;

class ReadmePage extends ReferencePage
{
    public JsonDataFeed $dataFeed;
    public function loadData(array $parameters = []): void
    {
        $this->dataFeed = $this->autodocs->getDataFeed('profile.json');
    }

    public function getName(): string
    {
        return "readme";
    }

    public function getContent(): string
    {
        return $this->autodocs->stencil->applyTemplate('readme', [
            'title' => $this->dataFeed->json['user'],
            'about' => $this->dataFeed->json['bio'],
            'projects_list' => $this->getProjects(),
        ]);
    }

    public function getProjects(): string
    {
        $content = "";
        foreach ($this->dataFeed->json['projects'] as $project => $info) {
            $content .= "- [$project]({$info['link']}): {$info['description']}\n"; // returns Markdown list
        }

        return $content;
    }

    public function getSavePath(): string
    {
        return 'README.md';
    }
}
