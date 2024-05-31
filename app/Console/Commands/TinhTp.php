<?php

namespace App\Console\Commands;

use App\Models\Conscious;
use Illuminate\Console\Command;

class TinhTp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:tinh-tp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = public_path() . "/dist/tinh_tp.json";
        $items = json_decode(file_get_contents($url));
        foreach($items as $item){
            Conscious::create([
                'consciouse' => $item->name,
                'code_consciouse'=> $item->code,
            ]);
        }
    }
}
