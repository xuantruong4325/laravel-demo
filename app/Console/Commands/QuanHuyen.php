<?php

namespace App\Console\Commands;

use App\Models\Districts;
use Illuminate\Console\Command;

class QuanHuyen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:quan-huyen';

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
        foreach ($items as $item) {
            $datas = json_decode(file_get_contents(public_path() . "/dist/quan-huyen/" . $item->code . ".json"));
            if ($datas != null) {
                foreach ($datas as $data) {
                    Districts::create([
                        'district' => $data->name,
                        'code_district' => $data->code,
                        'consciouse_code' => $data->parent_code,
                    ]);
                }
            }
        }
    }
}
