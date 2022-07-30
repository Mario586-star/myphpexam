<div class="h2 text-center font-weight-light text-uppercase mt-5 pt-5">Liste  des contacts</div>
<hr>
<table class="table table-striped table-borderless table-success">
    <thead class="text-center text-dark bg-success">
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Telephone</th>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <th colspan="2">Action</th>
        <?php } ?>
    </tr>
    </thead>
    <tbody class="text-center">
    <?php foreach($contacts as $contact) { ?>
    <tr>
        <td><?= $contact['nom']?></td>
        <td><?= $contact['email']?></td>
        <td><?= $contact['tel']?></td>
        <?php if ($_SESSION["status"] == 'admin') {?>  
        <td><a href="/mine/PHP/index.php?page=Ctrl_contacts&view=edit&id=<?= $contact['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/edit.png" class=""></a></td>
        <td><a href="/mine/PHP/index.php?page=Ctrl_contacts&action=delete&id=<?= $contact['id']?>" class="btn btn-sm bg-dark"><img src="/mine/PHP/assets/img/trash.png" class=""></a></td>
        <?php } ?>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="text-center mb-3">
<?php if ($_SESSION["status"] == 'admin') {?>
<a href="/mine/PHP/index.php?page=Ctrl_contacts&view=add" class="btn btn-success">Ajouter un contact</a>
<?php } ?>

</div>