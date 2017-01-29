{{-- localized date using jenssegers/date --}}
<td data-order="{{ $entry->{$column['name']} }}" class="text-center">
    @if (!empty($entry->{$column['name']}))
	{{ Date::parse($entry->{$column['name']})->format(config('backpack.base.default_date_format')) }}
    @endif
</td>