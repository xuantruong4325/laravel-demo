<?php

namespace App\Console\Commands;

use App\Models\Communes;
use App\Models\Districts;
use Illuminate\Console\Command;

class XaPhuong extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:xa-phuong';

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
        $items = Districts::all();
        foreach ($items as $item) {
            $datas = json_decode(file_get_contents(public_path() . "/dist/xa-phuong/" . $item->code_district . ".json"));
            if ($datas != null) {
                foreach ($datas as $data) {
                    Communes::create([
                        'commune' => $data->name,
                        'code_commune' => $data->code,
                        'district_code' => $data->parent_code,
                    ]);
                }
            }
        }
    }
}
