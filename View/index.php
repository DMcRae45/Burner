<?php
/*
  Landing page for users
  Authers David McRae & Oliver Dickens
*/
?>
<?php
  Include 'include_header.php';
  Include 'include_navbar.php';
?>
<body>
  <h1 class="w3-xxlarge w3-text-white text-uppercase text-center"><b>Recently Added</b></h5>
    <div class="d-flex align-content-start flex-wrap">

      <!-- This is a Prototype im working on -->
      <div class="card text-center" style="width:14rem; background-color: #17181c">
        <img class="card-img-top" src="Images/ReadyPlayerOne.jpg" title="ReadyPlayerOne" alt="ReadyPlayerOne">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
              Ready Player One
            </button>
            <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Movie Title Here</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        movie description in here
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-outline-success my-2 my-sm-0" href="movie.php" role="button">Play</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- End of Prototype-->

      <div class="card text-center" style="width:14rem;background-color: #498467">
        <img class="card-img-top" src="Images/ReadyPlayerOne.jpg" title="ReadyPlayerOne" alt="ReadyPlayerOne">
        <h5 class="card-title text-uppercase">Ready Player One</h5>
        <a href="movie.php" target="_blank">Play</a>
      </div>
      <div class="card" style="width: 14rem;">
        <img class="card-img-top" src="Images/ReadyPlayerOne.jpg" alt="Card image cap">
        <h5 class="card-title">Ready Player One</h5>
        <a href="movie.php" target="_blank">Play</a>
      </div>
      <div class="card" style="width: 14rem;">
        <img class="card-img-top" src="Images/ReadyPlayerOne.jpg" alt="Card image cap">
        <h5 class="card-title">Ready Player One</h5>
        <a href="movie.php" target="_blank">Play</a>
      </div>
    </div>
</body>

<?php
  Include 'include_footer.php';
?>
