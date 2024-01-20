<?php

namespace App\Console\Commands;

use App\Models\Rate;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendingEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sending-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send daily emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Get daily report about rating
        $query = Rate::query();
        $allRatesCount = $query->clone()->whereDate('created_at', now()->toDateString())->count();
        $veryGoodCount = $query->clone()->where('rate', 4)->whereDate('created_at', now()->toDateString())->count();
        $goodCount = $query->clone()->where('rate', 3)->whereDate('created_at', now()->toDateString())->count();
        $acceptableCount = $query->clone()->where('rate', 2)->whereDate('created_at', now()->toDateString())->count();
        $poorCount = $query->clone()->where('rate', 1)->whereDate('created_at', now()->toDateString())->count();
        try {
            Mail::send('mails.reports',[ 'allRatesCount' =>  $allRatesCount, 'veryGoodCount' => $veryGoodCount, 'goodCount' => $goodCount, 'acceptableCount' => $acceptableCount, 'poorCount' => $poorCount ],function($message) {
                $message->to('hossamghoneim11@gmail.com')->subject(__('Daily rates report'));
            });
        } catch (\Throwable $th) {
            return ($th->getMessage()) ;
        }

        $this->info('Daily emails sent successfully.');
    }
}
