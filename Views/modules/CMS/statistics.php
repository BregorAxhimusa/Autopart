<title>Statistics</title>
<section id="veshtro-shfrytezuesin">
  <div class="container-fluid">
    <div class="mt-5">
      <div class="col-lg-12 mb-lg-5 ml-lg-4 ml-md-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3 mr-3 custom-card-1">
              <div class="card-body">
                <h5>Inlägg</h5>
                <label for="" class="float-right">500</label>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 mr-3 custom-card-2">
              <div class="card-body">
                <h5>Användare</h5>
                <label for="" class="float-right">25</label>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 mr-3 custom-card-3">
              <div class="card-body">
                <h5>Kommentarer</h5>
                <label for="" class="float-right">12</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 ml-lg-5">
      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    </div>
  </div>
</section>
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
animationEnabled: true,
theme: "light2",
title: {
text: ""
},
axisY: {
includeZero: false
},
data: [{
type: "line",
dataPoints: [{
y: 450
},
{
y: 414
},
{
y: 520,
indexLabel: "highest",
markerColor: "red",
markerType: "triangle"
},
{
y: 460
},
{
y: 450
},
{
y: 500
},
{
y: 480
},
{
y: 480
},
{
y: 410,
indexLabel: "lowest",
markerColor: "DarkSlateGrey",
markerType: "cross"
},
{
y: 500
},
{
y: 480
},
{
y: 510
}
]
}]
});
chart.render();
}
</script>