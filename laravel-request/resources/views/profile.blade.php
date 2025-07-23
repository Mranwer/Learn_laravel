<div>
    <h1>profile Page</h1>
    {{-- <h1>{{session('name')}}</h1> --}}
    @if (session('name'))
        <h1>hi {{session('name')}}</h1>
        <a href="users-logout">log out</a>
    
    @else
        <h1>No user Found <a href="user-form">go back to login</a></h1>
    
        
    @endif
</div>
