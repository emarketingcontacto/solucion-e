<?php

namespace App\Filament\Resources\Servicios\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServicioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)
                ->schema([
                    Section::make('Información General')
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('nombre')
                        ->required()
                        ->live(onBlur:true)
                        ->afterStateUpdated(fn($state, callable $set)=>$set('slug', Str::slug($state))),

                        TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord:true),

                        RichEditor::make('descripcion')
                        ->required()
                        ->columnSpanFull()
                        ->toolbarButtons([
                            'attachFiles', 'bold', 'bulletList', 'h2', 'h3', 'italic', 'link', 'orderedList', 'strike', 'undo',
                        ]),
                    ]),

                    Section::make('Multimedia y Estado')
                    ->columnSpan(1)
                    ->schema([
                        FileUpload::make('imagen')
                        ->image()
                        ->directory('servicios')
                        ->visibility('public')
                        ->imageEditor() //Editar photos
                        ->required(),

                        TextInput::make('precio')
                        ->numeric()
                        ->prefix('$')
                        ->placeholder('0.00'),

                        Toggle::make('activo')
                        ->label('Mostrar en Web?')
                        ->default(true),
                    ])
                ])
            ])->columns(1);
    }
}

