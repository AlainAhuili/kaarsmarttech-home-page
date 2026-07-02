<?php

namespace App\Presentation;

class Renderer
{
    public function renderTitle(string $title): string
    {
        return htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    public function renderText(string $text): string
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }

    public function renderSvgIcon(string $pathData): string
    {
        return sprintf('<svg class="w-6 h-6 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="%s"></path></svg>', htmlspecialchars($pathData, ENT_QUOTES, 'UTF-8'));
    }

    public function renderProjects(array $projects): string
    {
        $cards = array_map(
            function (array $project): string {
                return sprintf(
                    '<div class="glass-card p-8 rounded-2xl hover:border-sky-500/50 transition-all duration-300 group">%s<h3 class="text-xl font-bold text-white">%s</h3><p class="mt-3 text-slate-400 text-sm">%s</p></div>',
                    $this->renderProjectIcon($project['icon']),
                    $this->renderTitle($project['title']),
                    $this->renderText($project['description'])
                );
            },
            $projects
        );

        return sprintf('<div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 mb-24">%s</div>', implode('', $cards));
    }

    private function renderProjectIcon(string $pathData): string
    {
        return sprintf(
            '<div class="w-12 h-12 bg-sky-500/10 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">%s</div>',
            $this->renderSvgIcon($pathData)
        );
    }
}
