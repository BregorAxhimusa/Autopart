<title>Advertisment</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-lg-5 mt-5">
      <div class="col-lg-12">
        <div class="card mt-5 custom-card-marketing">
          <div class="card-body px-5">
            <h5 class="mb-4">Marknadsföring</h5>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="row ">
                <div class="col-lg-6">
                  <label for="">Marknadsföringens namn</label>
                  <div class="input-group flex-nowrap">
                    <input type="text" name="" class="form-control" required>
                  </div>
                  <label for="">Länk</label>
                  <div class="input-group flex-nowrap">
                    <input type="text" name="" class="form-control" required>
                  </div>
                  <label for="">Placera</label>
                  <select class="input-group mdb-select md-form" name="">
                    <option value="" disabled selected>Välj ditt alternativ</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
                <div class="col-lg-6">
                  <label for="foto">Bild</label>
                  <div class="custom-file">
                    <input type="file" name="foto" class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile"></label>
                  </div>
                  <div class="text-center mt-5">
                    <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
                  </div>
                </div>
              </div>
              <button type="submit" name="" class="btn btn-success float-right py-3 mt-4 mr-0">Spara</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="col-lg-6">
          <div class="input-group mt-5 mb-2">
            <div class="search input-group-prepend">
              <span class="input-group-text bg-transparent border-right-0">
                <i class="fas fa-search text-secondary"></i>
              </span>
            </div>
            <input class="form-control search border-left-0" type="text" placeholder="Search" aria-label="Search"
            id="searchInput">
          </div>
        </div>
        <div class="custom-scroll-table table-responsive">
          <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Marknadsföringens namn</th>
                <th scope="col">Länk</th>
                <th scope="col">Bild</th>
                <th scope="col">Placera</th>
                <th scope="col">Alternativ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="pt-3">1</td>
                <td class="pt-3">Filan Fisteku</td>
                <td class="pt-3">Ferizaj</td>
                <td>
                  <img src="Views/assets/images/user.png" class="avatar" width="55px" height="30px" alt="">
                </td>
                <td class="pt-3">20/02/19</td>
                <td class="pt-3">
                  <a href="" class="custom-a" data-toggle="modal" data-target="#change-marketing">
                    <i class="fas fa-pen text-primary btn-icon mr-1"></i>
                  </a>
                  <a href="" class="custom-a">
                    <i class="far fa-times-circle text-danger btn-icon ml-1"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- change User -->
  <div class="modal fade" id="change-marketing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Editing adds: </h5>
          <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
          <i class="far fa-times-circle btn-icon"></i>
          </button>
        </div>
        <div class="modal-body border-0">
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Marknadsföringens namn</label>
            <div class="input-group flex-nowrap">
              <input type="text" value="" class="form-control">
            </div>
            <label for="">Länk</label>
            <div class="input-group flex-nowrap">
              <input type="text" value="" class="form-control">
            </div>
            <label for="foto">Bild</label>
            <div class="custom-file">
              <input type="file" name="fotoedit" class="custom-file-input" id="fotoedit" required>
              <label class="custom-file-label" for="customFile"></label>
            </div>
            <div class="text-center mt-4">
              <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
            </div>
            <label for="">Placera</label>
            <div class="input-group flex-nowrap">
              <input type="text" value="" class="form-control">
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-link custom-btn-close mr-auto" data-dismiss="modal">Avbryt</button>
            <button type="button" name="" class="btn btn-success custom-btn-add">Uppdatering</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>