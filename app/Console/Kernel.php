<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\ExpiredClients',
        'App\Console\Commands\ExpiredCommercial',
        'App\Console\Commands\ExpiredLivestock',
        'App\Console\Commands\ExpiredMedic',
        'App\Console\Commands\ExpiredMotor',
        'App\Console\Commands\ExpiredPia',
        'App\Console\Commands\ExpiredProfessional',
        'App\Console\Commands\ExpiredSchool',
        'App\Console\Commands\ExpiredWiba',

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('expired:clients')
        ->command('expired:commercials')
        ->command('expired:livestocks')
        ->command('expired:medics')
        ->command('expired:motors')
        ->command('expired:pias')
        ->command('expired:professionals')
        ->command('expired:schools')
        ->command('expired:wibas')
         ->daily();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
