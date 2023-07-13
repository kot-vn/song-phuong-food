<li class="nav-item px-3 d-flex align-items-center">
  <span class="badge badge-pill badge-md bg-gradient-success">
    <?php if (getEnvironment() == "staging") {
      echo "STG";
    } else if (getEnvironment() == "dev") {
      echo "DEV";
    }
    ?>
  </span>
</li>