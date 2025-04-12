<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Os eventos para os quais os listeners são registrados.
     *
     * @var array
     */
    protected $listen = [
        // Exemplo:
        // 'App\Events\ExampleEvent' => [
        //     'App\Listeners\ExampleListener',
        // ],
    ];

    /**
     * Registra os eventos para a aplicação.
     */
    public function boot(): void
    {
        //
    }
}
