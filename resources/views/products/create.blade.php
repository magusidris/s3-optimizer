<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <h4>Create new product</h4>
                        </div>
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @include('products._form')
                            <button class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
