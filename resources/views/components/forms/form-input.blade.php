<div class="form-group">
    <input type="{{ $type }}" class="form-control form-control-user" id="{{ $id }}" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ old($name) }}">

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
