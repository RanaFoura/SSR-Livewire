<div>
    <h1 class="mt-3 ms-3">My Component</h1>
    <ul class="mt-3 ms-3">
        @foreach ($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</div>