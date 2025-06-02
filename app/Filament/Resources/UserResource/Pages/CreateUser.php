<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('create_and_create_another')
                ->label('CREATE')
                ->action(function () {
                    // Simpan data user
                    $this->create(false); // false = jangan reset form untuk create lagi
                    // Redirect ke halaman tabel (index)
                    $this->redirect($this->getResource()::getUrl('index'));
                })
                ->color('primary'),

            Action::make('cancel')
                ->label('Cancel')
                ->url($this->getResource()::getUrl('index'))
                ->color('secondary'),
        ];
    }

    // Optional: Tambahkan notifikasi setelah user dibuat
    protected function getRedirectUrl(): string
    {
        Notification::make()
            ->title('User created successfully')
            ->success()
            ->send();

        return $this->getResource()::getUrl('index');
    }
}