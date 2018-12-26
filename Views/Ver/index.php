<?php
 while ($fila=mysqli_fetch_assoc($datos[1])) { ?>
   <br><br><br><br>
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title"><?php echo$fila['desc_materia'] ?></h5>
<p class="card-text">.</p>
<a href="<?php echo URL?>ver/indx" class="card-link">Card link</a>
<a href="#" class="card-link">Another link</a>
</div>
</div>
<?php
}
 ?>
