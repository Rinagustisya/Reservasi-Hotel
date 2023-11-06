@props(['label', 'name', 'type'=>'text', 'value'=>''])
<div class="form-group">
    <label for="">{{ $label }}</label>
    <textarea type="{{ $type }}" name="{{ $name }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}">{{ old($name, $value) }}</textarea>
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>