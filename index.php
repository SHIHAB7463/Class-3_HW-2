<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <section class="form" class="mt-5 .text-primary">
    <div class="container">
      <div class="row">
        <div class="row">
          <div class="main_container js-center">
            <form action="./env.php" method=$_GET>
              <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control custom-input" id="exampleInputName" placeholder="Enter Your Name" name="Name">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control custom-input" id="exampleInputPassword1" placeholder="Enter Your Password" name="Password">
              </div>
              <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Number</label>
                <input type="number" class="form-control custom-input" id="exampleInputNumber" placeholder="Enter Your Number" required name="Number">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
