<title>inlägg</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-md-5 mt-5">
      <div class="col-lg-6 col-md-12">
        <div class="card custom-card-vp">
          <div class="card-body">
            <h4>Inlägg</h4>
            <label for="" class="float-right">20</label>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 ">
        <div class="input-group pt-4 mt-3">
          <div class="search input-group-prepend">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="fas fa-search text-secondary"></i>
            </span>
          </div>
          <input class="form-control search border-left-0" type="text" placeholder="Sök" aria-label="Search"
          id="searchInput">
        </div>
      </div>
      <div class="col-lg-12">
        <div class="custom-scroll-table table-responsive">
          <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Vem inlägg</th>
                <th scope="col">Posta</th>
                <th scope="col">Bil typ</th>
                <th scope="col">Beskrivning</th>
                <th scope="col">Bild</th>
                <th scope="col">Datum/Tid</th>
                <th scope="col">Alternativ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="pt-3">1</td>
                <td class="pt-3">Filan Fisteku</td>
                <td class="pt-3">22</td>
                <td class="pt-3">BMW</td>
                <td class="pt-3 table-description" title="">Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla
                </td>
                <td>
                  <img src="Views/assets/images/user.png" class="avatar circle" width="55px" height="30px" alt="">
                </td>
                <td class="pt-3">20/02/19</td>
                <td class="pt-3">
                  <a href="" class="custom-a btn-icon" data-toggle="modal" data-target="#change-user-vp">
                    <i class="fas fa-pen text-primary mr-1"></i>
                  </a>
                  <a href="" class="custom-a btn-icon">
                    <i class="far fa-trash-alt text-danger ml-1"></i>
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
  <div class="modal fade" id="change-user-vp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Redigerar inlägg: Inlägg 1</h5>
          <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
          <i class="far fa-times-circle btn-icon"></i>
          </button>
        </div>
        <form action="" method="" enctype="multipart/form-data">
          <div class="modal-body border-0">
            <label for="">Vem inlägg</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" value="" class="form-control">
            </div>
            <label for="">Posta</label>
            <div class="input-group flex-nowrap">
              <input type="number" class="form-control">
            </div>
            <label for="">Bil typ</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" value="" class="form-control">
            </div>
            <label for="">Beskrivning</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" value="" class="form-control">
            </div>
            <label for="foto">Bild</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <div class="text-center mt-4">
              <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
            </div>
            <label for="">Datum/Tid</label>
            <div class="input-group flex-nowrap form-section">
              <input type="text" name="" value="" class="form-control wu-input border-gray" date="datepicker" id="date">
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" name="" class="btn btn-link mr-auto" data-dismiss="modal">Avbryt</button>
            <button type="submit" name="" class="btn btn-info">Uppdatering</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>