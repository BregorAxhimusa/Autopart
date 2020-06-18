<title>Users</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-md-5 mt-5">
      <div class="col-lg-6 col-md-12">
        <button class="btn btn-success mb-2 mt-2 btn-round" type="button" data-toggle="modal"
        data-target="#add-user"><i class="fas fa-plus mr-2"></i>Lägg till användare</button>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="input-group mt-2">
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
                <th scope="col">Fullständiga namn</th>
                <th scope="col">Adress</th>
                <th scope="col">Telefonnummer</th>
                <th scope="col">E-mail</th>
                <th scope="col">Bild</th>
                <th scope="col">I Systemet</th>
                <th scope="col">Alternativ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="pt-3">1</td>
                <td class="pt-3">Filan Fisteku</td>
                <td class="pt-3">Ferizaj</td>
                <td class="pt-3">044-882</td>
                <td class="pt-3">Filan@gmail.com</td>
                <td>
                  <img src="Views/assets/images/qwe.png" class="avatar circle" width="40px" height="40px" alt="">
                </td>
                <td class="pt-3">20/02/19</td>
                <td class="pt-3">
                  <a href="" class="custom-a" data-toggle="modal" data-target="#change-user">
                    <i class="fas fa-pen text-primary btn-icon mr-1"></i>
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
  <!-- Add User -->
  <div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Lägg till användare</h5>
          <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
          <i class="far fa-times-circle btn-icon"></i>
          </button>
        </div>
        <div class="modal-body border-0">
          <form action="" method="" enctype="multipart/form-data">
            <label for="">Fullständiga namn</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" class="form-control" required>
            </div>
            <label for="">Adress</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" class="form-control" required>
            </div>
            <label for="">Telefonnummer</label>
            <div class="input-group flex-nowrap">
              <input type="number" name="" class="form-control">
            </div>
            <label for="foto">Bild</label>
            <div class="custom-file">
              <input type="file" name="" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Välj FIL</label>
            </div>
            <div class="text-center mt-4">
              <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
            </div>
            <label for="">Användarnamn</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" class="form-control" required>
            </div>
            <label for="">Lösenord</label>
            <div class="input-group flex-nowrap">
              <input type="password" name="" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button role="button" class=" btn btn-link mr-auto" data-dismiss="modal">Avbryt</button>
            <button type="submit" name="" class="btn btn-success">Spara</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- change User -->
  <div class="modal fade" id="change-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Redigerar användare: Filan</h5>
          <button type="button" class="close w-auto bg-transparent" data-dismiss="modal" aria-label="Close">
          <i class="far fa-times-circle btn-icon"></i>
          </button>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="modal-body border-0">
            <label for="">Fullständiga namn</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" value="" class="form-control">
            </div>
            <label for="">Adress</label>
            <div class="input-group flex-nowrap">
              <input type="text" name="" value="" class="form-control">
            </div>
            <label for="">Telefonnummer</label>
            <div class="input-group flex-nowrap">
              <input type="number" name="" value="" class="form-control">
            </div>
            <label for="">E-mail</label>
            <div class="input-group flex-nowrap">
              <input type="email" name="" value="" class="form-control">
            </div>
            <label for="foto">Bild</label>
            <div class="custom-file">
              <input type="file" name="foto" class="custom-file-input" id="customFile" required>
              <label class="custom-file-label" for="customFile"></label>
            </div>
            <div class="text-center mt-4">
              <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
            </div>
            <label for="">I Systemet</label>
            <div class="input-group flex-nowrap form-section">
              <input type="text" name="" class="form-control wu-input border-gray" date="datepicker" id="date">
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-link mr-auto" data-dismiss="modal">Avbryt</button>
            <button type="submit" name="" class="btn btn-success">Uppdatering</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>