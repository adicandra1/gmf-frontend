<?= $this->extend('client/portal/app-shell') ?>

<?= $this->section('content') ?>


<div class="container">

    <ul class="job-listings mb-5">

        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">

            <!--a href="<?= base_url(PORTAL_ROOT_PATH) . '/' . 'dashboard' ?>"></a-->

            <div class="job-listing-logo">
                <img src="<?= base_url() . LANDINGPAGE_ASSETS_RELATIVE_PATH . 'images/job_logo_1.jpg' ?>" alt="Image" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2>Product Designer</h2>
                    <strong>Adidas</strong> - New York, New York
                    <h5>€65k - 75k • ac</h5>
                </div>
                <div class="job-listing-meta">
                    <span class="badge badge-primary">Apply</span>
                </div>
            </div>

        </li>

        <li class="job-listing d-block p-3 align-items-center">

            <p class="mb-3">Posted 5 days ago </p>

            <div class="section mb-4">
                <h3 class="text-header font-weight-bold">About this job</h3>
                <p><b>Type</b>: Full-time</p>
                <p><b>Experience level</b>: Mid-Level</p>
                <p><b>Role</b>: Frontend Developer</p>
            </div>

            <div class="section mb-4">
                <h3 class="text-header font-weight-bold">Requirement </h3>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">Technologies </h4>

                    <a href="#" class="badge badge-info">react</a>
                    <a href="#" class="badge badge-info">php</a>

                </div>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold"> Documents needed </h4>
                    <span class="badge badge-info">CV</span>
                    <span class="badge badge-info">KTP</span>
                </div>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">Gender </h4>
                    <a href="#" class="badge badge-info">All</a>
                </div>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">Skills </h4>
                    <ul>
                        <li>Great Attitude</li>
                        <li>Strong understanding of HTML, CSS, JS</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <h3 class="text-header font-weight-bold">Job description</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley not only five centuries,</p>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">Stack</h4>
                    <ul>
                        <li>React</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">What you will work on</h4>
                    <ul>
                        <li>Building Websites</li>
                        <li>Fixing Bugs</li>
                        <li>Make great lead</li>
                    </ul>
                </div>

                <div class="sub-section">
                    <h4 class="text-header font-weight-bold">Benefit</h4>
                    <ul>
                        <li>Great hardware</li>
                        <li>Weekend vacation</li>
                        <li>Free snack</li>
                    </ul>
                </div>


            </div>

        </li>

</div>



<?= $this->endSection() ?>