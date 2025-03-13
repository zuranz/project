<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\MoonShine\Pages\User\UserIndexPage;
use App\MoonShine\Pages\User\UserFormPage;
use App\MoonShine\Pages\User\UserDetailPage;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Pages\Page;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<User, UserIndexPage, UserFormPage, UserDetailPage>
 */
class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Users';

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            UserIndexPage::class,
            UserFormPage::class,
            UserDetailPage::class,
        ];
    }

    /**
     * @param User $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }

    protected function indexFields(): iterable
    {
        return [
            ID::make('Крутой ID', 'id'),

            Text::make('Имя', 'username'),
            Text::make('Email', 'email'),


//            BelongsTo::make('User', 'user', 'username')->searchable(),


        ];
    }



    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make('Крутой ID', 'id'),
                Text::make('Имя', 'username'),
                Text::make('Email', 'email'),
            ]),
        ];
    }



    protected function detailFields(): iterable
    {
        return [

            Text::make('Имя', 'username'),
            Text::make('Email', 'email'),
        ];

    }
}
