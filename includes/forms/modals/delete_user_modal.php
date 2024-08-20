<dialog id="my_modal_5" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-bold text-center">Are you sure you want to delete this user?</h3>
        <div class="flex justify-center mt-8">
            <form class="btn btn-error text-white mx-4 w-[80px]" method="POST" action="<?php echo BASE_URL . 'actions/delete_user.php'; ?>">
                <input type="hidden" name="id" id="id">
                <input class="btn btn-error text-white w-[80px]" type="submit" name="delete" value="Yes" />
            </form>
            <form method="dialog">
                <button class="btn btn-neutral mx-4 w-[80px]">No</button>
            </form>
        </div>
    </div>
</dialog>