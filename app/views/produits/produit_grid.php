<table class="table table-hover table-dark table-sm" id="users_grid">
    <thead class="text-center font-weight-bold">
        <tr>
            <th width="5%">ID</th>
            <th width="30%">Designation</th>
            <th width="10%">Prix</th>
            <th width="30%">Photo</th>
            <th width="5%">ID_categorie</th>
            <th width="5%">ID_commercial</th>
            <th width="15%" class="td-actions"> Options </th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php if (!empty($data['produits'])): ?>
            <?php foreach ($data['produits'] as $row): ?>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['designation']; ?></th>
                <th><?php echo $row['prix']; ?></th>
                <th><?php echo $row['photo']; ?></th>
                <th><?php echo $row['id_categorie']; ?></th>
                <th><?php echo $row['id_commercial']; ?></th>
                <th>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-info" onclick="Produit.show(this);">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onclick="Produit.confirm(this);">
                        <i class="fa fa-trash"></i>
                    </button>
                </th>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="6">No produits</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
