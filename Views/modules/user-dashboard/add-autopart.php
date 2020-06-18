<title>Add new autopart</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-lg-5 ml-md-0 mt-5">
      <div class="col-lg-12">
        <a class="btn btn1 mb-2 mt-2 mr-4 disabled"><img src="Views/assets/images/Icon-add.png" class="mr-2" alt="">Lägg till bil</a>
        <a class="btn btn2 mb-2 mt-2"><img src="Views/assets/images/Icon-add.png" class="mr-2" alt="">Lägg till autopart</a>
      </div>
      <div class="col-lg-12 mt-3">
        <div class="card custom-card-shtop">
          <div class="card-body px-5">
            <h5>Du lägger till en bil.</h5>
            <div class="">
              <form action="" method="POST" class="row" enctype="multipart/form-data">
                <div class="col-lg-6  pt-2">
                  <label for="" class="mt-3">Titel</label>
                  <div class="input-group flex-nowrap">
                    <input type="text" name="" class="form-control" required>
                  </div>
                  <label for="" class="mt-3">Pris</label>
                  <div class="input-group flex-nowrap">
                    <input type="text" name="" class="form-control" required>
                  </div>
                  <label for="" class="mt-3">Marks</label>
                  <select name="" class="form-control">
                    <option value="" disabled selected>Välj ditt alternativ</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label for="" class="mt-3">Status</label>
                  <select name="" class="form-control">
                    <option value="" disabled selected>Välj ditt alternativ</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label for="foto" class="mt-3">Bild</label>
                  <div class="custom-file">
                    <input type="file" name="fotoedit" class="custom-file-input" id="" required>
                    <label class="custom-file-label" for="customFile"></label>
                  </div>
                  <div class="text-center my-2">
                    <img src="Views/assets/images/user.png" class="" width="150px" height="150px" alt="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <label for="" class="mt-3">Beskrivning</label>
                  <div class="input-group flex-nowrap">
                    <textarea type="text" name="" class="form-control custom-textarea" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-success my-3 w-50 py-3 float-right">Spara</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- TABLE -->
<section class="row mt-2">
  <div class="col-lg-11  m-auto">
    <div class="custom-scroll-table">
      <table class="table">
        <thead class="thead">
          <tr>
            <th scope="col">Titel</th>
            <th scope="col">Pris</th>
            <th scope="col">Marks</th>
            <th scope="col">Bild</th>
            <th scope="col">Beskrivning</th>
            <th scope="col">Status</th>
            <th scope="col">Datum/Tid</th>
            <th scope="col">Alternativ</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="pt-3">Zgllob</td>
            <td class="pt-3">12</td>
            <td class="pt-3">Golf 5</td>
            <td class="pt-3">
            <img src="Views/assets/images/user.png" class="avatar circle" width="55px" height="30px" alt=""></td>
            <td class="pt-3 table-description" title="">Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla Blla
            </td>
            <td> Active </td>
            <td class="pt-3">20/02/19</td>
            <td class="pt-3">
              <a href="edit-autoparts" class="custom-a btn-icon">
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
</section>