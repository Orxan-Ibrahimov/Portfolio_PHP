<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class ContactPageTranslation extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ContactPageTranslation>
     */
    public static $model = \App\Models\ContactPageTranslation::class;

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

            Text::make('Placeholder Name', 'placeholder_name'),

            Text::make('Placeholder Email', 'placeholder_email'),

            Text::make('Placeholder Subject', 'placeholder_subject'),

            Text::make('Placeholder Message', 'placeholder_message'),

            Text::make('Location Title', 'location'),

            Text::make('Email Address Title', 'email_address'),

            Text::make('Call Title', 'call'),

            Text::make('Button Send Title', 'btn_send'),

            BelongsTo::make('Contact', 'contact_page', resource: ContactPage::class)
                ->display('title')
                ->showCreateRelationButton(),

            BelongsTo::make('Language', 'language', resource: Language::class)
                ->display('full_name')
                ->showCreateRelationButton()
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
