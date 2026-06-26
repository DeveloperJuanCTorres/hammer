<div class="row g-4">

    @forelse($products as $product)

    <div class="col-md-6 col-xl-4">

        <div class="product-card">

            <div class="product-image-container">

                @php
                $imagenes=json_decode($product->imagenes,true);
                $imagen=$imagenes[0] ?? 'no-image.png';
                @endphp

                <img
                    src="{{asset('storage/'.$imagen)}}"
                    class="product-image"
                    loading="lazy">

            </div>

            <div class="p-4">

                <small class="text-muted">

                    {{$product->taxonomy->nombre}}

                </small>

                <h5 class="mt-2">

                    {{$product->nombre}}

                </h5>

                <div class="h4 fw-bold text-primary mt-3">

                    S/ {{number_format($product->precio_referencial,2)}}

                </div>

                <div class="mt-4">

                    <a
                        href="{{route('detalle',$product->id)}}"
                        class="btn btn-primary w-100">

                        Ver Detalles

                    </a>

                </div>

            </div>

        </div>

    </div>

    @empty

    <div class="col-12">

        <div class="alert alert-warning">

            No se encontraron productos.

        </div>

    </div>

    @endforelse

</div>