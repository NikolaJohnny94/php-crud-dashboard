<dialog id="my_modal_3" class="modal">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <p class="text-2xl px-2 py-5">Add new user</p>
        <form action="<?php echo BASE_URL . 'actions/create_user.php'; ?>" method="POST">
            <label class="input input-bordered <?php echo $username_error ? 'input-error' : null; ?> flex items-center gap-2" for="username">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                </svg>
                <input type="text" id="username" name="username" class="grow" placeholder="Username" />
                <span class="text-red-500"><?php echo $username_error ?></span>
            </label> <br />
            <label class="input input-bordered <?php echo $email_error ? 'input-error' : null; ?> flex items-center gap-2" for="email">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path
                        d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                    <path
                        d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                </svg>
                <input type="text" id="email" name="email" class="grow" placeholder="Email" />
                <span class="text-red-500"><?php echo $email_error ?></span>
            </label> <br />
            <select class="select <?php echo $role_error ? 'select-error' : null; ?> select-bordered w-full max-w-xs" name="role" id="role">
                <option disabled selected>Select user's role</option>
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="user">User</option>
            </select><span class="ml-3 text-red-500"><?php echo $role_error ?></span><br /><br />
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</dialog>