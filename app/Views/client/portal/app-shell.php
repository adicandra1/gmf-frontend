<?= $this->include('client/portal/partials/_head-html') ?>

<body>
<div class="container-scroller">

<?= $this->include('client/portal/partials/_horizontal-navbar') ?>

<div class="container-fluid page-body-wrapper">
	<div class="main-panel">
		<div class="content-wrapper">

			<?= $this->renderSection('content') ?>
			
		</div>
	</div>
</div>

</div>

    <!-- base:js -->
    <script src="<?= base_url() . PORTAL_ASSETS_RELATIVE_PATH . 'vendors/base/vendor.bundle.base.js' ?>"></script>
    <!-- endinject -->
	<!-- Plugin js for this page-->
	<?= $this->renderSection('js-plugin') ?>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url() . PORTAL_ASSETS_RELATIVE_PATH . 'js/template.js' ?>"></script>
    <!-- endinject -->

    <?= $this->renderSection('additional-js') ?>
</body>

</html>