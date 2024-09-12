@push('header::styles')
    <x-autoload::style-override :key="$key" :content="$vars" />
@endpush

<section data-component-id="{{ $key }}">
    {!! $text !!}
</section>
