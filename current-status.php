<?php include 'global-templates/header.php'; ?>

<!-- site wrapper start -->
<div class="main-wrapper">
  <!-- nav Sidebar attached -->
  <?php include 'global-templates/sidebar.php'; ?>
  <div class="site-wrapper">
  <h1> Dashboard </h1>
  <div class="wrapper-center">


    <div class="current-status">
      <div class="title text-center">
        <h1 class="black-title"> Current Status </h1>
      </div>
      <ol class="progtrckr" data-progtrckr-steps="5">
        <li class="progtrckr-done">
          <span class="status"></span>
          <span class="content">
            <h5>Review in process </h5>
            <p>Our team is in the process of reviewing everythingyou have submitted.</p>
          </span>
        </li>

        <li class="progtrckr-todo">
        <span class="status"></span>
        <span class="content">
          <h5>Extra input needed</h5>
          <p>If there is any file or information needs to be submitted,we will have you submit here.</p>
          </span>
        </li>
        <li class="progtrckr-todo">
        <span class="status"></span>
        <span class="content">
          <h5>Final approval on everything</h5>
          <p>When everything is approved, you will be able to accessthe dashboard.</p>
          </span>
        </li>

      </ol>

    </div>


  </div>
  </div>


</div>

<?php include 'global-templates/footer.php'; ?>