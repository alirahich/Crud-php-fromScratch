<?php $this->titre = "Table D'Etudiants"; ?>

<div class="container" >
  <table class="table" style="background-color: #FFFFF0	;">
  <thead class="thead-dark">
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">prenom</th>
        <th scope="col">age</th>
        <th scope="col">cne</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
      </tr>
  </thead>
  <tbody >
    <?php foreach ($liststudent as $student) {?>
    <tr>
      <td> <?php echo $student->getName(); ?> </td>
      <td> <?php echo $student->getlastname(); ?> </td>
      <td> <?php echo $student->getage(); ?>  </td>
      <td> <?php echo $student->getcne(); ?>  </td>
      <td><a href="index.php?action=<?php echo "modifierstudent"?>&id=<?php echo $student->getId(); ?>"><button type = "submit" class = "btn btn-info" >Modifier</button></a></td>
      <td><a href="index.php?action=<?php echo "suppression"?>&id=<?php echo $student->getId(); ?>"><button type = "submit" class = "btn btn-danger">Supprimer</button></a></td>
    </tr>
    <?php } ?>
  </tbody>
  </table>
  <div class="text-center">
    <a @onclick="" href="index.php?action=<?php echo "addstudent"?>"><button type = "submit" class = "btn btn-dark">Ajouter Des Nouveaux Etudiants </button></a></td>

  </div>
</div>
