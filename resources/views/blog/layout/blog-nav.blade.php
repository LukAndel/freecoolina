@php
    use App\Models\Category;
    $categories = Category::all();
@endphp

<nav class="admin-nav">
    <a class="blog-nav__link" href="{{url('/')}}">Home</a>
    <span class="blog-nav__link">Category</span>
        <ul>
        @foreach ($categories as $category)
            <li><a class="blog-nav__link" href="{{url('/category/' . $category->name)}}">{{$category->name}}</a></li>
        @endforeach
        </ul>
    <a class="blog-nav__link" href="{{url('/about-me')}}">About me</a>
    <a class="blog-nav__link" href="{{url('/contact')}}">Contact</a>
    <a class="blog-nav__link" href="{{url('/galery')}}">Galery</a>
</nav>