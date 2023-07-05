<?php

namespace App\Console\Commands;

use App\Events\TarunaRegister;
use App\Models\dataDumy;
use Illuminate\Console\Command;

class CheckNewData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:check-new-data';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $data = dataDumy::latest()->first();

        // Check if there is a new comment
        if ($data) {
            event(new TarunaRegister($data));
        }
    }
}
