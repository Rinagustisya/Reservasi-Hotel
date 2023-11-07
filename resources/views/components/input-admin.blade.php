@props(['label', 'name', 'type'=>'text', 'value'=>'', 'keterangan'=>''])
<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}">
    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    @if ($keterangan)
        <div class="text-muted">
            <small>
                {{ $keterangan }}
            </small>
        </div>
    @endif
</div>