<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class UserTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\UserTranslation>
     */
    public static $model = \App\Models\UserTranslation::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Translated Name', 'translated_name')
                ->sortable()
                ->rules('required', 'min:3', 'max:255'),

            Text::make('Translated Surname', 'translated_surname')
                ->sortable()
                ->rules('required', 'min:3', 'max:255'),

                Text::make('Translated Nickname', 'translated_nickname')
                ->sortable()
                ->rules('required', 'min:3', 'max:255'),

            Text::make('Translated City', 'translated_city'),

            Textarea::make('Translated Address', 'translated_address'),

            Trix::make('Translated Biography', 'translated_biography'),

            BelongsTo::make('User', 'User', resource:User::class)
            -> display('name')
            -> showCreateRelationButton(),

            BelongsTo::make('Language', 'language', resource:Language::class)
            -> showCreateRelationButton()
            -> display('full_name'),

         
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
