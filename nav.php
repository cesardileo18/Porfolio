<div class="menu_bar" id="menu_bar">
  <a href="#" class="bt-menu"><span class="icon-menu"></span>Menu</a>
</div>
<nav>
  <ul>
    <li>
      <a <?php echo $pg == "Inicio" ? "active" : " "; ?> href="index.php" title="Ir a Inicio">Inicio <span class="icon-home"></span></a>
    </li>
    <li>
      <a <?php echo $pg == "sobremi" ? "active" : " "; ?>href="sobremi.php" title="Ir a Sobre mi">Sobre mi <span class="icon-user-tie"></span></a>
    </li>
    <li>
      <a <?php echo $pg == "Proyecto" ? "active" : " "; ?>href="proyectos.php" title="Ir a Proyectos">Proyectos <span class="icon-briefcase"></span></a>
    </li>
    <li>
      <a <?php echo $pg == "Contacto" ? "active" : " "; ?>href="contacto.php" title="Ir a Contacto">Contacto <span class="icon-envelop"></span></a>
    </li>
  </ul>
</nav>



