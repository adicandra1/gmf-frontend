<?php

use App\Views\ViewHelper;
?>
<?= $this->include('Client/Portal/Partials/_head-html') ?>

<body>

	<?= $this->renderSection('body') ?>
			
    <!-- base:js -->
    <script src="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'vendors/base/vendor.bundle.base.js') ?>"></script>
    <!-- endinject -->
	<!-- Plugin js for this page-->
	<?= $this->renderSection('js-plugin') ?>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url(ViewHelper::PORTAL_ASSETS_RELATIVE_PATH . 'js/template.js') ?>"></script>
    <!-- endinject -->

    <?= $this->renderSection('additional-js') ?>
</body>

</html>