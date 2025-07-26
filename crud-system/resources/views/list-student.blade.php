<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Info Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsive support -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #f8f9fa;
    }
    .table-container {
      max-width: 1000px;
      margin: 50px auto;
    }
    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }
    .custom-table th {
      background-color: #343a40;
      color: white;
    }
    a {
      text-decoration: none;
    }
    @media (max-width: 576px) {
      .table-container {
        padding: 10px;
        margin: 20px auto;
      }
      .card-header h4 {
        font-size: 1.2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container table-container">
    <div class="card shadow-sm rounded">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Student Records</h4>
      </div>

      <div class="mt-3 text-end pe-4">
        <a href="add-student" class="p-2 bg-warning text-white rounded">Add Student</a>
      </div>

      <div class="card-body p-4">
        <!-- ✅ Make table responsive -->
        <div class="table-responsive">
          <table class="table table-bordered table-hover custom-table align-middle text-center">
            <thead>
              <tr>
                <th>S No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>
                  <img src="{{ asset('storage/' . $data->file) }}" alt="Image" width="60" class="img-thumbnail">
                </td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>
                  <a href="delete-student/{{ $data->id }}" class="me-2">
                    <i class="fa-solid fa-trash text-danger"></i>
                  </a>
                  <a href="edit-student/{{ $data->id }}">
                    <i class="fa-solid fa-pen text-warning"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div> <!-- /.table-responsive -->
      </div>
    </div>
  </div>
</body>
</html>
