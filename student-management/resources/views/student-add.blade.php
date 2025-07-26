<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">User Registration Form</h2>
  <form action="add-data" method="POST" enctype="multipart/form-data">
    <!-- CSRF Token for Laravel -->
    @csrf

    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input class="form-control" type="file" id="image" name="image" required>
    </div>

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input class="form-control" type="text" id="name" name="name" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input class="form-control" type="email" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input class="form-control" type="tel" id="phone" name="phone" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
