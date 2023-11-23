<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis mollitia blanditiis alias
                    adipisci hic rem repudiandae quas odio omnis ab officia facere, vero quia dignissimos quaerat,
                    soluta fuga nesciunt in.</p>
                <p>Maiores obcaecati assumenda dolorem, quasi porro dolore vel nam natus aliquid odit, facere eum eos
                    ipsa, doloribus culpa soluta nemo quibusdam quia? Beatae quibusdam aliquid deserunt vero omnis ipsa
                    possimus?</p>
                <p>Minima, nam labore possimus deserunt enim, aut assumenda reiciendis voluptatibus at fuga error,
                    eligendi culpa natus! Impedit eaque quae quasi! Eveniet suscipit nostrum enim. Necessitatibus esse
                    distinctio quas possimus consequuntur?</p>
                <p>Sunt vel ex est deserunt, facere enim incidunt eveniet quidem at ratione laborum vero asperiores
                    aspernatur aut nulla eius cum sed voluptatum quod tempore ea fuga architecto assumenda. Facere, et!
                </p>
                <p>Nam earum numquam excepturi vitae consectetur neque recusandae iste asperiores magnam temporibus
                    quasi culpa est, pariatur accusamus fugit nulla rerum, doloremque sed. Dolore, quisquam impedit
                    repellendus unde fugit nam atque.</p>
                <p>Impedit reprehenderit, dolorem a vero est, perspiciatis ullam nobis quibusdam eos doloribus, modi
                    laborum libero corporis odit ea ut? Quam quasi exercitationem accusantium, voluptates sunt officiis
                    ullam eum eos ut?</p>
                <p>Error excepturi corrupti aliquam dolor minima vero natus mollitia consequatur deleniti eos, ullam
                    rerum voluptas vitae ipsum eveniet molestias doloribus earum in eaque neque? Unde tenetur culpa enim
                    quidem sunt?</p>
                <p>Molestias repellat quam aliquid porro officiis hic assumenda enim magni culpa, doloribus aspernatur,
                    dolorum minus nisi earum beatae illo sit sunt natus temporibus obcaecati excepturi. At culpa iste
                    ratione porro!</p>
                <p>Ullam vitae a accusamus nostrum cumque quasi modi quaerat, sint nulla mollitia eveniet sapiente ipsum
                    iste ut rem? Porro deleniti dignissimos minima? Laborum possimus asperiores voluptas quisquam labore
                    perferendis modi!</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
                <p>Repellendus nulla, accusamus dolorum placeat sed repudiandae omnis aspernatur facilis! Nesciunt
                    maxime debitis laborum earum repellendus nostrum a expedita fugiat autem possimus excepturi,
                    laudantium ullam dolorum quidem iste quis perferendis.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm mb-4">
                        @if ($product->picture)
                            <img loading="lazy" width="356" height="194"
                                src="{{ Storage::url($product->picture) }}?tr=w-712,h-388" class="card-img-top"
                                alt="{{ $product->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <span>
                                    <sup>Rp</sup>
                                    {{ number_format($product->price, 0, '.', '.') }}
                                </span>
                                @auth
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
