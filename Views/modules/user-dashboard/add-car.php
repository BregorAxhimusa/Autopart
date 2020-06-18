<title>Add new car</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="row ml-lg-5 ml-md-0 mt-5">
      <div class="col-lg-12">
        <a class="btn btn1 mb-2 mt-2 mr-4"><img src="Views/assets/images/Icon-add.png" class="mr-2" alt="">Lägg till bil</a>
        <a class="btn btn2 mb-2 mt-2 disabled"><img src="Views/assets/images/Icon-add.png" class="mr-2" alt="">Lägg till autopart</a>
      </div>
      <div class="col-lg-12 mt-5">
        <div class="card custom-card-marketing">
          <div class="card-body">
            <h5>Du lägger till en bil.</h5>
            <form action="" method="POST" class="row" enctype="multipart/form-data">
              <div class="col-lg-6 p-5"><label for="" class="mt-3">Modell</label>
              <select class="input-group form-control mdb-select md-form">
                <option value="">Välj ditt alternativ</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
              </select>
              <label for="motor">Motor</label>
              <input type="number" step="any" name="" class="form-control" placeholder="Ex: 2.0 or 2000">
              <label for="year">År</label>
              <select name="year" id="carYear" class="form-control">
                <option value="">Välj år</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
              </select>
              <label for="kilometers">Kilometer</label>
              <select class=" form-control">
                <option value="" disabled="">Mileage</option>
                <option value="-20000">&lt; 20.000 km</option>
                <option value="20000-80000">20.000 km - 80.000 km</option>
                <option value="80000-140000">80.000 km - 140.000 km</option>
                <option value="140000-200000">140.000 km - 200.000 km</option>
                <option value="200000-">&gt; 200.000 km</option>
              </select>
            </select>
            <label for="transmision">Sändning</label>
            <select name="transmision" class="form-control" id="">
              <option value="Automatic">Automatic</option>
              <option value="Manual">Manual</option>
              <option value="Semi-Automatic">Semi-Automatic</option>
            </select>
            <label for="fuel">Bränsle</label>
            <select name="fuel" class="form-control" id="">
              <option value="Diesel">Diesel</option>
              <option value="Gas">Gas</option>
              <option value="Hybrid">Hybrid</option>
            </select>
            <label for="" class="mt-3">Pris</label>
            <div class="input-group flex-nowrap">
              <input type="number" min="0" class="form-control">
            </div>
            <label for="" class="mt-3">Bilstat</label>
            <select class="form-control md-form">
              <option value="" disabled selected>Välj ditt alternativ</option>
              <option value="">Good</option>
              <option value="">Defect</option>
              <option value="">Option 3</option>
            </select>
            <label for="" class="mt-3">Status</label>
            <select class="form-control">
              <option value="" disabled selected>Välj ditt alternativ</option>
              <option value="1">Active</option>
              <option value="2">Unactive</option>
            </select>
          </div>
          <div class="col-lg-6 p-5">
            <div>
              <label>Sätt i bilder</label>
              <input type="file" name="files">
            </div>
            <label for="" class="mt-3">Beskrivning</label>
            <div class="input-group flex-nowrap">
              <textarea type="text" class="form-control custom-textarea"></textarea>
            </div>
            <hr>
            <h6>Andra specifikationer</h6>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="airbag">
              <label class="custom-control-label" for="airbag">Airbag</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="abs">
              <label class="custom-control-label" for="abs">Abs</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="klima">
              <label class="custom-control-label" for="klima">Klimat</label>
            </div>
            <label for="">Säten:</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="onetofive">
              <label class="custom-control-label" for="onetofive">0-5</label>
              <br>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="five">
              <label class="custom-control-label" for="five">5+</label>
            </div>
            <label for="">Skada:</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="nodamage">
              <label class="custom-control-label" for="nodamage">Nej skada</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="bodydamage">
              <label class="custom-control-label" for="bodydamage">Kropp skada</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="" class="custom-control-input" id="technicaldamage">
              <label class="custom-control-label" for="technicaldamage">Teknisk skada</label>
            </div>
            <button type="submit" class="btn btn-success mt-4 w-100 mb-2 py-3 float-right">Spara</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>