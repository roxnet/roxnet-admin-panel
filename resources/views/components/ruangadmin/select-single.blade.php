<div class="form-group">
	<label for="{{ $name }}">{{ $text }} @if(isset($required)) <span class="text-danger">*</span> @endif</label>
	<select name="{{ $name }}" id="{{ Str::slug($text) }}" 
	@if(isset($wire))
    wire:model.{{ ($wireattribute) ?? '' }}="{{ $wire }}"
    @endif 
	class="form-control">
		{{ $slot }}
	</select>
</div>