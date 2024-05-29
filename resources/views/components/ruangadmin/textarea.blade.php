<div class="form-group">
	<label for="{{ $name }}">{{ $text }} @if(isset($required) || (isset($attrib) && $attrib=='required="true"')) <span class="text-danger">*</span> @endif</label>
	<textarea name="{{ $name }}" id="{{ Str::slug($text) }}" rows="{{ ($rows) ?? '6' }}"
	@if(isset($wire))
    wire:model.{{ ($wireattribute) ?? '' }}="{{ $wire }}"
    @endif 
	class="form-control {{ ($attrib) ?? '' }}">{{ ($value) ?? '' }}</textarea>
</div>