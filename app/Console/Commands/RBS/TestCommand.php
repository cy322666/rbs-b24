<?php

namespace App\Console\Commands\RBS;

use App\Services\RBS\RBS;
use Illuminate\Console\Command;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rbs:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(RBS $rbs)
    {
        $orders = $rbs->api->select("documents.orders", [], []);

        //вывод всех счетов из рбс
        dd($orders);

        //добавление новой записи в бд без орм
        DB::table('')->insert([]);
    }
}
