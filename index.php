
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Sebastian Mira Castro">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>Personal Contact Agenda - Main</title>
</head>
<body>
  <nav class="navbar  justify-content-between navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="./images/kiro.jpeg" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong class="navbar-light navbar-nav nav-link">Sebastian Mira Castro</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item " href="https://www.facebook.com/profile.php?id=100008382820923">Facebook</a></li>
        <li><a class="dropdown-item" href="">WhatsApp</a></li>
        <li><a class="dropdown-item" href="https://github.com/sebastianmiracastro">GitHub</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" style="cursor: no-drop;" href="#">Contact me</a></li>
      </ul>
    </div>
    <a class="navbar-brand" href="#">Personal Contacts</a> 
    <form class="form-inline my-2 my-lg-0">
      <input class="form-inline mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="sumbit">Search</button>
    </form>
  </nav>
  <div  class="container">
    <h1 class="page-header text-center">Personal Contact Agenda</h1>
    <div class="row">
      <div class="col-sm-12">
        <a href="#addNew" class="btn btn-primary" data-toggle="modal">New Contact <span class="fa fa-plus"></span></a>
      </div>
        <table class="table table-bordered table-striped" style="margin-top:20px; " >
          <thead>
            <th>ID</th>
            <th>Contact Name</th>
            <th>Phone Number</th>
            <th>Mail</th>
            <th>Address</th>
            <th>Actions</th>
          </thead>
          <tbody>

          </tbody>
        </table>
      </div>
    </div>
    <?php include('addModal.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="sidebars.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</html>
