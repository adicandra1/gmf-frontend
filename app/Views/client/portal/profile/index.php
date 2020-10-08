<?= $this->extend('client/portal/app-shell') ?>

<?= $this->section('content') ?>

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-4 order-xl-2">

      <div class="card card-profile">
        <img src="/uploads/img/profile/abc.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
              <a href="#">
                <img src="/assets/img/profile/Eb5-ZokU0AIcE1r.jpeg" class="rounded-circle">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-5 pt-md-4 pb-0 pb-md-4">
          <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                                        <a href="#" class="btn btn-sm btn-default float-right">Message</a> -->
          </div>
        </div>
        <div class="card-body pt-4">
          <div class="row">
            <div class="col">
            </div>
          </div>
          <div class="text-center">
            <h5 class="h3">
              Wahyu Adi Candra<span class="font-weight-light"></span>
            </h5>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>candra@gmail.com </div>
            <div class="h5 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>Member Since 12 April 2020 </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-8 order-xl-1">

      <div class="card" id="profile-card">

        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Resume</h3>
            </div>
            <div class="col-4 text-right">
              <a href="" style="padding-right: 20px;">
                <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
              </a>
              <a href="" style="padding-right: 20px;">
                <i class="mdi mdi-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i>
              </a>
              <a href="#!">
                <i class="mdi mdi-printer" title="" data-toggle="tooltip" data-original-title="print"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="card-body section">
          <h6 class="heading-small text-muted mb-4">17 Aug 2020</h6>
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <img class="card-img-top" src="/uploads/img/profile/Eb5-ZokU0AIcE1r.jpeg" alt="Card image cap">
              </div>
            </div>
            <div class="col-lg-9">
              <div class="form-group">
                <div class="candidate-name">
                  <h2 class="text-primary">Wahyu Adi Candra</h2>
                </div>
                <div class="highest-information">
                  <h4>Teknik Informatika</h4>
                </div>
                <div class="highest-information">
                  <h4>Sekolah Tinggi Teknologi Adisutjipto</h4>
                </div>
                <div class="highest-information">
                  <h4>089619589714 | candra@gmail.com</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card-body section">

          <div class="section-head">
            <div class="row">
              <div class="col-8">
                <h6 class="heading-small text-muted mb-4">About Me</h6>
              </div>
              <div class="col-4 text-right">
                <a href="">
                  <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="pl-lg-4">
            <div class="row">

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Nama</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: Wahyu Adi Candra</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Email</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: candra@gmail.com</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Contact</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: 089619589714</label>
                </div>
              </div>


              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Date of Birth</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: 2020-07-30</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Address</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: Ngaren, Ngadirejo, Temanggung</label>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" name="name">Nationality</label>
                </div>
              </div>
              <div class=" col-lg-8">
                <div class="form-group">
                  <label class="name" for="name">: Indonesia</label>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="card-body section">

          <div class="section-head">
            <div class="row">
              <div class="col-8">
                <h6 class="heading-small text-muted mb-4">Experience
                  <i class="mdi mdi-briefcase text-primary"></i>
                </h6>
              </div>
              <div class="col-4 text-right">
                <a href="">
                  <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="section-body">
            <ul>
              <li>
                <div class="row">
                  <div class="pl-lg-4">
                    <div>
                      <h3 class="resume-title" id="lbl_preview_output_position_0">Fron end developer</h3>
                    </div>
                    <div>
                      <span class="resume-title" id="lbl_preview_output_position_0">PT. Gmf AeroAsia</span>
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group small-form-group">
                        <p>2020-04-01 to 2021-04-01</p>
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group small-form-group">
                        <p>Saya sekarang aktif sebagai mahasiswa di Sekolah Tinggi Teknologi Adisutjipto Yogyakarta terhitung sejak tahun 2016 dan sekarang menempuh semester delapan akhir.
                          Saya mengambil jurusan Teknik Informatika dengan konsentrasi sistem informasi berbasis website.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
              <li>
                <div class="row">
                  <div class="pl-lg-4">
                    <div>
                      <h3 class="resume-title" id="lbl_preview_output_position_0">Fron end developer</h3>
                    </div>
                    <div>
                      <span class="resume-title" id="lbl_preview_output_position_0">PT. Gmf AeroAsia</span>
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group small-form-group">
                        <p>2020-04-01 to 2021-04-01</p>
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <div class="form-group small-form-group">
                        <p>Saya sekarang aktif sebagai mahasiswa di Sekolah Tinggi Teknologi Adisutjipto Yogyakarta terhitung sejak tahun 2016 dan sekarang menempuh semester delapan akhir.
                          Saya mengambil jurusan Teknik Informatika dengan konsentrasi sistem informasi berbasis website.</p>
                      </div>
                    </div>
                  </div>
                </div>

              </li>
            </ul>
          </div>

        </div>

        <div class="card-body section">
          <div class="section-head">
            <div class="row">
              <div class="col-8">
                <h6 class="heading-small text-muted mb-4">Education
                  <i class="mdi mdi-school text-primary"></i>
                </h6>
              </div>
              <div class="col-4 text-right">
                <a href="">
                  <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="pl-lg-4">
              <div>
                <h3 class="resume-title" id="lbl_preview_output_position_0">Sekolah Tinggi Teknologi Adisutjipto</h3>
              </div>
              <div>
                <span class="resume-title" id="lbl_preview_output_position_0">Pt. GMF AeroAsia | Cegkareng , Indonesia </span>
              </div><br>
              <div class="col-xs-12">
                <div class="form-group small-form-group">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias perferendis ullam dolorem numquam libero soluta ut esse, nulla maxime, necessitatibus enim illum amet, tempora qui aspernatur architecto laudantium in voluptatibus?</p>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="card-body section">
          <div class="section-head">
            <div class="row">
              <div class="col-8">
                <h6 class="heading-small text-muted mb-4">Skills
                  <i class="mdi mdi-android-studio text-primary"></i>
                </h6>
              </div>
              <div class="col-4 text-right">
                <a href="">
                  <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="pl-lg-4">
              <div>
                <h3 class="resume-title" id="lbl_preview_output_position_0">Front End Developer</h3>
              </div>
              <br>
              <div class="col-xs-12">
                <div class="form-group small-form-group">
                  <p>HTML Programming, CSS, Microsoft Word, Microsoft PowerPoint</p>
                  <p>JavaScript, PHP And MySQL, Microsoft Excel</p>
                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="card-body section">
          <div class="section-head">
            <div class="row">
              <div class="col-8">
                <h6 class="heading-small text-muted mb-4">User information</h6>
              </div>
              <div class="col-4 text-right">
                <a href="">
                  <i class="mdi mdi-pencil text-primary pd-5" data-toggle="tooltip" data-original-title="edit"></i>
                </a>
              </div>
            </div>

          </div>

          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-username">KTP</label>
                  <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">CV</label>
                  <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Pas Foto</label>
                  <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Cover Letter</label>
                  <a href=""><i class="fas fa-download text-primary pd-5" data-toggle="tooltip" data-original-title="download"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>