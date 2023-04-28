@php
    $r = [
        'userRoute' => [
            'name' => 'Users',
            'url' => route('admin.users')
        ],
        'movieRoute' => [
            'name' => 'Movies',
            'url' => route('admin.movies')
        ],
        'categoryRoute' => [
            'name' => 'Categories',
            'url' => route('admin.categories')
        ],
    ];

    $routes = json_encode($r)
@endphp
<admin-nav :routes="{{ $routes }}"></admin-nav>