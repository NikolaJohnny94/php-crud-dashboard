<body>
    <div class="overflow-x-auto h-[90vh] m-auto">
        <!-- Error messages section -->
        <?php include 'includes/layout/navbar.php'; ?>
        <!-- Error messages section -->
        <?php include 'includes/error_messages.php'; ?>
        <!-- There are no users section -->
        <?php if (empty($users)): ?>
            <p class="text-center text-2xl p-6 m-6">There are no users to display</p>
        <?php endif ?>
        <!-- Modals -->
        <?php include 'includes/forms/modals/add_user_modal.php'; ?>
        <?php include 'includes/forms/modals/edit_user_modal.php'; ?>
        <?php include 'includes/forms/modals/delete_user_modal.php'; ?>
        <!-- Table section -->
        <?php if (!empty($users)): ?>
            <?php include 'includes/table.php'; ?>
        <?php endif ?>
    </div>
    <!-- Footer -->
    <?php include 'includes/layout/footer.php'; ?>
    <script src="scripts/index.js"></script>
</body>