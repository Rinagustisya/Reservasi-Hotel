@props(['label', 'name', 'type'=>'text', 'value'=>''])
<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>