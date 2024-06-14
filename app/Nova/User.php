<?php

namespace App\Nova;

use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany as FieldsHasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email',
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

            Gravatar::make()->maxWidth(50),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'min:3', 'max:255'),


            Text::make('Surname', 'surname')
                ->sortable()
                ->rules('required', 'min:3', 'max:255'),

            Text::make('City', 'city'),

            URL::make('Github', 'github'),

            Textarea::make('Address', 'address'),

            Trix::make('Biography', 'biography'),

            Boolean::make('Freelance', 'is_freelance'),

            Text::make('Phone', 'phone'),

            Date::make('Birthday', 'birthday'),

            Image::make('Profile', 'profile_image')
                ->rules('image', 'extensions:jpg,png,jpeg')
                ->disk('local')
                ->path('images/profiles'),

            Text::make('Email', 'email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password', 'password')
                ->onlyOnForms()
                ->creationRules('required', Rules\Password::defaults())
                ->hideWhenUpdating(),

            FieldsHasMany::make('Translations', 'translations', resource: UserTranslation::class),

            FieldsHasMany::make('Skills', 'skills', resource: Skill::class),
            FieldsHasMany::make('Educations', 'educations', resource: Education::class),
            FieldsHasMany::make('Experiences', 'experiences', resource: Experience::class),
            FieldsHasMany::make('Portfolios', 'portfolios', resource: Portfolio::class),
            FieldsHasMany::make('Messages', 'messages', resource: Message::class),
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
