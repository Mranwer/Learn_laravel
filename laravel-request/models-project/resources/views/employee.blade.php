@foreach ($user as $data )
<h1>Name : {{$data->name}}</h1>
<h1>Email : {{$data->email}}</h1>
<h1>Phone : {{$data->phone}}</h1>
    
@endforeach