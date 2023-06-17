@include('layouts.head')

<body>
    <div class="container">
        @include('layouts.sidebar')

        <!-- main -->
        <div class="main">
            @include('layouts.topbar')

            @section('content')

            @show
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Add hovered class in selected list item -->
    <script src="script.js"></script>
</body>

</html>