<?php $this->titre = "Ajouter "; ?>

<div class="container" style="background-color: #ADD8E6;">
  <div class="card" style="background-color: #ADD8E6; color: white;">
    <div class="card-header">
      <h3>Ajouter Des Nouveaux Etudiants </h3>
    </div>
    <div class="card-footer">
    <form class="" method="post" action="index.php?action=liststudent">
           <div class="mb-3">
             <label class="form-label">Nom </label>
             <input class="form-control" type="text" name="name" id="name"  >
           </div>
           <div class="mb-3">
             <label class="form-label">prenom </label>
             <input class="form-control" type="text" name="lastname" id="lastname" >
          </div>
          <div class="mb-3">
           <label class="form-label">age </label>
           <input class="form-control" type="text" name="age" id="age" >
          </div>
          <div class="mb-3">
           <label class="form-label">cne </label>
           <input class="form-control" type="text" name="cne" id="cne">
          </div>
          <div class="text-end mr-5">
            <input type="submit" class="btn btn-dark" name="submit" value="Ajouter" >
          </div>

        </form>
        <a href="index.php?action=<?php echo "liststudent"?>"><button class = "btn btn-info">Retour </button></a></td>

    </div>
  </div>
</div>
