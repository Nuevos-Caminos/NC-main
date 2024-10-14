<nav class="navbar navbar-light fixed-top" style="background-color: #1B2A3B; padding:0; min-height: 3.5rem;">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    <!-- Logo and Text -->
    <div class="d-flex align-items-center text-white">
      <img src="assets/img/logo.png" alt="Foro Image" style="width:40px; height:auto; margin-right: 10px;">
      <b>Nuevos Caminos - Foro</b>
    </div>
    
    <!-- Barra de Pesquisa -->
    <div class="col-md-4">
      <form id="manage-search" class="d-flex">
        <input type="text" placeholder="Buscar en el foro" id="find" class="form-control" value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
      </form>
    </div>

    <!-- Conta Dropdown -->
    <div class="dropdown">
      <a href="#" class="text-white dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION['login_name'] ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="account_settings">
        <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> La configuración de su cuenta</a>
        <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Cerrar sesión</a>
      </div>
    </div>
  </div>
</nav>


<script>
  $('#manage_my_account').click(function() {
    uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
  $('#find').keypress(function(e) {
    if (e.which == 13) {
      $('#manage-search').submit()
    }
  })
  $('#manage-search').submit(function(e) {
    e.preventDefault()
    location.href = "index.php?page=search&keyword=" + $('#find').val()
  })
</script>