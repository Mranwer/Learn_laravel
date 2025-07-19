<div>

    @foreach ($data as $user )
      <h1>Name: {{$user->name}}</h1>  
      <h1>email: {{$user->email}}</h1>  
      <h1>phone: {{$user->phone}}</h1>  
    @endforeach
</div>
