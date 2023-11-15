<?php

namespace App\Observers;

use App\Models\Desk;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DeskObserver
{
    /**
     * Handle the Desk "created" event.
     */
    public function created(Desk $desk): void
    {
        $tenant = $desk->tenant;
        $url = strval(route('customer-menu', [$tenant->id, $desk->id]));
        $desk->update(['url' => $url]);

        Storage::put('qrcode.png', QrCode::format('png')->generate($url));
        $desk->addMediaFromDisk('qrcode.png', 'local')
            ->toMediaCollection('default', 'media_qrcode');
    }
}
