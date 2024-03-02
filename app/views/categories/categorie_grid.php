<table class="table table-hover table-dark table-sm" id="categories_grid">
    <thead class="text-center font-weight-bold">
        <tr>
            <th width="10%">ID</th>
            <th width="35%">Categorie Name</th>
            <th width="35%">Created At</th>
            <th width="20%" class="td-actions"> Options </th>
        </tr>
    </thead> 
    <tbody class="text-center">
        <?php if (!empty($data['categories'])): ?>
            <?php foreach ($data['categories'] as $row): ?>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['categorie_name']; ?></th>
                <th><?php echo $row['created_at']; ?></th>
                <th>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-info" onclick="Categorie.show(this);">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onclick="Categorie.confirm(this);">
                        <i class="fa fa-trash"></i>
                    </button>
                </th>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="6">No Categories</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
