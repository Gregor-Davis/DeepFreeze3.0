<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Index</title>
  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: rgb(240, 240, 240);
    }

    #map {
      position: static;
      width: 100%;
      height: 100%;
    }

    ;
  </style>
</head>


<body>
  <!-- Navigation -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="SDG.png" width="100" height="60" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Basket</a>
          </li>
        </ul>


        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="buttons">
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--https://sdgs.un.org/goals/goal1-->
  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Life on land</h1>
        </br>

        <img src="15.png" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably to manage forests, combat desertification and halt and reverse land degradation and halt biodiversity loss
        </p>
        <p>

          Deforestation and forest degradation, continued biodiversity loss and the ongoing degradation of ecosystems are having profound consequences for human well-being and survival. The world fell short on 2020 targets to halt biodiversity loss. The COVID-19 pandemic has shown that, by threatening biodiversity, humanity threatens its own survival

          While great efforts are being made to expand sustainable forest management, increase coverage of key biodiversity areas and sign up t o legislation and treaties for protecting biodiversity and ecosystems, much more needs to be done to put the health of the planet at the centre of all plans and policies.

        </p>

        <p>

          While the rate of deforestation in tropical regions has slowed in the past decad e, vigilance and targeted efforts are required to maintain this trend. The proportion of forest area fell from 31.9 per cent of total land area in 2000 to 31.2 per cent in 2020, representing a net loss of almost 100 million hectares of the world’s forests.

          Despite the losses in forest cover, above-ground forest biomass per hectare, the proportion of forest area in protected areas and under long-term management plans, and certified forest area all increased or remained stable at the global level and in most of the regions of the world, demonstrating global progress towards sustainable forest management

        </p>

        <p>

          In 2020, an average of 43 per cent of each terrestrial key biodiversity area, 42 per cent of each freshwater key biodiversity area, and 41 per cent of each mountain key biodiversity area were within protected areas, an increase of 13 to14 percentage points since 2000.

          As of February 2021, 127 countries and territories had committed to setting voluntary targets for achieving land degradation neutrality, and 68 countries and territories had already officially endorsed their targets
        </p>

        <p>

        <a href="https://ww2.rspb.org.uk/groups/dundee/"> The RSPB is a group of people dedicated to managing the habitat of multiple species </a>

        </p>

      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>
          Camperdown Wildlife Centre
          <br>
          <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

          <div class="infoPopup" id="infoPage" style="display: none;" >
            <form action="/No-Poverty.php" class="infoContainer">
              <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
            </form>
          </div>
          <br>
          Dundee University Botanic Gardens 
          <br>
          <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

          <div class="infoPopup" id="infoPage" style="display: none;" >
            <form action="/No-Poverty.php" class="infoContainer">
              <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
            </form>
          </div>
          <br>
          The D'Arcy Thompson Zoology Museum
          <br>
          <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

          <div class="infoPopup" id="infoPage" style="display: none;" >
            <form action="/No-Poverty.php" class="infoContainer">
              <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
            </form>
          </div>
          <br>
        </p>

      </div>
      <div class="col">
        <div id='map'>
          <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JlZ29yZG9vbSIsImEiOiJja3l1NjF4Z2wwM2MwMm50NHVqeG52c2Y0In0.KNoSFWWsfL7xrj2kAnwjpQ';
            var map = new mapboxgl.Map({
              container: 'map',
              style: 'mapbox://styles/mapbox/streets-v11',
              center: [-2.982, 56.467],
              zoom: 11
            });

            //map.addControl(new mapboxgl.NavigationControl());
            map.on('load', function () {

              map.addSource("dundee", {
                "type": "geojson",
                  "data": {
                    "type": "FeatureCollection",
                    "features": [
                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-3.041046, 56.488571]
                      },
                      "properties": {
                        "description": "Camperdown Wildlife Centre",
                        "icon": "marker"
                      }
                      },

                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-3.025727, 56.456281]
                      },
                      "properties": {
                        "description": "Dundee University Botanic Gardens",
                        "icon": "marker"
                      }
                    },

                    {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.983954, 56.457003]
                      },
                      "properties": {
                        "description": "D'Arcy Thompson Zoology Museum",
                        "icon": "marker"
                      }
                    },

                    ]},


                  })



              map.addLayer({
                "id": "points",
                "type": "symbol",
                "source": "dundee",
                "layout": {
                  'text-field': ['get', 'description'],
                  'text-variable-anchor': ['top', 'bottom', 'left', 'right'],
                  'text-radial-offset': 0.5,
                  'text-justify': 'auto',
                  'icon-image': ['concat', ['get', 'icon'], '-15']
                },
                'filter': ['==', '$type', 'Point']
              });

            });


          </script>
        </div>
      </div>
    </div>


    <div class="container" id="container2">
      <div class="col">
        <script>
          //Deals with hiding and showing the form
          function popUpWindow(){
            var popUp = document.getElementById("infoPage");

            if (popUp.style.display === "none") {
              popUp.style.display = "block";
            } else {
              popUp.style.display = "none";
            }
          }

        </script>

        <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

        <div class="infoPopup" id="infoPage" style="display: none;" >
          <form action="/No-Poverty.php" class="infoContainer">
            <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
          </form>
        </div>
    </div>
</div>
  <!-- Map -->
  <!-- How do you get this thing to float correctly in the text surrounding it? -->

</div>
</body>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>
