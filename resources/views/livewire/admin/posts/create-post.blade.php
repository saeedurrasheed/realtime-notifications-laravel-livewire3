<div>
<x-admin.table.wrapper
    heading="Posts"
    sub-heading="A list of all the posts. Most recent are showing first."
>
    @if(isset($showSearch))
        <x-admin.page.filter.container>
            <x-admin.page.filter.search>
                <x-admin.form.input.text
                    wire:model.live="search_posts"
                    model="search_posts"
                    id="search-posts"
                    name="search_posts"
                    class="pl-10"
                    placeholder="Filter pages via title and slug"
                />
            </x-admin.page.filter.search>
        </x-admin.page.filter.container>
    @endif
    <x-admin.table.table>
        <x-slot:header>
            <x-admin.table.th label="ID" />
            <x-admin.table.th label="Title" />
            <x-admin.table.th label="Slug" />
            <x-admin.table.th label="Content" />
            <x-admin.table.th label="Status" />
        </x-slot:header>
        @forelse($posts as $post)
            <x-admin.table.tr>
                <x-admin.table.td>
                        {{ $post->id }}
                </x-admin.table.td>
                <x-admin.table.td>{{ $post->title ?: '-' }}</x-admin.table.td>
                <x-admin.table.td>{{ $post->slug ?: '-' }}</x-admin.table.td>
                <x-admin.table.td>{{ $post->content ?: '-' }}</x-admin.table.td>
                <x-admin.table.td>
                @if($post->has_published)
                <x-heroicon-o-check-circle class="shrink-0 text-green-500 hover:text-indigo-600 w-6 h-6"/>
                @else
                <x-heroicon-o-x-circle class="shrink-0 text-red-500 hover:text-indigo-600 w-6 h-6"/>
                @endif
                </x-admin.table.td>
            </x-admin.table.tr>
        @empty
            <tr>
                <x-admin.table.td colspan="4" class="text-center">No records found</x-admin.table.td>
            </tr>
        @endforelse
    </x-admin.table.table>
    {{ $posts->links() }}
</x-admin.table.wrapper>
</div>
