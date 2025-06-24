<?php

namespace App\Filament\Resources\LayananResource\Pages;

use App\Filament\Resources\LayananResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLayanan extends CreateRecord
{
    protected static string $resource = LayananResource::class;

    // Opsional: ubah data sebelum disimpan ke DB
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Contoh: ubah huruf besar kode otomatis
        $data['kode'] = strtoupper($data['kode']);

        return $data;
    }

    // Opsional: logika setelah berhasil buat record
    protected function afterCreate(): void
    {
        // Bisa kasih notifikasi, log, dll
        // Notification::make()->success()->title('Layanan berhasil ditambahkan')->send();
    }
}
