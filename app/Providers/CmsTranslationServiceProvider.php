<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator as BaseTranslator;
use App\Services\Cms\OverrideTranslator;

class CmsTranslationServiceProvider extends ServiceProvider
{
    /**
     * Substitui o translator do Laravel por um que consulta primeiro os overrides
     * do CMS. O provider base é "deferred"; para o nosso não ser sombreado, ligamos
     * as instâncias de forma eager com instance(), o que impede o carregamento do
     * provider deferred de translation.
     */
    public function register(): void
    {
        $frameworkLang = dirname((new \ReflectionClass(BaseTranslator::class))->getFileName()) . '/lang';

        $loader = new FileLoader($this->app['files'], [$frameworkLang, $this->app['path.lang']]);
        $this->app->instance('translation.loader', $loader);

        $trans = new OverrideTranslator($loader, $this->app->getLocale());
        $trans->setFallback($this->app->getFallbackLocale());
        $this->app->instance('translator', $trans);
    }
}
