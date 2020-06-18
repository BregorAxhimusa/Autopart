<title>Car Marks</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-lg-5 ml-md-5 mt-5">
      <div class="col-lg-6">
        <div class="card custom-card-shm mt-3 pt-5 mt-2">
          <div class="card-body pl-4">
            <h5>Lägg till Mark</h5>
            <form action="" method="POST">
              <label for="" class="mt-5">Bil Mark</label>
              <div class="input-group flex-nowrap ">
                <input type="text" class="form-control" placeholder="Golf 5" required>
              </div>
              <button name="" class="btn btn-success btn-round float-right mt-2">Spara</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="input-group pt-5 mt-3">
          <div class="search input-group-prepend">
            <span class="input-group-text bg-transparent border-right-0">
              <i class="fas fa-search text-secondary"></i>
            </span>
          </div>
          <input class="form-control search border-left-0" type="text" placeholder="Search" aria-label="Search"
          id="searchInput">
        </div>
        <div class="custom-scroll-table mt-3 shto-marken-table table-responsive">
          <table class="table">
            <thead class="thead">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Mark</th>
                <th scope="col">Alternativ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="pt-3">1</td>
                <td class="pt-3">Filan Fisteku</td>
                <td class="pt-3">
                  <a href="" class="custom-a" data-toggle="modal" data-target="#change-user-shm">
                    <i class="far fa-edit text-primary btn-icon mr-1"></i>
                  </a>
                  <a href="" class="custom-a">
                    <i class="far fa-trash-alt text-danger btn-icon ml-1"></i>
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
  <div class="modal fade" id="change-user-shm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Redigera inlägg: Inlägg 2</h5>
          <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
          <i class="far fa-times-circle btn-icon"></i>
          </button>
        </div>
      <form action="" method="POST"></form>
      <div class="modal-body border-0">
        <label for="">Mark</label>
        <div class="input-group flex-nowrap">
          <input type="text" name="" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-link mr-auto" data-dismiss="modal">Avbryt</button>
        <button type="submit" name="" class="btn btn-info custom-btn-add">Uppdatering</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>