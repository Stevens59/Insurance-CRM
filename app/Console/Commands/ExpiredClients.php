<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PolicyExpired;

class ExpiredClients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expired:clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send an expired policy email';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $today = carbon::now();
           $lasts = \DB::table('lasts')
           ->whereDate('expiry', $today)
           ->get();
           Mail::to('stephen.waweru@fep-group.com')->send(new PolicyExpired($lasts));
    }
}
