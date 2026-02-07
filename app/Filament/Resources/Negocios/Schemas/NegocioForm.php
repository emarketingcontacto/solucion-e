<?php

namespace App\Filament\Resources\Negocios\Schemas;

use Filament\Schemas\Schema;
//use Filament\Forms\Components\Grid;
//use Filament\Forms\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class NegocioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //generales
                Section::make('Identidad')
                ->description('Identidad')
                ->icon('heroicon-o-globe-alt')
                ->schema([
                    TextInput::make('nombre'),
                    Textarea::make('descripcion')
                        ->columnSpanFull(),
                ]),
                //contacto
                Section::make('Contacto')
                    ->description('Contacto')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        TextInput::make('direccion'),
                        TextInput::make('telefono')
                        ->tel(),
                        TextInput::make('email')
                        ->label('Email')
                        ->email(),
                    ]),
                Section::make('Redes Sociales')
                    ->description('Redes Sociales')
                    ->icon('heroicon-o-share')
                    ->columnSpanFull()
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('whatsapp'),
                        TextInput::make('facebook'),
                        TextInput::make('twitter'),
                        TextInput::make('linkedin'),
                        TextInput::make('instagram'),
                        ])
                    ]),
            ]);
    }
}
