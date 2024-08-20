<?php
include 'utils/formatDate.php';
$headers = ["Id", "Username", "Email", "Role", "Date", "Edit", "Delete"];
?>

<table class="table">
    <thead>
        <tr>
            <?php foreach ($headers as $header): ?>
                <th class="text-center"><?php echo $header; ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user): ?>
            <tr class="hover cursor-pointer">
                <th class="text-center"><?php echo $user['id'] ?></th>
                <td class="text-center"><?php echo $user['username'] ?></td>
                <td class="text-center"><?php echo $user['email'] ?></td>
                <td class="text-center"><?php echo $user['role'] ?></td>
                <td class="text-center"><?php formatDate($user['date']); ?></td>
                <td>
                    <div class="flex justify-center">
                        <button class="btn btn-neutral w-[80px]" onclick="prefillEditForm('<?php echo $user['username']; ?>', '<?php echo $user['email']; ?>', '<?php echo $user['role']; ?>', '<?php echo $user['id']; ?>')">
                            Edit
                        </button>
                    </div>
                </td>
                <td class="flex justify-center">
                    <button class="btn btn-error text-white w-[80px]" onclick="prefillDeleteForm('<?php echo $user['id']; ?>')">Delete</button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>