<!doctype html>
<html lang="en">

<head>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../Include/masterCSS.css">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Index</title>
  <!-- MAP -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
  <script src="../Scripts/maps.js"></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light" id="nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Company Name</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Item1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Item2</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col clearfix">
        <h1 class="text-center">Quality Education</h1>
        </br>
        <img src="../Images/4.jpg" class="float-md-end mb-3 ms-md-3" alt="Quality Education">
        <p>
          The impact of the COVID-19 pandemic on schooling is a “generational catastrophe”. Before the pandemic,
          progress was already slow and insufficient to achieve the education targets in the Goals. School closures
          caused by the pandemic have had devastating consequences for children’s learning and well-being. Hundreds of
          millions of children and young people are falling behind in their learning, which will have long-term impacts.
          One year into the COVID-19 crisis, two thirds of students worldwide are still affected by full or partial
          school closures. The most vulnerable children and those unable to access remote learning are at increased risk
          of never returning to school and of being forced into child marriage or child labour.
        </p>
        <p>
          It is estimated that 101 million additional children and young people (from grades 1 to 8) fell below the
          minimum reading proficiency level in 2020 owing to the consequences of the pandemic, which wiped out the
          education gains achieved over the past 20 years. Reading proficiency levels could recover by 2024, but only if
          exceptional efforts are devoted to the task through remedial and catch-up strategies.
        </p>
        <p>
          Just before the pandemic, 53 per cent of young people were completing secondary school globally, although the
          figure for sub-Saharan Africa was only 29 per cent. The rise in school completion rates may slow or even
          reverse depending on the duration of school closures, which are resulting in learning losses and affecting the
          motivation to attend school, and on the extent to which poverty might increase, adding to the obstacles faced
          by disadvantaged children.
        </p>
        <p>
          Data from before the pandemic for 76 mostly low- and middle-income countries and territories covering the
          period 2012–2020 indicate that 7 in 10 children who are 3 and 4 years of age are on track developmentally,
          with no significant differences between the sexes. However, many young children are unable to attend early
          education because of the pandemic and so are now entirely reliant on their caregivers for nurturing care.
          Unsafe conditions, negative interactions with caregivers and a lack of educational opportunities during the
          early years can lead to irreversible outcomes, affecting children’s potential for the remainder of their
          lives.
        </p>
        <p>
          The rate of participation in organized learning one year before the official age of entry into primary
          education rose steadily in the years before the pandemic, from 65 per cent in 2010 to 73 per cent in 2019, but
          with variation among countries and territories ranging from 12 per cent to nearly 100 per cent. Gender parity
          has been achieved in every region. The progress made over past years has been at risk since 2020 because early
          education facilities and primary schools closed in most countries and territories, preventing or limiting
          access to education, especially for children from low- and middle-income countries and territories.
        </p>
        <p>
          Disparities in access to education and learning outcomes persist across a range of education indicators. For
          example, there were still only 92 literate women and girls 15 years of age or older for every 100 literate
          boys and men of the same ag e range in 2019. Almost half of countries and territories with recent data did not
          achieve gender parity in primary completion, and only a handful of countries and territories demonstrate
          parity in tertiary enrolment ratios. Disparities by urban/rural geographical location and household wealth are
          typically more extreme, with one third and one sixth of countries and territories achieving parity in primary
          completion, respectively, and no countries or territories with recent data achieving parity in tertiary
          attendance. The pandemic is expected to lead to a reversal in recent progress towards equity. With the shift
          towards remote learning, those from the poorest households and other vulnerable groups are less equipped to
          participate and more likely to drop out permanently or for extended periods.
        </p>
        <p>
          According to data for the period from 2017 to 2019, more than one fifth of primary schools worldwide do not
          have access to basic drinking water, and more than one third lack basic handwashing facilities. In the least
          developed countries, more than two thirds of primary schools do not have access to electricity, with even
          lower rates of Internet access and computer availability for pedagogical purposes in schools.
        </p>
        <p>
          ODA for scholarships amounted to $1.7 billion in 2019, up from $1.3 billion in 2017. The European Union,
          France, Japan, Saudi Arabia and Turkey accounted for 55 per cent of this total.
        </p>
        <p>
          In 2019, 81 per cent of primary school teachers were trained, although that proportion was lower in
          sub-Saharan Africa (65 per cent) and Southern Asia (74 per cent). With the unprecedented lockdown as a result
          of the pandemic leading to total or partial school closures in most countries and territories, the teaching
          workforce was severely affected.
        </p>
        <p>
          Source: <a href="https://undocs.org/en/E/2021/58">Progress towards the Sustainable Development Goals -
            E/2021/58</a>
        </p>
        <h3>Map Title</h3>
        <div class="map" id="map">
          <script>
            loadMap("map", <?php
              require_once("../Include/load_map.php");
              load_map(4);
            ?>);
          </script>
        </div>
        <sub>Information about the map</sub>
      </div>
    </div>
  </div>
  <footer class="footer border-top">
    <div class="container">
      <p>This is a footer</p>
    </div>
  </footer>
</body>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</html>