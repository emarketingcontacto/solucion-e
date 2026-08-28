<?php

namespace App\Filament\Resources\Proyectos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
//use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

                Textarea::make('sinopsis_reto')
                ->label('Sinopsis del Reto / Problema')
                ->maxLength(300)
                ->rows(3)
                ->nullable()
                ->helperText('Resumen breve (máx. 300 caracteres) para tarjetas o vistas previas.')
                ->columnSpanFull(),

                RichEditor::make('solucion')
                ->label('Solucion (Targets)')
                ->required()
                ->columnSpanFull(),

                Textarea::make('sinopsis_solucion')
                ->label('Sinopsis de la Solución')
                ->maxLength(300)
                ->rows(3)
                ->nullable()
                ->helperText('Resumen breve (máx. 300 caracteres) sobre la solución implementada.')
                ->columnSpanFull(),

                RichEditor::make('resultado')
                ->label('Resultados Obtenidos')
                ->required()
                ->columnSpanFull(),

                Textarea::make('sinopsis_resultado')
                ->label('Sinopsis del Resultado')
                ->maxLength(300)
                ->rows(3)
                ->nullable()
                ->helperText('Resumen breve del logro obtenido para destacar en landing page.')
                ->columnSpanFull(),

                TextInput::make('url')
                ->label('Link Site (GMB)')
                ->url()
                ->placeholder('https://maps.goo.gl/...')
                ->columnSpanFull(),

                FileUpload::make('imagen_proyecto')
                ->label('Imagen Proyecto')
                ->image()
                ->directory('proyectos')
                ->disk('public')
                ->columnSpanFull()
                ->imageEditor(),

                Toggle::make('publicado')
                ->label('Publicado')
                ->default(true),

                Toggle::make('destacado')
                ->label('Proyecto Destacado')
                ->default(false)
                ->helperText('Marcar si deseas que aparezca en la sección principal del sitio.'),

            ])->columns(3);
    }
}
