<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <h4>Edit profile</h4>
                        </div>
                        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="path" class="form-label">Upload secret document</label>
                                <input class="form-control @error('path') is-invalid @enderror" type="file"
                                    name="path" accept=".pdf" id="path">
                                @error('path')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{ route('documents.download', 'secret') }}" class="btn btn-success">Download</a>
            </div>
        </div>
    </div>
</x-app-layout>
