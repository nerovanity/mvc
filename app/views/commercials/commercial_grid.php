<table class="table table-hover table-dark table-sm" id="commercials_grid">
    <thead class="text-center font-weight-bold">
        <tr>
            <th width="10%">ID</th>
            <th width="35%">Commercial Name</th>
            <th width="35%">Created At</th>
            <th width="20%" class="td-actions"> Options </th>
        </tr>
    </thead> 
    <tbody class="text-center">
        <?php if (!empty($data['commercials'])): ?>
            <?php foreach ($data['commercials'] as $row): ?>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['commercial_name']; ?></th>
                <th><?php echo $row['created_at']; ?></th>
                <th>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-info" onclick="Commercial.show(this);">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" id="<?php echo $row['id']; ?>" class="btn btn-xs btn-danger" onclick="Commercial.confirm(this);">
                        <i class="fa fa-trash"></i>
                    </button>
                </th>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr class="text-center">
                <td colspan="6">No Commercials</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
