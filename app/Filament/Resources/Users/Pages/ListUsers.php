<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('modalContentTest')
                ->modalDescription('The textInput is incorrectly showing in the parent modal.')
                ->registerModalActions([
                    $this->testAction()
                ])
                ->modalContent(view('modal-content-test')),
            Action::make('dropdownModalContentTest')
                ->modalDescription('Same as issues as other action, but also the dropdown is not anchored to the button.')
                ->slideOver()
                ->registerModalActions([
                    $this->testDropdownAction()
                ])
                ->modalContent(view('dropdown-modal-content-test'))
        ];
    }

    public function testAction(): Action
    {
        return Action::make('test')
            ->schema([
                TextInput::make('test')
                    ->label('Test Input')
                    ->required()
            ])
            ->action(fn (array $data) => dump($data));
    }

    public function testDropdownAction(): Action
    {
        return Action::make('testDropdown')
            ->schema([
                TextInput::make('test')
                    ->label('Test Input')
                    ->required()
            ])
            ->action(fn (array $data) => dump($data));
    }
}
