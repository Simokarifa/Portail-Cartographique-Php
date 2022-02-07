<?php
include "connexion.php";
$connexion = mysqli_connect($serveur, $user, $password, $base);
// Check connection
if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
};
$requette = "SELECT nom FROM centre_commercial ORDER BY nom ASC";
$resultat = mysqli_query($connexion, $requette);
$row = mysqli_fetch_assoc($resultat);
//var_dump($row);
include("get_data.php");
//var_dump($resultat);
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Formulaire de selection des zonnes recherche">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Rechercher</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Consulter.css" media="screen">
    <meta name="generator" content="Nicepage 3.15.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link rel="stylesheet" href="../css/form.css" media="screen">

    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <!-- Appel du Script-->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Site1",
            "url": "index.html",
            "logo": "images/logop8_bicolor_sans_fond.png",
            "sameAs": []
        }
    </script>
    <meta property="og:title" content="Consulter">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="../index.html">
    <meta property="og:url" content="index.html">

</head>
<body class="u-body">
<header class="u-clearfix u-gradient u-header u-header" id="sec-7806">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-image u-logo u-image-1" data-image-width="955" data-image-height="512">
            <img src="../images/logop8_bicolor_sans_fond.png" class="u-logo-image u-logo-image-1"
                 data-image-width="177.5189">
        </a>
        <a class="u-image u-logo u-image-2" data-image-width="308" data-image-height="163">
            <img src="../images/logo.png" class="u-logo-image u-logo-image-2" data-image-width="186.6459">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Apropos.php" style="padding: 10px 60px;">A propos</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Consulter.php" style="padding: 10px 60px;">Consulter</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Rechercher.php" style="padding: 10px 60px;">Rechercher</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Contact.php" style="padding: 10px 60px;">Contact</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="Se-connecter.php" style="padding: 10px 60px;">Se connecter</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Apropos.php"
                                                      style="padding: 10px 60px;">A propos</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Consulter.php"
                                                      style="padding: 10px 60px;">Consulter</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Rechercher.php"
                                                      style="padding: 10px 60px;">Rechercher</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php"
                                                      style="padding: 10px 60px;">Contact</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Se-connecter.php"
                                                      style="padding: 10px 60px;">Se connecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section class="u-clearfix u-expanded-width-xl u-grey-5 u-section-1" id="carousel_52ad">
    <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-size-43 u-layout-cell-1">
                    <div class="u-container-layout u-valign-bottom u-container-layout-1">
                        <div id="map" class="u-clearfix u-custom-html u-custom-html-1">
                            <script>
                                var centreCommercial = <?php echo json_encode($centreCommercial); ?>;
                                var Communes =<?php echo json_encode($communes); ?>;
                                var Commerces =<?php echo json_encode($commerces); ?>;
                                var regions =<?php echo json_encode($region); ?>;


                                //création de map options
                                function getGeoJSON(liste) {
                                    var geoJSON = {
                                        "type": "FeatureCollection",
                                        'crs': {
                                            'type': 'name',
                                            'properties': {
                                                'name': 'EPSG:4326',
                                            }
                                        },
                                        "features": [],
                                    };
                                    // On parcourt les données de liste
                                    for (var i = 0; i < liste.length; i++) {
                                        var element = liste[i];
                                        // On fabrique le feature à partir de l'université. Pour cela on l'initialise.
                                        var feature = {
                                            "type": "Feature",
                                            "geometry": {},
                                            "properties": {}
                                        };
                                        for (var key in element) {
                                            if (key == "coordonnees") {
                                                // Pour les coordonnees, on les ajoute dans la clé "geometry".
                                                feature.geometry = JSON.parse(element[key]);
                                            } else if (key == "id") {
                                                // Pour la colonne (id) on l'ajoute dans la clé "id"
                                                feature[key] = element[key];
                                            } else {
                                                // Pour les autres colonnes (nom et autre) on les ajoute dans properties pour les afficher dans le popup
                                                feature.properties[key] = element[key];
                                            }
                                        }
                                        // Une fois le feature créé, on l'ajoute dans la clé "features" de notre objet "geoJSON"
                                        geoJSON.features.push(feature);
                                    }

                                    return geoJSON;
                                };
                                let centreComFeatures = getGeoJSON(centreCommercial);
                                let commeFeatures = getGeoJSON(Communes);
                                let commerceFeatures = getGeoJSON(Commerces);
                                let regionFeatures = getGeoJSON(regions);
                                // chargement du fond de carte
                                var osmLayer = new L.TileLayer("https://stamen-tiles.a.ssl.fastly.net/terrain/{z}/{x}/{y}.jpg");
                                var arcgisLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}');
                                var mapOptions = {
                                    center: [48.853, 2.35],
                                    zoom: 8,
                                    layers: [osmLayer]
                                }
                                // création de la carte
                                var map = new L.map('map', mapOptions);
                                var baseMaps = {
                                    "OSM": osmLayer,
                                    "Arcgis": arcgisLayer
                                };

                                L.control.layers(baseMaps).addTo(map);
                                //Definition des styles de couche
                                let styleRégion = {fillColor: '#EEEEEE', weight: 2, color: "red"};
                                let styleCommune = {fillColor: '#EEEEEE', weight: 2, color: "black"};

                                //Ajout des couches Géojson
                                L.geoJSON(centreComFeatures, {
                                    //Ajout du marqueur à la couche
                                    pointToLayer: function (feature, latlng) {
                                        //Definition d'une variable icon
                                        var commerceIcon = new L.icon({
                                            iconUrl: '../images/icons/commercial-places.png',
                                            iconSize: [30, 30],
                                            iconAnchor: [0, 9]
                                        });
                                        //Definition du Marqueur
                                        var commerceMarker = L.marker(latlng, {
                                            icon: commerceIcon,
                                        });
                                        //Ajout de la Popup
                                        commerceMarker.bindPopup(feature.properties.nom, {closeButton: false});
                                        //Activation et desactivaction de la popup avec Jquery
                                        commerceMarker.on('mouseover', function (e) {
                                            this.openPopup();
                                        });
                                        commerceMarker.on('mouseout', function (e) {
                                            this.closePopup();
                                        });
                                        return commerceMarker;
                                    }
                                }).addTo(map);
                                L.geoJSON(commerceFeatures, {
                                    //Ajout du marqueur à la couche
                                    pointToLayer: function (feature, latlng) {
                                        //Definition d'une variable icon
                                        var commerceIcon = new L.icon({
                                            iconUrl: '../images/icons/magasin3.png',
                                            iconSize: [30, 30],
                                            iconAnchor: [0, 9]
                                        });
                                        //Definition du Marqueur
                                        var commerceMarker = L.marker(latlng, {
                                            icon: commerceIcon,
                                        });
                                        //Ajout de la Popup
                                        commerceMarker.bindPopup(feature.properties.nom, {closeButton: false});
                                        //Activation et desactivaction de la popup avec Jquery
                                        commerceMarker.on('mouseover', function (e) {
                                            this.openPopup();
                                        });
                                        commerceMarker.on('mouseout', function (e) {
                                            this.closePopup();
                                        });
                                        return commerceMarker;
                                    }
                                }).addTo(map);
                                L.geoJSON(commeFeatures, {
                                    style: styleCommune
                                }).addTo(map);
                                L.geoJSON(regionFeatures, {
                                    style: styleRégion
                                }).addTo(map);

                                /*Legend specific Pour la carte*/
                                var legend = L.control({position: "topright"});
                                legend.onAdd = function (map) {
                                    var div = L.DomUtil.create("div", "legend");
                                    div.innerHTML += "<h4>Légende</h4>";
                                    div.innerHTML += '<i style="background: #477AC2"></i><span>Source</span><br>';
                                    div.innerHTML += '<i style="background: #448D40"></i><span>Forêt</span><br>';
                                    div.innerHTML += '<i style="background: #E6E696"></i><span>Terre</span><br>';
                                    div.innerHTML += '<i style="background: #E8E6E0"></i><span>Residentielle</span><br>';
                                    div.innerHTML += '<i style="background: #FFFFFF"></i><span>Glasse</span><br>';
                                    div.innerHTML += '<i class="icon" style="background-image: url(https://d30y9cdsu7xlg0.cloudfront.net/png/194515-200.png);background-repeat: no-repeat;"></i><span>Limites territoriales</span><br>';


                                    return div;
                                };

                                legend.addTo(map);


                            </script>
                        </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-palette-1-dark-1 u-radius-0 u-shape-round u-size-17 u-layout-cell-2"
                     data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0"
                     data-animation-direction="">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                        <p class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1">Formulaire de
                            selection des zones recherche</p>
                        <br>
                        <div id="iputButton">
                            <input type="radio" id="req1" name="drone" data-formid="form1">
                            <label for="req1">Communes à Xdistance d'un centre_C</label>
                            <br>
                            <input type="radio" id="req2" name="drone" data-formid="form2">
                            <label for="req2">Communes à Xdistance d'un commerce</label>
                            <br>
                            <input type="radio" id="req3" name="drone" data-formid="form3">
                            <label for="req3">Rechercher 3 selon..</label>

                        </div>
                        <div class="formX u-form u-form-1" id="form1" style="display: none">
                            <form action="./display_data.php" method="get">
                                <div>
                                    <label for="name-e4cc">Distance</label>
                                    <br>
                                    <input onchange="showKm()" type="range" id="km" name="km" min="0" max="20" style="vertical-align: text-bottom;"><span style="margin-right:25px; color: white" id="valueKM"></span>
                                </div>
                                <br>
                                <div class="u-form-group u-form-name u-form-group-1">
                                    <label for="name-e4cc">Centre commercial</label>
                                    <br>
                                    <select id="nom" name="nom" style="color: black;" >
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resultat)) {
                                            echo '<option value="' . $row["nom"] . '"selected;>';
                                            echo $row["nom"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <div class="u-form-group u-form-submit u-form-group-3">
                                    <input type="submit" value="Valider" style="color: black">
                                </div>
                            </form>
                        </div>

                        <div class="formX u-form u-form-1" id="form2" style="display: none">
                            <form action="#" method="POST"
                                  class="u-block-2fe1-21 u-clearfix u-form-spacing-20 u-form-vertical u-inner-form"
                                  source="custom">
                                <div class="u-form-group u-form-name u-form-group-1">
                                    <label for="name-e4cc">Communes</label>
                                    <select id="ncc" name="ncc">
                                        <option>Val1</option>
                                        <option>Val2</option>
                                        <option>Val3</option>
                                        <option>Val3</option>
                                        <option>Val4</option>
                                        <option>Val5</option>
                                        <option>Val6</option>
                                    </select>
                                </div>
                                <div class="u-form-email u-form-group u-form-group-2">
                                    <label for="email-e4cc" class="u-form-control-hidden u-label u-text-body-alt-color"
                                           wfd-invisible="true">Email</label>
                                    <input type="text" placeholder="Enter la distance de recherche" id="email-e4cc"
                                           name="distance"
                                           class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color"
                                           required="">
                                </div>
                                <div class="u-form-group u-form-submit u-form-group-3">
                                    <a href="#"
                                       class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1">Submit</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden u-grey-5"
                                           wfd-invisible="true">
                                </div>
                                <div class="u-form-send-message u-form-send-success" wfd-invisible="true">Thank you!
                                    Your message has been sent.
                                </div>
                                <div class="u-form-send-error u-form-send-message" wfd-invisible="true">Unable to send
                                    your message. Please fix errors then try again.
                                </div>
                                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                            </form>
                        </div>
                        <div class="formX u-form u-form-1" id="form3" style="display: none">
                            <form action="#" method="POST"
                                  class="u-block-2fe1-21 u-clearfix u-form-spacing-20 u-form-vertical u-inner-form"
                                  source="custom">
                                <div class="u-form-group u-form-name u-form-group-1">

                                    <input type="checkbox" name="data input">
                                    <label for="name-e4cc">Option 1</label>
                                    <br>
                                    <input type="checkbox" name="data input">
                                    <label for="name-e4cc">Option 2</label>
                                    <br>
                                    <input type="checkbox" name="data input">
                                    <label for="name-e4cc">Option 2</label>
                                    <br>
                                    <input type="checkbox" name="data input">
                                    <label for="name-e4cc">Option 2</label>
                                    <br>
                                    <input type="checkbox" name="data input">
                                    <label for="name-e4cc">Option 2</label>

                                </div>
                                <div class="u-form-email u-form-group u-form-group-2">
                                    <label for="email-e4cc" class="u-form-control-hidden u-label u-text-body-alt-color"
                                           wfd-invisible="true">Email</label>
                                    <input type="text" placeholder="Enter la distance de recherche" id="email-e4cc"
                                           name="distance"
                                           class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color"
                                           required="">
                                </div>
                                <div class="u-form-group u-form-submit u-form-group-3">
                                    <a href="#"
                                       class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-none u-text-body-alt-color u-text-hover-white u-btn-1">Submit</a>
                                    <input type="submit" value="submit" class="u-form-control-hidden u-grey-5"
                                           wfd-invisible="true">
                                </div>
                                <div class="u-form-send-message u-form-send-success" wfd-invisible="true">Thank you!
                                    Your message has been sent.
                                </div>
                                <div class="u-form-send-error u-form-send-message" wfd-invisible="true">Unable to send
                                    your message. Please fix errors then try again.
                                </div>
                                <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="u-clearfix u-footer u-palette-1-dark-1" id="sec-2cf0">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
            <a class="u-social-url" title="facebook" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link"
                                                                                                   preserveAspectRatio="xMidYMin slice"
                                                                                                   viewBox="0 0 112 112"
                                                                                                   style=""><use
                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3a48"></use></svg><svg
                            class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-3a48"><circle
                                fill="currentColor"
                                cx="56.1" cy="56.1"
                                r="55"></circle><path
                                fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
            </a>
            <a class="u-social-url" title="twitter" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link"
                                                                                                  preserveAspectRatio="xMidYMin slice"
                                                                                                  viewBox="0 0 112 112"
                                                                                                  style=""><use
                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5aa8"></use></svg><svg
                            class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5aa8"><circle
                                fill="currentColor"
                                class="st0" cx="56.1"
                                cy="56.1"
                                r="55"></circle><path
                                fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
            </a>
            <a class="u-social-url" title="instagram" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link"
                                                                                                    preserveAspectRatio="xMidYMin slice"
                                                                                                    viewBox="0 0 112 112"
                                                                                                    style=""><use
                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-feeb"></use></svg><svg
                            class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-feeb"><circle
                                fill="currentColor"
                                cx="56.1" cy="56.1"
                                r="55"></circle><path
                                fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path
                                fill="#FFFFFF"
                                d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path
                                fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
            </a>
            <a class="u-social-url" title="linkedin" target="_blank" href=""><span
                        class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link"
                                                                                                   preserveAspectRatio="xMidYMin slice"
                                                                                                   viewBox="0 0 112 112"
                                                                                                   style=""><use
                                xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2ad5"></use></svg><svg
                            class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2ad5"><circle
                                fill="currentColor"
                                cx="56.1" cy="56.1"
                                r="55"></circle><path
                                fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
            </a>
        </div>
    </div>
</footer>
<script>
    function showKm() {
        var x = document.getElementById("km").value;
        if (document.getElementById('ncc').value == "CommuneDistance") {
            document.getElementById("valueKM").innerHTML = x +"Km";
        } else {
            document.getElementById("valueKM").innerHTML = x+"Km";
        }
    }
</script>
<script>
    //Recuperation de toutes les input radio dans une liste et boucle sur la liste
    document.getElementsByName("drone").forEach(function (radio) {

        //Ajout de l'évènement permettant de changer selon les input
        radio.addEventListener("change", function (event) {

            //Récuperation des formulaire de classe formX
            formX = document.getElementsByClassName("formX");

            //Faire disparaitre les formulaires à chaque fois qu'un autre est coché
            for (i = 0; i < formX.length; i++) {
                formX[i].style.display = "none"
                //console.log(formX[i]);
            }

            //Faire apparaitre le formulaire Correspondant au radio coché
            document.getElementById(event.target.dataset.formid).style.display = "block"
        });
    });
</script>
</body>
<section class="u-backlink u-clearfix u-grey-80">
    <a  target="_blank">
        <span><strong>DOUNOH Mohamed Karifa && FALL M'Barka</strong></span>
    </a>
    <p class="u-text">
        <span>|</span>
    </p>
    <a target="_blank">
        <span><i>Projet de conception de site web cartographique</i></span>
    </a>.
</section>
</html>
