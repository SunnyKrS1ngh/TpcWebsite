<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YourData</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mydata/userHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mydata/viewData.php">Account Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mydata/editData.php">Edit Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mydata/logout.php">LogOut</a>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Delete Account
</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete your account?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href = "/mydata/deleteData.php" style="color : white; text-decoration: none;"><button type="button" class="btn btn-primary" id="confirm">Yes</button></a>
      </div>
    </div>
  </div>
</div>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

	<!-- <script src="custom.js"></script> -->
