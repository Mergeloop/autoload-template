<x-app-layout title="{{ $page->meta_title ??  $page->name }}">
    <x-autoload::seo :page="$page" />

    @foreach ($page->content as $content)
        <x-autoload::page-builder :content="$content" :loop="$loop->index" :page="$page"/>
    @endforeach
</x-app-layout>
