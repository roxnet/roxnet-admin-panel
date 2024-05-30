<div class="form-group">
    <label>{{ $text }} @if(isset($required) || (isset($attrib) && $attrib=='required="true"')) <span class="text-danger">*</span> @endif</label>
    <input @if(isset($id)) id="{{ $id }}" @endif type="{{ $type }}" class="form-control" id="{{ Str::slug($text) }}" 
    @if(isset($wire))
    wire:model.{{ ($wireattribute) ?? '' }}="{{ $wire }}"
    @endif
    name="{{ $name }}" placeholder="Enter {{ $text }}" value="{{ ($value) ?? '' }}" {{ ($attrib) ?? '' }}>
</div>