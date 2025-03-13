<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comments;
use App\MoonShine\Pages\Comments\CommentsIndexPage;
use App\MoonShine\Pages\Comments\CommentsFormPage;
use App\MoonShine\Pages\Comments\CommentsDetailPage;

use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Laravel\Pages\Page;
use MoonShine\Quill\Fields\Quill;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<Comments, CommentsIndexPage, CommentsFormPage, CommentsDetailPage>
 */
class CommentsResource extends ModelResource
{
    protected string $model = Comments::class;

    protected string $title = 'Comments';

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [
            CommentsIndexPage::class,
            CommentsFormPage::class,
            CommentsDetailPage::class,
        ];
    }

    /**
     * @param Comments $item
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

            Text::make('Содержание', 'content'),
           BelongsTo::make('К статье', 'article', 'title')->searchable(),

            BelongsTo::make('User', 'user', 'username')->searchable(),


        ];
    }



    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make('Крутой ID', 'id'),
                Text::make('Чел', 'username'),
                Text::make('Содержание', 'content'),
                BelongsTo::make('К статье', 'article', 'title')->searchable(),
            ]),
        ];
    }



    protected function detailFields(): iterable
    {
        return [
            Text::make('Чел', 'username'),
            Text::make('Содержание', 'content'),
            BelongsTo::make('К статье', 'article', 'title')->searchable(),
        ];

    }
}
