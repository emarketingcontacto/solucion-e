<?php

namespace App\Filament\Resources\Proyectos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Facades\Storage;

class ProyectoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                //Selector del Servicio
                Select::make('servicio_id')
                ->relationship('servicio', 'nombre')
                ->required()
                ->label('Servicio Relacionado')
                ->preload()
                ->searchable()
                ->columns(1),

                TextInput::make('cliente_nombre')
                ->required()
                ->label('Nombre Cliente/Negocio')
                ->live(onBlur:true)
                ->afterStateUpdated(fn($state, callable $set)=>$set('slug', Str::slug($state))),

                TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord:true),

                RichEditor::make('problema')
                ->label('Problema/Reto')
                ->required()
                ->columnSpanFull(),

                RichEditor::make('solucion')
                ->label('Solucion (Targets)')
                ->required()
                ->columnSpanFull(),

                RichEditor::make('resultado')
                ->label('Resultados Obtenidos')
                ->required()
                ->columnSpanFull(),

                TextInput::make('url')
                ->label('Link Site (GMB)')
                ->url()
                ->placeholder('https://maps.goo.gl/...'),

                FileUpload::make('imagen_proyecto')
                ->label('Imagen Proyecto')
                ->image()
                ->directory('proyectos')
                ->disk('public')
                ->columnSpan(2)
                ->imageEditor()
            ])->columns(3);
    }
}
