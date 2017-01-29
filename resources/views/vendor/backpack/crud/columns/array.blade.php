{{-- enumerate the values in an array  --}}
<td class="text-center">
    <?php
    	$value = $entry->{$column['name']};
    	// the value should be an array wether or not attribute casting is used
    	if (!is_array($value)) {
    		$value = json_decode($value, true);
    	}
        if ($value && count($value)) {
            echo implode(', ', $value);
        } else {
            echo '-';
        }
    ?>
</td>