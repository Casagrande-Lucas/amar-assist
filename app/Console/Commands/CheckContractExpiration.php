<?php

namespace App\Console\Commands;

use App\Models\Billing;
use App\Models\Contract;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckContractExpiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verificar:contratos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica contratos vencidos e adiciona 1% ao dia após a data de vencimento.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $billings = Billing::where('expiration_date', '<', Carbon::now())->where('billing_status', 1)->get();

        foreach ($billings as $billing) {
            $daysDelay = Carbon::now()->diffInDays($billing->expiration_date);

            $juros = $billing->amount * ($daysDelay / 100);

            $billing->amount_fine += $juros;

            $billing->save();
        }
    }
}
