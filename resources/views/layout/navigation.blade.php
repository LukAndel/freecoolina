<nav class="admin-nav">
<a class="admin-nav__link" href="{{url('/login')}}">Login</a>
<a class="admin-nav__link" href="{{url('/')}}">Home</a>      
@auth 

<a class="admin-nav__link" href="{{url('/admin/article')}}">Article</a>
<a class="admin-nav__link" href="{{url('/admin/about-me')}}">About me</a>
{{-- <a class="admin-nav__link" href="{{url('/admin/calendar')}}">Calendar</a> --}}
<a class="admin-nav__link" href="{{url('/admin/contact')}}">Contact</a>
{{-- <a class="admin-nav__link" href="{{url('/admin/my-work')}}">My Work</a> --}}
<a class="admin-nav__link" href="{{url('/admin/upload')}}">Upload</a>

<form action="{{ route('logout') }}" method="post">
    @csrf
    <button class="btn"> Log Out</button>
</form>
@endauth
</nav>