  <?php
  require_once 'header.php';
  ?>

  <!-- Main Method -->
  <main id="main">

    <?php
    //   Implementasi

    if ($_REQUEST) {
      if (isset($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
        if (!empty($page)) {
          include_once $page . '.php';
        } else {
          include_once 'home.php';
        }
      }
    } else {
      $page = 'home';
      include_once 'home.php';
    }

    include_once 'footer.php';
    ?>