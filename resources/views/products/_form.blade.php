@csrf
<div class="mb-3">
    <label for="picture" class="form-label">Upload image</label>
    <input class="form-control" type="file" name="picture" accept=".jpeg,.jpg,.png" id="picture">
</div>
<div class="mb-4">
    <label class="form-label" for="name">Name</label>
    <input value="{{ old('name', $product->name) }}" type="text" name="name" id="name"
        class="form-control @error('name') is-invalid @enderror">
    @error('name')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label class="form-label" for="price">Price</label>
    <input value="{{ old('price', $product->price) }}" type="number" name="price" id="price"
        class="form-control @error('name') is-invalid @enderror">
    @error('price')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="mb-4">
    <label class="form-label" for="description">Description</label>
    <textarea name="description" id="description" class="form-control @error('name') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
    @error('description')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
