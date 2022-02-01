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
        <h1 class="text-center">Life below water</h1>
        </br>

        <img src="14.png" class="float-md-end mb-3 ms-md-3" alt="placeholder" style="height:300px; width:300px;">
        <p>
          Our goal is to conserve and sustainably use the oceans, seas and marine resources for sustainable development
        </p>
        <p>
          More than 3 billion people rely on the oceans for their livelihoods, and more than 80 per cent of world merchandise trade by volume is carried by sea. The oceans, seas and marine resources are under constant threat from pollution, warming and acidification that are disrupting marine ecosystems and the communities they support.

          While efforts to reduce nutrient inputs into coastal zones are showing success in some regions, algal blooms indicate that coastal eutrophication continues to be a challenge. Globally, anomalies of chlorophyll-a (the pigment responsible for photosynthesis in all plants and algae) in national exclusive economic zones decreased by 20 per cent from 2018 to 2020.

          Ocean acidification is caused by the absorption of atmospheric carbon dioxide by the ocean, resulting in a decreasing pH and threatening marine organisms and ocean-based services.
        </p>

        <p>
        Mean protected area coverage of marine key biodiversity areas increased globally from 28 per cent in 2000 to 44 per cent in 2020. However, there is considerable geographical variation in this progress, with coverage still less than one quarter of key biodiversity areas in Oceania (excluding Australia and New Zealand).

        Improved regulation, together with effective monitoring and surveillance, has proved successful in restoring overfished stocks to biologically sustainable levels. However, the adoption of such measures has generally been slow, in many developing countries in particular.
        </p>

        <p>
        Between 2018 and 2020, the average degree of implementation of international instruments to combat illegal, unreported and unregulated fishing improved around the world, with the global score measuring the implementation of the five principal instruments rising from 3 to 4 out of 5.

        On average, only 1.2 per cent of national research budgets was allocated to ocean science between 2013 and 2017, with amounts ranging from 0.02 per cent to 9.5 per cent. This is a small proportion in view of the conservatively estimated $1.5 trillion contribution of the ocean to the global economy in 2010.
        </p>

        <p>

        <a href="https://www.dundeecity.gov.uk/service-area/city-development/broughty-ferry-flood-protection-scheme">The broughty Ferry flood protection scheme is one ways Dundee is protecting the life below water</a>

        </p>


      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>
          Conservation areas such as Broughty Ferry:
          <ul>
            <li>Broughty Ferry</li>

            <li>West Ferry</li>
          </ul>
          <br>
          <br>
          <br>
          <br>
          <br>
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
                        "coordinates": [-2.856755, 56.469826 ]
                      },
                      "properties": {
                        "description": "Broughty ferry",
                        "icon": "marker"
                      }
                      },

                      {
                      "type": "Feature",
                      "geometry": {
                        "type": "Point",
                        "coordinates": [-2.888135, 56.469307]
                      },
                      "properties": {
                        "description": "West Ferry",
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
<<<<<<< HEAD
=======
        <p>
          Dundee Bairns is a charity working to benefit children in Dundee, addressing inequality in basic needs such as food and clothing.
          <br>
          <br>
          Dundee Fighting for Fairness is a charity to voice for people in poverty in Dundee.
          <br>
          <br>
          Positive Steps Partnership is a that charity provides supported accommodation services for vulnerable adults
          <br>
          <br>
          FareShare Dundee provides support to homeless and vulnerable individuals and offers training and volunteering opportunities. One of their projects - Transform Furniture - is a community based project that works towards overcoming poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amount of household goods that end up in landfill.
        </p>
>>>>>>> 9a33fb3939f6f3326e1496e853b4e1ca25dcfbef
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
<<<<<<< HEAD
=======

        <button type="button" class="btn btn-dark" onclick="popUpWindow();">More info</button>

        <div class="infoPopup" id="infoPage" style="display: none;" >
          <form action="/No-Poverty.php" class="infoContainer">
            <label for="info">In 2019, 12,000 disag poverty by providing quality reusable furniture and electrical household items to disadvantaged local groups, and training and employment opportunities for local people having difficulties in finding a job whilst reducing the amou</label>
          </form>
        </div>
>>>>>>> 9a33fb3939f6f3326e1496e853b4e1ca25dcfbef
    </div>
</div>
  <!-- Map -->
  <!-- How do you get this thing to float correctly in the text surrounding it? -->

</div>
</body>


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>
