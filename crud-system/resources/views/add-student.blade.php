<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <h2 class="text-center mb-4">Add Student</h2>
    <form action="add-student" method="POST" enctype="multipart/form-data">
        @csrf
      <!-- File Input -->
      <div class="mb-3">
        <label for="file" class="form-label">Upload File</label>
        <input type="file" class="form-control" id="file" name="file" required>
      </div>

      <!-- Name Input -->
      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
      </div>

      <!-- Email Input -->
      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>

      <!-- Phone Input -->
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Add Student</button>
      
    </form>
    <div class="mt-3">
    <a href="/">
      <button type="submit" class="btn btn-warning">Cancel</button>
      </a>
    </div>
  </div>

</body>
</html>