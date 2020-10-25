<?php
/*
Description: Navigation bar at the top of each page.
Author: David McRae, Oliver Dickens
*/
?>
<nav class="navbar d-flex d-inline no-gutters row">
  <div class ="col" id="top">
      <a class="btn logo">JustWatch <i class="fas fa-angle-double-right"></i></a>
    <div class="sideBar row no-gutters justify-content-center" id="sideBar">
      <ul class="list-group col">
        <li class="list-group-item">
          <a href="movies.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-ticket-alt fa-lg"></i>
              <span class="link-text">Movies</span>
            </div>
          </a>
        </li>
        <li class="list-group-item">
          <a href="adminNavigation.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-id-card-alt fa-lg"></i>
              <span class="link-text">Admin</span>
            </div>
          </a>
        </li>

        <li class="list-group-item">
          <a href="../Controller/attemptLogout.php" class="nav-link">
            <div class="fa-secondary fa-lg">
              <i class="fas fa-sign-out-alt fa-lg"></i>
              <span class="link-text">Logout</span>
            </div>
          </a>
        </li>

      </ul>
    </div>
  </div>
  <div id="pcSearch" class="col-10 row no-gutters justify-content-center">
    <form class="form-inline col-10" method="GET">
      <input class="form-control col-10" type="search" placeholder="Search by Title" name="filter">
      <button class="btn btn-danger col-2" type="submit">Search</button>
    </form>
  </div>
</nav>
