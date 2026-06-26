@if($products->hasPages())

<nav>

{!! $products->links('pagination::bootstrap-5') !!}

</nav>

@endif