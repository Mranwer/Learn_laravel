<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Table Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">User Information</h2>
  <table class="table table-bordered table-striped text-center">
    <thead class="table-dark">
      <tr>
        <th>S NO.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($student as $data )
          

       <tr>
        
        <td>{{$data->id}}</td>
        <td><img src="{{ ('storage/' . $data->image) }}" class="img-thumbnail" alt="User Image" width="60"></td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>
            <a href="delete-data/{{$data->id}}">
            <i class="fa-solid fa-trash"></i>
            </a>
            <i class="fa-solid fa-pen"></i>
        </td>
      </tr>
    @endforeach



    </tbody>
  </table>
</div>

</body>
</html>
