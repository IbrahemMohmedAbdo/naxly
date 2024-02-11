
<form action="{{ $action }}" method="POST" class="input-group mb-3">
    @csrf

    <div class="input-group mb-3">
        <label for="{{ $contentId }}" class="input-group-text">Content</label>
        <input type="text" class="form-control @error($contentName) is-invalid @enderror" id="{{ $contentId }}" placeholder="content" name="{{ $contentName }}" value="{{ old($contentName) }}">
        @error($contentName)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="input-group mb-3">
        <label for="{{ $titleId }}" class="input-group-text">Title</label>
        <input type="text" class="form-control @error($titleName) is-invalid @enderror" id="{{ $titleId }}" placeholder="title" name="{{ $titleName }}" value="{{ old($titleName) }}">
        @error($titleName)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mx-auto">{{ $buttonText }}</button>
</form>
