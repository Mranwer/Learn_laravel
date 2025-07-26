<div>
    <h1>profile Page</h1>
    {{-- <h1>{{session('user')}}</h1> --}}
    @if (session('allfield'))
        <h1>{{ session('allfield.name') }}</h1>
        <h1>{{ session('allfield.email') }}</h1>
        <h1>{{ session('allfield.phone') }}</h1>
        
    
    @else
        <h1>No user Found <a href="user-form">go back to login</a></h1>
    
        
    @endif

     {{-- <h1>{{ session('allsession.name') }}</h1>
    <h1>{{ session('allsession.email') }}</h1>
     <h1>{{ session('allsession.phone') }}</h1> --}}
    <a href="users-logout">log out</a>
    {{-- <a href="user-form">go back to login</a> --}}
</div>
