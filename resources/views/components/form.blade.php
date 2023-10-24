@props(['route', 'params'])

<form action="{{ route('tenant-category-edit', $params) }}" method="POST">
    @csrf
    {{ $slot }}
</form>
