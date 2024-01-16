<?php require_once __DIR__ . '/includes/header.php' ?>


<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 p-4">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" style="outline: none !important; box-shadow: none !important;" id="exampleFormControlInput1 usernames" placeholder="mvungi">
        
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1 email" style="outline: none !important; box-shadow: none !important;" placeholder="name@example.com">
        
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter Message" rows="3" style="outline: none !important; box-shadow: none !important;"></textarea>
      </div>
      <div class="mb-3">
        <input  type="submit" id="submitbtn" class="btn btn-primary" value="Send Message">
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6">

    </div>
  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php' ?>