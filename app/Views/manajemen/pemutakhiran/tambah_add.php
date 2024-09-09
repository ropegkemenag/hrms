<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Tambah Pegawai Baru</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Pemutakhiran</a></li>
              <li class="breadcrumb-item active">Pegawai Baru</li>
            </ol>
          </div>

        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-xxl-8">
        <div class="card">
          <div class="card-body">
            <form action="#" class="form-steps" autocomplete="off">
              <div class="step-arrow-nav mb-4">

                <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                  <li class="nav-item" role="biodata">
                    <button class="nav-link active" id="steparrow-biodata-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-biodata-info" type="button" role="tab" aria-controls="steparrow-biodata-info" aria-selected="true">Data Umum</button>
                  </li>
                  <li class="nav-item" role="pekerjaan">
                    <button class="nav-link" id="steparrow-pekerjaan-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-pekerjaan-info" type="button" role="tab" aria-controls="steparrow-pekerjaan-info" aria-selected="false">Pekerjaan</button>
                  </li>
                  <li class="nav-item" role="pendidikan">
                    <button class="nav-link" id="steparrow-pendidikan-info-tab" data-bs-toggle="pill" data-bs-target="#steparrow-pendidikan-info" type="button" role="tab" aria-controls="steparrow-pendidikan-info" aria-selected="false">Pendidikan</button>
                  </li>
                  <li class="nav-item" role="review">
                    <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Review</button>
                  </li>
                </ul>
              </div>

              <div class="tab-content">
                <div class="tab-pane fade show active" id="steparrow-biodata-info" role="tabpanel" aria-labelledby="steparrow-gen-info-tab">
                  <div>
                    <div class="mb-3">
                      <label class="form-label" for="steparrow-gen-info-password-input">Jenis Pegawai</label>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenispegawai" id="jenispegawai" value="1">
                          <label class="form-check-label" for="inlineRadio1">PNS</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenispegawai" id="jenispegawai" value="2">
                          <label class="form-check-label" for="inlineRadio2">PPPK</label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="steparrow-gen-info-password-input">NIP</label>
                      <input type="number" class="form-control" id="nip" placeholder="Masukan NIP Pegawai" required >
                      <div class="invalid-feedback">NIP Pegawai tidak boleh kosong</div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-email-input">Gelar Depan</label>
                          <input type="email" class="form-control" id="steparrow-gen-info-email-input" placeholder="Enter email" required >
                          <div class="invalid-feedback">Please enter an email address</div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-username-input">Nama Tanpa Gelar</label>
                          <input type="text" class="form-control" id="steparrow-gen-info-username-input" placeholder="Enter user name" required >
                          <div class="invalid-feedback">Please enter a user name</div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-username-input">Gelar Belakang</label>
                          <input type="text" class="form-control" id="steparrow-gen-info-username-input" placeholder="Enter user name" required >
                          <div class="invalid-feedback">Please enter a user name</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-email-input">Tempat Lahir</label>
                          <select class="form-select" name="">
                            <option value="">-</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-username-input">Tanggal Lahir</label>
                          <input type="date" class="form-control" id="steparrow-gen-info-username-input" placeholder="Enter user name" required >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-email-input">Jenis Kelamin</label>
                          <select class="form-select" name="">
                            <option value="">-</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-username-input">Status Pernikahan</label>
                          <select class="form-select" name="">
                            <option value="">-</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" for="steparrow-gen-info-username-input">Agama</label>
                          <select class="form-select" name="">
                            <option value="">-</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="steparrow-pekerjaan-info-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Ke Pekerjaan</button>
                  </div>
                </div>
                <!-- end tab pane -->

                <div class="tab-pane fade" id="steparrow-pekerjaan-info" role="tabpanel" aria-labelledby="steparrow-pekerjaan-info-tab">
                  <div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Upload Image</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div>
                    <div>
                      <label class="form-label" for="des-info-description-input">Description</label>
                      <textarea class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3" required></textarea>
                      <div class="invalid-feedback">Please enter a description</div>
                    </div>
                  </div>
                  <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                  </div>
                </div>

                <div class="tab-pane fade" id="steparrow-pendidikan-info" role="tabpanel" aria-labelledby="steparrow-pendidikan-info-tab">
                  <div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Upload Image</label>
                      <input class="form-control" type="file" id="formFile" />
                    </div>
                    <div>
                      <label class="form-label" for="des-info-description-input">Description</label>
                      <textarea class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3" required></textarea>
                      <div class="invalid-feedback">Please enter a description</div>
                    </div>
                  </div>
                  <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab" data-previous="steparrow-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-experience-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                  </div>
                </div>
                <!-- end tab pane -->

                <div class="tab-pane fade" id="pills-review" role="tabpanel">
                  <div class="text-center">

                    <div class="avatar-md mt-5 mb-4 mx-auto">
                      <div class="avatar-title bg-light text-success display-4 rounded-circle">
                        <i class="ri-checkbox-circle-fill"></i>
                      </div>
                    </div>
                    <h5>Well Done !</h5>
                    <p class="text-muted">You have Successfully Signed Up</p>
                  </div>
                </div>
                <!-- end tab pane -->
              </div>
              <!-- end tab content -->
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?= $this->endSection() ?>
