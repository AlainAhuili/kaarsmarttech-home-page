<?php

require_once __DIR__ . '/../app/data/content.php';
require_once __DIR__ . '/../app/business/page.php';
require_once __DIR__ . '/../app/presentation/renderer.php';

use App\Business\Page;
use App\Presentation\Renderer;

$data = require __DIR__ . '/../app/data/content.php';
$page = new Page($data);
$renderer = new Renderer();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $renderer->renderText($page->getDescription()) ?>" />
    <title><?= $renderer->renderTitle($page->getTitle()) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0f172a; color: #f8fafc; }
        .gradient-text {
            background: linear-gradient(90deg, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .glass-card {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="font-sans leading-relaxed">
    <header class="py-20 text-center relative overflow-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-sky-500/10 blur-[120px] rounded-full"></div>
        <h1 class="text-5xl font-extrabold tracking-tight sm:text-7xl gradient-text mb-4"><?= $renderer->renderTitle($page->getHero()['heading']) ?></h1>
        <p class="max-w-2xl mx-auto text-lg text-slate-400 px-6"><?= $renderer->renderText($page->getHero()['subtitle']) ?></p>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="flex items-center justify-between mb-10">
            <h2 class="text-3xl font-bold">Project Portfolio</h2>
            <span class="bg-sky-500/10 text-sky-400 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest border border-sky-500/20"><?= $renderer->renderText($page->getHero()['badge']) ?></span>
        </div>

        <?= $renderer->renderProjects($page->getProjects()) ?>

        <section class="max-w-3xl mx-auto bg-slate-800/50 rounded-3xl p-10 border border-slate-700 text-center">
            <h2 class="text-3xl font-bold mb-4"><?= $renderer->renderTitle($page->getNewsletter()['title']) ?></h2>
            <p class="text-slate-400 mb-8"><?= $renderer->renderText($page->getNewsletter()['description']) ?></p>

            <form class="flex flex-col sm:flex-row gap-4 mb-10">
                <input type="email" placeholder="<?= $renderer->renderText($page->getNewsletter()['placeholder']) ?>" class="flex-grow bg-slate-900 border border-slate-700 rounded-xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-sky-500 transition-all">
                <button type="submit" class="bg-sky-500 hover:bg-sky-400 text-white font-bold py-3 px-8 rounded-xl transition-colors"><?= $renderer->renderText($page->getNewsletter()['buttonText']) ?></button>
            </form>

            <div class="pt-8 border-t border-slate-700">
                <p class="text-sm text-slate-500 mb-4">Direct Contact</p>
                <p class="text-sky-400 font-medium"><?= $renderer->renderText($page->getContactEmail()) ?></p>
            </div>
        </section>
    </main>

    <footer class="mt-20 py-10 border-t border-slate-800 text-center text-slate-500 text-xs tracking-widest uppercase">
        <p>&copy; 2026 Kaar-SmartTools-Tech</p>
    </footer>
</body>
</html>
