<?php

namespace App\Console\Commands;

use App\Models\Servicio;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Genera el archivo sitemap.xml del sitio';

    public function handle(): int
    {
        $baseUrl = rtrim(config('app.url'), '/');
        $homePath = route('home', [], false);
        $contactoPath = route('contacto', [], false);

        $sitemap = Sitemap::create()
            ->add(
                Url::create($baseUrl . $homePath)
                    ->setPriority(1.0)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            )
            ->add(
                Url::create($baseUrl . $contactoPath)
                    ->setPriority(0.5)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );

        $servicios = Servicio::query()
            ->where('activo', true)
            ->whereNotNull('slug')
            ->where('slug', '!=', '')
            ->orderBy('id')
            ->get(['slug', 'updated_at']);

        foreach ($servicios as $servicio) {
            $url = Url::create(
                $baseUrl . '/' . trim($servicio->slug, '/')
            )
                ->setPriority(0.8)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);

            if ($servicio->updated_at) {
                $url->setLastModificationDate($servicio->updated_at);
            }

            $sitemap->add($url);
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado con éxito en public/sitemap.xml');

        return self::SUCCESS;
    }
}
