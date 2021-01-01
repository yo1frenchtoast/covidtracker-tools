<!-- START MAP -->
<!-- START MAP -->
<!-- START MAP -->
<!-- START MAP -->


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<?php include(dirname(__FILE__) . '/selectEtCarte.php') ?>

<script id="departementTemplate" type="text/template">
    <!-- wp:heading -->
    <div id="numeroDepartement" data-num="numeroDepartement" data-nom="nomDepartement" class="departement">
        <h2>
            numeroDepartement - nomDepartement
            <a class="masquerDepartement pull-right" href="#">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                </svg>
            </a>
        </h2>
        <div class="row">
            <div class="col-md-4 shadow">
                <span style="font-size: 160%; color: couleurIncidence"><b>incidenceDepartement</b></span><br>
                <span><b>Taux d'incidence</b><br>
                Nombre de cas sur 7 jours pour 100k habitants. L'incidence moyenne en France est incidenceFrance, et le seuil d'alerte 50.<br></span>
                <span style="font-size: 70%;">Mise à jour : dateMaj</span>
            </div>
            <div class="col-md-4 shadow">
                <span style="font-size: 160%; color: couleurSaturationRea"><b>saturationRea</b></span><br>
                <span><b>Tension hospitalière</b>
                <br>Si supérieur à 100%, alors les patients Covid19 occupent plus de lits de réanimation qu'il n'y en avait avant l'épidémie</span><br>
                <span style="font-size: 70%;">Mise à jour : dateMaj</span>
            </div>
            <div class="col-md-4 shadow">
                <span style="font-size: 160%; color: couleurTauxPositivite"><b>tauxPositivite</b></span><br>
                <span><b>Taux de positivité</b>
                <br>Proportion de tests positifs dans l'ensemble des tests. Un chiffre bas peut être dû à une faible circulation du virus ou à un testing massif.</span><br>
                <span style="font-size: 70%;">Mise à jour : dateMaj</span>
            </div>
        </div>

        <h3 style="margin-top: 40px;">Vue d'ensemble</h3>
        <p>Ces quatre graphiques permettent d'évaluer l'épidémie dans le département. Le nombre de cas correspond à
            l'activité du virus. Le nombre d'hospitalisations, de réanimations et de décès hospitaliers permettent de
            mesurer la crise sanitaire.</p>
        <p align="center">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/dashboard_jour_nomDepartement.jpeg"
               target="_blank" rel="noopener noreferrer">
                <img src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/dashboard_jour_nomDepartement.jpeg"
                     width="100%" style="max-width: 1000px;">
            </a>
        </p>
        <h3 style="margin-top: 40px;">Incidence par tranche d'âge</h3>
        <p>Le taux d'incidence correspond au nombre de cas cumulé sur 7 jours rapporté à 100 000 habitants du
            département. Cet indicateur représente l'activité épidémique du virus. Le seuil d'alerte est de 50.</p>
        <p align="center">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/heatmaps_deps/heatmap_taux_numeroDepartement.jpeg"
               target="_blank" rel="noopener noreferrer">
                <img src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/heatmaps_deps/heatmap_taux_numeroDepartement.jpeg"
                     width="100%" style="max-width: 1000px;">
            </a>
        </p>
        <h3 style="margin-top: 40px;">Flux hospitaliers</h3>
        <p>Ce graphique présente l'évolution des entrées et sorties de l'hôpital pour motif Covid19.</p>
        <p align="center">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/hosp_journ_flux_nomDepartement.jpeg"
               target="_blank" rel="noopener noreferrer">
                <img src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/hosp_journ_flux_nomDepartement.jpeg"
                     width="100%" style="max-width: 1000px;">
            </a>
        </p>
        <h3 style="margin-top: 40px;">Tension hospitalière</h3>
        <p>Ce graphique présente la proportion de lits de réanimation occupés uniquement par les patients Covid19, par
            rapport au nombre de lits en temps normal (fin 2018, étude de la DREES).</p>
        <p align="center">
            <a href="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/saturation_rea_journ_nomDepartement.jpeg"
               target="_blank" rel="noopener noreferrer">
                <img src="https://raw.githubusercontent.com/rozierguillaume/covid-19/master/images/charts/france/departements_dashboards/saturation_rea_journ_nomDepartement.jpeg"
                     width="100%" style="max-width: 1000px;">
            </a>
        </p>
        <!-- wp:spacer {"height":50} -->
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <p><a href="#menu">Haut de page</a></p>
    </div>
</script>

<script id="legendTemplatePre" type="text/template">
    <table>
        <tbody>
</script>

<script id="legendTemplateMid" type="text/template">
    <tr>
        <td style="text-align: center; background-color: colorBg; color: white; font-size: 50%; padding: 5px;">valeur
        </td>
    </tr>
</script>

<script id="legendTemplatePost" type="text/template">
    </tbody>
    </table>

</script>

<script>
    jQuery(document).ready(function ($) {
            $('.dropdown-toggle').dropdown();

            var valeurs_cas = [">", "750", "650", "550", "450", "350", "300", "250", "200", "150", "100", "50", "25"]
            var couleurs_cas = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"]

            var valeurs_evolution = [">", "40", "30", "20", "10", "5", "0", "-5", "-10", "-20", "-30", "-40", "-50"];
            var couleurs_evolution = [
                "#4c0000",
                "#6a0000",
                "#f50e07",
                "#fb633b",
                "#fb9449",
                "#fbd763",
                "#b1df52",
                "#61c142",
                "#56ab3d",
                "#2e9c28",
                "#1c7b21",
                "#116522",
                "#084004"];


            var valeurs_hosp = [">", "50", "45", "40", "35", "30", "25", "20", "15", "10", "9", "6", "3"];
            var valeurs_lits_hosp = [">", "90", "80", "70", "60", "50", "40", "30", "25", "20", "15", "10", "5"];
            var couleurs_hosp = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"];

            var valeurs_positivite = [">", "25", "20", "15", "12", "10", "8", "6", "5", "4", "3", "2", "1"];
            var couleurs_positivite = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"];

            var valeurs_rea = [">", "10", "8", "6", "5", "4", "3", "2.5", "2", "1.5", "1", "0.5", "0.25"];
            var valeurs_lits_rea = [">", "25", "20", "17.5", "15", "12.5", "10", "7.5", "5", "4", "3", "2", "1"];
            var couleurs_rea = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"];

            var valeurs_saturation_rea = [">", "300", "250", "200", "180", "150", "120", "100", "80", "60", "40", "20", "10"];
            var couleurs_saturation_rea = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"];

            var valeurs_dc = [">", "12", "11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1"];
            var couleurs_dc = ["#3c0000", "#4c0000", "#6a0000", "#840000", "#a00000", "#c40001", "#d50100", "#e20001", "#f50e07", "#f95228", "#fb9449", "#98ac3b", "#118408"];

            var donneesDepartements;
            var donneesFrance;
            var dateMaj;
            var typeCarte = 'incidence-cas';

            fetch('https://raw.githubusercontent.com/rozierguillaume/covid-19/master/data/france/stats/incidence_departements.json')
                .then(response => {
                    if (!response.ok) {
                        throw new Error("HTTP error " + response.status);
                    }
                    return response.json();
                })
                .then(json => {
                    donneesDepartements = json['donnees_departements'];
                    donneesFrance = json['donnees_france'];
                    dateMaj = json["date_update"];
                    colorerCarte();
                });

            /*
             * Le lancement de l'animation se fait en ajoutant et retirant la classe animated
             * de la carte afin que tous les départements clignotent en meme temps.
             * Sans quoi chaqué département commence son clignotement au moment où on lui attribue
             * la classe selected.
             */
            var stopAnimation = function () {
                $("#map").removeClass("animated")
            }

            var startAnimation = function () {
                $("#map").addClass("animated")
            }

            function construireLegende(values = [], colors = [], pourcentage = false) {
                content = $('#legendTemplatePre').html();
                values.map((val, idx) => {
                    if (pourcentage && (val != '>')) {
                        if (val>0){
                            content += $('#legendTemplateMid').html().replaceAll("valeur", '+'+val + ' %').replaceAll("colorBg", colors[idx]);
                        } else {
                            content += $('#legendTemplateMid').html().replaceAll("valeur", val + ' %').replaceAll("colorBg", colors[idx]);
                        }
                    } else {
                        content += $('#legendTemplateMid').html().replaceAll("valeur", val).replaceAll("colorBg", colors[idx]);
                    }
                })
                content += $('#legendTemplatePost').html();
                $('#legendeCarte').html(content);
            }

            function recupererCouleur(valeur, tableauDonnees, tableauCouleurs) {
                for (i = 12; i > 0; i--) {
                    if (i == 1) {
                        return tableauCouleurs[i];
                    } else if (valeur <= tableauDonnees[i]) {
                        return tableauCouleurs[i];
                    }
                }
                return "#c4c4cb";
            }

            function colorerCarte() {
                pourcentage = false;
                if (typeCarte == 'incidence-cas') {
                    $('#titreCarte').html("Taux d'incidence");
                    $('#descriptionCarte').html("Nombre de cas cette semaine pour 100k habitants");
                    tableauValeurs = valeurs_cas;
                    tableauCouleurs = couleurs_cas;
                    nomDonnee = "incidence_cas";
                } else if (typeCarte == 'evolution-cas') {
                    $('#titreCarte').html("Évolution du nombre de cas sur les 7 derniers jours");
                    $('#descriptionCarte').html("Lecture : du rouge signifie une augmentation du nombre de cas sur les 7 derniers jours par rapport aux 7 jours précédents");
                    tableauValeurs = valeurs_evolution;
                    tableauCouleurs = couleurs_evolution;
                    nomDonnee = "incidence_evol";
                    pourcentage = true;
                } else if (typeCarte == 'taux-positivite') {
                    $('#titreCarte').html("Taux de positivité");
                    $('#descriptionCarte').html("Proportion des tests positifs cette semaine");
                    tableauValeurs = valeurs_positivite;
                    tableauCouleurs = couleurs_positivite;
                    nomDonnee = "taux_positivite";
                } else if (typeCarte == 'incidence-hospitalisations') {
                    $('#titreCarte').html("Admissions à l'hôpital avec Covid19");
                    $('#descriptionCarte').html("cette semaine et pour 100k habitants de chaque département");
                    tableauValeurs = valeurs_hosp;
                    tableauCouleurs = couleurs_hosp;
                    nomDonnee = "incidence_hosp";
                } else if (typeCarte == 'lits-hospitalisations') {
                    $('#titreCarte').html("Nombre de lits occupés à l'hôpital pour Covid19");
                    $('#descriptionCarte').html("pour 100k habitants de chaque département");
                    tableauValeurs = valeurs_lits_hosp;
                    tableauCouleurs = couleurs_hosp;
                    nomDonnee = "lits_hosp";
                } else if (typeCarte == 'evolution-lits-hospitalisations') {
                    $('#titreCarte').html("Évolution du nombre de lits occupés à l'hôpital pour Covid19");
                    $('#descriptionCarte').html("Du rouge signifie une augmentation du nombre de lits occupés par des patients Covid19 à l'hôpital");
                    tableauValeurs = valeurs_evolution;
                    tableauCouleurs = couleurs_evolution;
                    nomDonnee = "lits_hosp_evol";
                    pourcentage = true;
                } else if (typeCarte == 'incidence-deces') {
                    $('#titreCarte').html("Nombre de décès avec Covid19");
                    $('#descriptionCarte').html("cette semaine pour 100k habitants.");
                    tableauValeurs = valeurs_dc;
                    tableauCouleurs = couleurs_dc;
                    nomDonnee = "incidence_dc";
                } else if (typeCarte == 'evolution-deces') {
                    $('#titreCarte').html("Évolution du nombre de décès");
                    $('#descriptionCarte').html("sur les 7 derniers jours par rapport aux 7 jours précédents");
                    tableauValeurs = valeurs_evolution;
                    tableauCouleurs = couleurs_evolution;
                    nomDonnee = "incidence_dc_evol";
                    pourcentage = true;
                } else if (typeCarte == 'incidence-reanimations') {
                    $('#titreCarte').html("Admissions à l'hôpital avec Covid19");
                    $('#descriptionCarte').html("cette semaine et pour 100k habitants de chaque département");
                    tableauValeurs = valeurs_rea;
                    tableauCouleurs = couleurs_rea;
                    nomDonnee = "incidence_rea";
                } else if (typeCarte == 'saturation-reanimations') {
                    $('#titreCarte').html("Taux d'occupation des lits de réanimation");
                    $('#descriptionCarte').html("uniquement par les paitients Covid19");
                    tableauValeurs = valeurs_saturation_rea;
                    tableauCouleurs = couleurs_saturation_rea;
                    nomDonnee = "saturation_rea";
                } else if (typeCarte == 'lits-reanimations') {
                    $('#titreCarte').html("Nombre de lits de réanimation occupés pour Covid19");
                    $('#descriptionCarte').html("pour 100k habitants de chaque département");
                    tableauValeurs = valeurs_lits_rea;
                    tableauCouleurs = couleurs_hosp;
                    nomDonnee = "lits_rea";
                } else if (typeCarte == 'evolution-lits-reanimations') {
                    $('#titreCarte').html("Évolution du nombre de lits de réanimation occupés pour Covid19");
                    $('#descriptionCarte').html("Du rouge signifie une augmentation du nombre de lits de réanimation occupés par des patients Covid19");
                    tableauValeurs = valeurs_evolution;
                    tableauCouleurs = couleurs_evolution;
                    nomDonnee = "lits_rea_evol";
                    pourcentage = true;
                } else {
                    $('#carte path').css("fill", "#c4c4cb");
                    return;
                }

                construireLegende(tableauValeurs, tableauCouleurs, pourcentage);

                for (departement in donneesDepartements) {
                    // console.log(departement);
                    //Récupération du numéor de département à partir de la select.
                    numeroDepartement = $('#listeDepartements option[value="' + departement + '"]').data("num");
                    // console.log(numeroDepartement);
                    //Récupération des données du département.
                    donneesDepartement = donneesDepartements[departement];
                    // console.log(donneesDepartement);
                    //Affectation du numéro de département à sa représentation sur la carte. .
                    var departementCarte = $('#carte path[data-num="' + numeroDepartement + '"]');
                    //Affectation de la valeur de la donnée du département à sa représentation sur la carte. .
                    departementCarte.data(nomDonnee, donneesDepartement[nomDonnee]);
                    //Coloration du département sur la carte. .
                    departementCarte.css("fill", recupererCouleur(donneesDepartement[nomDonnee], tableauValeurs, tableauCouleurs));
                }
            }

            function afficherDepartement(nomDepartment, numeroDepartement) {
                console.log(donneesDepartements[nomDepartement]);
                incidenceDepartement = donneesDepartements[nomDepartement]["incidence_cas"]
                saturationRea = Math.round(donneesDepartements[nomDepartement]["saturation_rea"])
                tauxPositivite = donneesDepartements[nomDepartement]["taux_positivite"]
                incidenceFrance = Math.round(donneesFrance["incidence_cas"])

                if (incidenceDepartement > 100) {
                    couleurIncidence = "red";
                } else if (incidenceDepartement > 50) {
                    couleurIncidence = "orange";
                } else {
                    couleurIncidence = "green";
                }

                if (saturationRea > 80) {
                    couleurSaturationRea = "red";
                } else if (saturationRea > 30) {
                    couleurSaturationRea = "orange";
                } else {
                    couleurSaturationRea = "green";
                }

                if (tauxPositivite >= 5) {
                    couleurTauxPositivite = "red";
                } else if (tauxPositivite >= 1) {
                    couleurTauxPositivite = "orange";
                } else {
                    couleurTauxPositivite = "green";
                }

                if ($('#' + numeroDepartement).length > 0) {
                    return;
                }
                content = $('#departementTemplate').html();
                content = content.replaceAll('nomDepartement', nomDepartment);
                content = content.replaceAll('numeroDepartement', numeroDepartement);
                content = content.replaceAll('incidenceDepartement', incidenceDepartement);
                content = content.replaceAll('incidenceFrance', incidenceFrance);
                content = content.replaceAll('saturationRea', saturationRea + "%");
                content = content.replaceAll('tauxPositivite', tauxPositivite + "%");
                content = content.replaceAll('dateMaj', dateMaj);
                content = content.replaceAll('couleurIncidence', couleurIncidence);
                content = content.replaceAll('couleurSaturationRea', couleurSaturationRea);
                content = content.replaceAll('couleurTauxPositivite', couleurTauxPositivite);

                $('#donneesDepartements').prepend(content);
                //trierDepartements();
                stopAnimation();
                setTimeout(startAnimation, 0);
            }

            function trierDepartements() {
                $divs = jQuery("#donneesDepartements div.departement");

                alphabeticallyOrderedDeps = $divs.sort(function (a, b) {
                    return String.prototype.localeCompare.call($(a).data('num'), $(b).data('num'));
                });

                $("#donneesDepartements").html(alphabeticallyOrderedDeps);
            }

            $('.select2').select2({
                placeholder: 'Sélectionnez les départements que vous voulez consulter....',
                closeOnSelect: false,
            });

            $('.select2').val(null).trigger('change');

            $('div.departement').addClass('hidden');

            $('.select2').on('select2:select', function (e) {
                nomDepartement = e.params.data.id;
                numeroDepartement = e.params.data.element.dataset.num;
                $('#map path[data-num=' + numeroDepartement + ']').addClass('selected');
                // $('#' + nomDepartement).parent().removeClass('hidden');
                //afficherDepartement(nomDepartement, numeroDepartement);
            });

            $('.select2').on('select2:unselect', function (e) {
                nomDepartement = e.params.data.id;
                numeroDepartement = e.params.data.element.dataset.num;
                $('#map path[data-num=' + numeroDepartement + ']').removeClass('selected');
                $('#' + numeroDepartement).remove();
            });

            $('#unselectAll').click(function () {
                $("#listeDepartements option").each(function () {
                    $(this).attr('selected', false);
                });
                $("#listeDepartements").trigger('change');
                $('.departement').remove();
                $('#map path').removeClass('selected');
            });

            $('body').on('click', '.masquerDepartement', function (e) {
                e.preventDefault();
                numeroDepartement = $(this).parents('.departement').data("num");
                $("select option[data-num='" + numeroDepartement + "']").prop("selected", false);
                $('#map path[data-num=' + numeroDepartement + ']').removeClass('selected');
                $("#listeDepartements").trigger('change');
                $('#' + numeroDepartement).remove();
            });

            $('#selectAll').click(function () {

                //Sélection des toutes les options du select.
                $("#listeDepartements option").each(function () {
                    nomDepartement = $(this).val();
                    if (!$(this).attr('selected')) {
                        $(this).attr('selected', true);
                        if ($("#listeDepartements").val()) {
                            $("#listeDepartements").val($.merge([nomDepartement], $("#listeDepartements").val()));
                        } else {
                            $("#listeDepartements").val(nomDepartement);
                        }
                        //(nomDepartement, $(this).data("num"));
                        trierDepartements();
                    }
                });
                $("#listeDepartements").trigger('change');
                //Sélection des toutes les régions de la carte.
                $('#map path:not(.separator)').addClass('selected');
            });

            $('#carte path').hover(function (e) {
                departement = $(this).data("num");
                nomDepartement = $("#listeDepartements option[data-num='" + departement + "']").val();
                if (typeCarte == 'incidence-cas') {
                    $('#carte #map title').text(nomDepartement + ' (incidence : ' + $(this).data("incidence_cas") + ')');
                } else if (typeCarte == 'evolution-cas') {
                    signe = '';
                    if ($(this).data("incidence_evol") > 0) {
                        signe = '+';
                    }
                    $('#carte #map title').text(nomDepartement + ' (evolution cas : ' + signe + $(this).data("incidence_evol") + '%)');
                } else if (typeCarte == 'taux-positivite') {
                    $('#carte #map title').text(nomDepartement + ' (taux positivité : ' + $(this).data("taux_positivite").toFixed(2) + ')');
                } else if (typeCarte == 'incidence-hospitalisations') {
                    $('#carte #map title').text(nomDepartement + ' (incidence : ' + $(this).data("incidence_hosp").toFixed(2) + ')');
                } else if (typeCarte == 'lits-hospitalisations') {
                    $('#carte #map title').text(nomDepartement + ' (lits occupés : ' + $(this).data("lits_hosp").toFixed(2) + ')');
                } else if (typeCarte == 'evolution-lits-hospitalisations') {
                    signe = '';
                    if ($(this).data("lits_hosp_evol") > 0) {
                        signe = '+';
                    }
                    $('#carte #map title').text(nomDepartement + ' (evolution lits occupés : ' + signe + $(this).data("lits_hosp_evol") + '%)');
                } else if (typeCarte == 'incidence-deces') {
                    $('#carte #map title').text(nomDepartement + ' (incidence : ' + $(this).data("incidence_dc").toFixed(2) + ')');
                } else if (typeCarte == 'evolution-deces') {
                    signe = '';
                    if ($(this).data("incidence_dc_evol") > 0) {
                        signe = '+';
                    }
                    $('#carte #map title').text(nomDepartement + ' (evolution décès : ' + signe + $(this).data("incidence_dc_evol").toFixed(2) + '%)');
                } else if (typeCarte == 'incidence-reanimations') {
                    $('#carte #map title').text(nomDepartement + ' (incidence : ' + $(this).data("incidence_rea").toFixed(2) + ')');
                } else if (typeCarte == 'saturation-reanimations') {
                    $('#carte #map title').text(nomDepartement + ' (taux occupation : ' + $(this).data("saturation_rea").toFixed(0) + '%)');
                } else if (typeCarte == 'lits-reanimations') {
                    $('#carte #map title').text(nomDepartement + ' (lits réa occupés : ' + $(this).data("lits_rea").toFixed(2) + ')');
                } else if (typeCarte == 'evolution-lits-reanimations') {
                    signe = '';
                    if ($(this).data("lits_rea_evol") > 0) {
                        signe = '+';
                    }
                    $('#carte #map title').text(nomDepartement + ' (evolution lits réa occupés : ' + signe + $(this).data("lits_rea_evol") + '%)');
                } else {
                    $('#carte #map title').text(nomDepartement);
                }
            });

            $('#carte path').click(function (e) {
                numeroDepartement = $(this).data("num");
                nomDepartement = $("#listeDepartements option[data-num='" + numeroDepartement + "']").val();
                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                    $("select option[data-num='" + numeroDepartement + "']").prop("selected", false);
                    $("#listeDepartements").trigger('change');
                    $('#' + numeroDepartement).remove();
                } else {
                    $(this).addClass('selected');
                    if ($("#listeDepartements").val()) {
                        $("#listeDepartements").val($.merge([nomDepartement], $("#listeDepartements").val()));
                    } else {
                        $("#listeDepartements").val(nomDepartement);
                    }
                    $("#listeDepartements").trigger('change');
                    // $('#' + nomDepartement).parent().removeClass('hidden');
                    //afficherDepartement(nomDepartement, numeroDepartement);
                }
            });

            


        }
    )
</script>
<style>


    table,
    td {
        border: 0px solid #333;
        color: black;
        background-color: red;
    }

    .shadow {
        border: 0px solid black;
        padding: 12px;
        border-radius: 7px;
        text-align: left;
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        max-width: 350px;
        background: #ffffff;
        margin-left: 10px;
        margin-top: 10px;
    }

    #listeDepartements {
        width: 100%;
    }

    #map {
        max-width: 100%;
        max-height: 100%;
    }

    #map path {
        fill: #c4c4cb;
        stroke: #FFFFFF;
        stroke-width: 0.6;
        transition: fill 0.2s, stroke 0.3s;
        z-index: 1000;
        transition: fill 2s;
        fill-opacity: 1;
    }

    #map.animated path.selected {
        transition: fill 0.2s, stroke 0.3s;
        z-index: 9000;
        animation: blinker 1.5s linear infinite;
    }

    @keyframes blinker {
        50% {
            stroke-width: 2;
            fill-opacity: 0.5;
        }
    }

    #map path:hover {
        /*stroke-width: 2.6;*/
    }

    #map path.selected:hover {
        /*stroke-width: 0.6;*/
    }

    #map .separator {
        stroke: #ccc;
        fill: none !important;
        stroke-width: 1.5;
    }

    #titreCarte {
        font-size: 16px;
        font-weight: bold;
    }

    #map .separator:hover {
        stroke: #ccc;
        fill: none !important;
    }

    .btn-primary {
        background-color: #86AAE0;
        border-color: #86AAE0;
    }

    .btn-primary.active, .btn-primary.focus, .btn-primary:active, .btn-primary:focus {
        background: #547096;
        border-color: #547096;
        color: #fff;
    }

    .dropdown-menu > li > a.selected {
        background-color: #a1d1ff;
    }

    #choixTypeCarte, #choixTypeDonnee {
        margin-bottom: 20px;
    }

    #choixTypeCarte button.selected {
        font-weight: bold;
        background: #547096;
        border-color: #547096;
        color: #fff;
    }

</style>

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<p>
</p>
<div id="donneesDepartements">

</div>




































<div id="menu" class="row">
<div class="col-md-7 text-center">
        <div class="text-center" style="display:none;">
            <select multiple="multiple" name="deps_list_choice" id="listeDepartements" class="select2" style="display:none;">
                <option data-num="01" data-article="de l'" value="Ain">01 - Ain</option>
                <option data-num="02" data-article="de l'" value="Aisne">02 - Aisne</option>
                <option data-num="03" data-article="de l'" value="Allier">03 - Allier</option>
                <option data-num="04" data-article="des " value="Alpes-de-Haute-Provence">04 - Alpes-de-Haute-Provence
                </option>
                <option data-num="05" data-article="des " value="Hautes-Alpes">05 - Hautes-Alpes</option>
                <option data-num="06" data-article="des " value="Alpes-Maritimes">06 - Alpes-Maritimes</option>
                <option data-num="07" data-article="de l'" value="Ardèche">07 - Ardèche</option>
                <option data-num="08" data-article="des " value="Ardennes">08 - Ardennes</option>
                <option data-num="09" data-article="de l'" value="Ariège">09 - Ariège</option>
                <option data-num="10" data-article="de l'" value="Aube">10 - Aube</option>
                <option data-num="11" data-article="de l'" value="Aude">11 - Aude</option>
                <option data-num="12" data-article="de l'" value="Aveyron">12 - Aveyron</option>
                <option data-num="13" data-article="des " value="Bouches-du-Rhône">13 - Bouches-du-Rhône</option>
                <option data-num="14" data-article="du " value="Calvados">14 - Calvados</option>
                <option data-num="15" data-article="du " value="Cantal">15 - Cantal</option>
                <option data-num="16" data-article="de la " value="Charente">16 - Charente</option>
                <option data-num="17" data-article="de la " value="Charente-Maritime">17 - Charente-Maritime</option>
                <option data-num="18" data-article="du " value="Cher">18 - Cher</option>
                <option data-num="19" data-article="de la " value="Corrèze">19 - Corrèze</option>
                <option data-num="21" data-article="de la " value="Côte-d'or">21 - Côte-d'or</option>
                <option data-num="22" data-article="des " value="Côtes-d'armor">22 - Côtes-d'armor</option>
                <option data-num="23" data-article="de la " value="Creuse">23 - Creuse</option>
                <option data-num="24" data-article="de la " value="Dordogne">24 - Dordogne</option>
                <option data-num="25" data-article="du " value="Doubs">25 - Doubs</option>
                <option data-num="26" data-article="de la " value="Drôme">26 - Drôme</option>
                <option data-num="27" data-article="de l'" value="Eure">27 - Eure</option>
                <option data-num="28" data-article="de l'" value="Eure-et-Loir">28 - Eure-et-Loir</option>
                <option data-num="29" data-article="du " value="Finistère">29 - Finistère</option>
                <option data-num="2A" data-article="de la " value="Corse-du-Sud">2A - Corse-du-Sud</option>
                <option data-num="2B" data-article="de la " value="Haute-Corse">2B - Haute-Corse</option>
                <option data-num="30" data-article="du " value="Gard">30 - Gard</option>
                <option data-num="31" data-article="de la " value="Haute-Garonne">31 - Haute-Garonne</option>
                <option data-num="32" data-article="du " value="Gers">32 - Gers</option>
                <option data-num="33" data-article="de la " value="Gironde">33 - Gironde</option>
                <option data-num="34" data-article="de l'" value="Hérault">34 - Hérault</option>
                <option data-num="35" data-article="de l'" value="Ille-et-Vilaine">35 - Ille-et-Vilaine</option>
                <option data-num="36" data-article="de l'" value="Indre">36 - Indre</option>
                <option data-num="37" data-article="de l'" value="Indre-et-Loire">37 - Indre-et-Loire</option>
                <option data-num="38" data-article="de l'" value="Isère">38 - Isère</option>
                <option data-num="39" data-article="du " value="Jura">39 - Jura</option>
                <option data-num="40" data-article="des " value="Landes">40 - Landes</option>
                <option data-num="41" data-article="du" value="Loir-et-Cher">41 - Loir-et-Cher
                </option>
                <option data-num="42" data-article="de la " value="Loire">42 - Loire</option>
                <option data-num="43" data-article="de la " value="Haute-Loire">43 - Haute-Loire
                </option>
                <option data-num="44" data-article="de la " value="Loire-Atlantique">44 -
                    Loire-Atlantique
                </option>
                <option data-num="45" data-article="du " value="Loiret">45 - Loiret</option>
                <option data-num="46" data-article="du " value="Lot">46 - Lot</option>
                <option data-num="47" data-article="du" value="Lot-et-Garonne">47 -
                    Lot-et-Garonne
                </option>
                <option data-num="48" data-article="de la " value="Lozère">48 - Lozère</option>
                <option data-num="49" data-article="du " value="Maine-et-Loire">49 -
                    Maine-et-Loire
                </option>
                <option data-num="50" data-article="de la " value="Manche">50 - Manche</option>
                <option data-num="51" data-article="de la " value="Marne">51 - Marne</option>
                <option data-num="52" data-article="de la " value="Haute-Marne">52 - Haute-Marne
                </option>
                <option data-num="53" data-article="de la " value="Mayenne">53 - Mayenne
                </option>
                <option data-num="54" data-article="de la " value="Meurthe-et-Moselle">54 -
                    Meurthe-et-Moselle
                </option>
                <option data-num="55" data-article="de la " value="Meuse">55 - Meuse</option>
                <option data-num="56" data-article="du " value="Morbihan">56 - Morbihan</option>
                <option data-num="57" data-article="de la " value="Moselle">57 - Moselle
                </option>
                <option data-num="58" data-article="de la " value="Nièvre">58 - Nièvre</option>
                <option data-num="59" data-article="du " value="Nord">59 - Nord</option>
                <option data-num="60" data-article="de l'" value="Oise">60 - Oise</option>
                <option data-num="61" data-article="de l'" value="Orne">61 - Orne</option>
                <option data-num="62" data-article="du " value="Pas-de-Calais">62 -
                    Pas-de-Calais
                </option>
                <option data-num="63" data-article="du " value="Puy-de-Dôme">63 - Puy-de-Dôme
                </option>
                <option data-num="64" data-article="des" value="Pyrénées-Atlantiques">64 -
                    Pyrénées-Atlantiques
                </option>
                <option data-num="65" data-article="des " value="Hautes-Pyrénées">65 -
                    Hautes-Pyrénées
                </option>
                <option data-num="66" data-article="des " value="Pyrénées-Orientales">66 -
                    Pyrénées-Orientales
                </option>
                <option data-num="67" data-article="du " value="Bas-Rhin">67 - Bas-Rhin</option>
                <option data-num="68" data-article="du " value="Haut-Rhin">68 - Haut-Rhin
                </option>
                <option data-num="69" data-article="du " value="Rhône">69 - Rhône</option>
                <option data-num="70" data-article="de la " value="Haute-Saône">70 - Haute-Saône
                </option>
                <option data-num="71" data-article="de la " value="Saône-et-Loire">71 -
                    Saône-et-Loire
                </option>
                <option data-num="72" data-article="de la " value="Sarthe">72 - Sarthe</option>
                <option data-num="73" data-article="de la " value="Savoie">73 - Savoie</option>
                <option data-num="74" data-article="de la " value="Haute-Savoie">74 -
                    Haute-Savoie
                </option>
                <option data-num="75" data-article="de " value="Paris">75 - Paris</option>
                <option data-num="76" data-article="de la " value="Seine-Maritime">76 -
                    Seine-Maritime
                </option>
                <option data-num="77" data-article="de la " value="Seine-et-Marne">77 -
                    Seine-et-Marne
                </option>
                <option data-num="78" data-article="des " value="Yvelines">78 - Yvelines
                </option>
                <option data-num="79" data-article="des " value="Deux-Sèvres">79 - Deux-Sèvres
                </option>
                <option data-num="80" data-article="de la " value="Somme">80 - Somme</option>
                <option data-num="81" data-article="du " value="Tarn">81 - Tarn</option>
                <option data-num="82" data-article="du " value="Tarn-et-Garonne">82 -
                    Tarn-et-Garonne
                </option>
                <option data-num="83" data-article="du " value="Var">83 - Var</option>
                <option data-num="84" data-article="du " value="Vaucluse">84 - Vaucluse</option>
                <option data-num="85" data-article="de la " value="Vendée">85 - Vendée</option>
                <option data-num="86" data-article="de la " value="Vienne">86 - Vienne</option>
                <option data-num="87" data-article="de la " value="Haute-Vienne">87 -
                    Haute-Vienne
                </option>
                <option data-num="88" data-article="des" value="Vosges">88 - Vosges</option>
                <option data-num="89" data-article="de l'" value="Yonne">89 - Yonne</option>
                <option data-num="90" data-article="du " value="Territoire de Belfort">90 -
                    Territoire de Belfort
                </option>
                <option data-num="91" data-article="de l'" value="Essonne">91 - Essonne</option>
                <option data-num="92" data-article="des " value="Hauts-de-Seine">92 -
                    Hauts-de-Seine
                </option>
                <option data-num="93" data-article="de la " value="Seine-Saint-Denis">93 -
                    Seine-Saint-Denis
                </option>
                <option data-num="94" data-article="du " value="Val-de-Marne">94 - Val-de-Marne</option>
                <option data-num="95" data-article="du " value="Val-d'oise">95 - Val-d'oise</option>
                <option data-num="971" data-article="de la " value="Guadeloupe">971 - Guadeloupe</option>
                <option data-num="972" data-article="de la " value="Martinique">972 - Martinique</option>
                <option data-num="973" data-article="de la " value="Guyane">973 - Guyane</option>
                <option data-num="974" data-article="de " value="La Réunion">974 - La Réunion</option>
                <option data-num="976" data-article="de " value="Mayotte">976 - Mayotte</option>
            </select>
            <br>
            <br>
            <br>
        </div>

    
        <div class="row">
<!--            <div id="choixTypeDonnee" class="btn-group" role="group">-->
<!--                <button data-type-donnee="incidence" type="button" autofocus="autofocus" class="selected btn btn-primary">Incidence</button>-->
<!--                <button data-type-carte="evolution" type="button" class="btn btn-primary">Evolution J/J-7</button>-->
<!--            </div>-->
            
            
            <br>
            <span id="titreCarte"></span><br>
            <span id="descriptionCarte"></span>
            
            <div class="col-xs-10">
                <div id="carte">
                    <svg id="map" width="400px" height="400px" viewBox="0 0 492 543" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <title>...</title>
                        <description>Created with Sketch (http://www.bohemiancoding.com/sketch)
                        </description>
                        <defs></defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                           sketch:type="MSPage">
                            <g id="france" sketch:type="MSLayerGroup"
                               transform="translate(0.000000, 1.000000)">
                                <g id="complete_map" sketch:type="MSShapeGroup">
                                    <path class="separator" d="M424,541.25 L424,471 L488.25,429"
                                          id="corsica_separating_line"></path>
                                    <path data-num="2A"
                                          d="M437.33847,484.9562 L437.33847,487.11245 L439.30722,488.48745 L442.61972,490.42495 L442.83847,491.98745 L440.86972,492.5812 L437.74472,493.17495 L437.74472,494.5187 L438.90097,495.7062 L439.11972,499.61245 L443.40097,500.98745 L444.96347,501.36245 L446.33847,503.5187 L445.36972,504.8937 L443.80722,505.4562 L442.61972,507.61245 L441.46347,508.98745 L442.02597,512.48745 L444.96347,512.29995 L445.74472,512.8937 L448.49472,511.5187 L449.27597,512.29995 L447.90097,515.23745 L449.27597,516.61245 L446.93222,518.36245 L445.36972,521.86245 L449.65097,522.86245 L455.71347,523.42495 L453.18222,526.36245 C453.18222,526.36245 451.99289,525.90364 451.46347,526.1437 C451.44782,526.15141 451.41536,526.16589 451.40097,526.17495 C451.39647,526.17828 451.37406,526.20271 451.36972,526.2062 C451.36553,526.20986 451.34249,526.23363 451.33847,526.23745 C451.33478,526.24161 451.31073,526.26437 451.30722,526.2687 C451.30054,526.27771 451.28192,526.29022 451.27597,526.29995 C451.27319,526.30499 451.27856,526.32597 451.27597,526.3312 C451.27118,526.34203 451.24871,526.38211 451.24472,526.3937 C451.24293,526.39969 451.2463,526.41876 451.24472,526.42495 C451.24199,526.43772 451.21532,526.47387 451.21347,526.48745 C451.21207,526.50144 451.21394,526.53512 451.21347,526.54995 C451.21348,527.52651 449.86972,529.8937 449.86972,529.8937 L451.80722,532.0187 L455.33847,534.17495 L461.96347,535.92495 L463.90097,536.7062 L465.68222,537.48745 L464.49472,539.6437 L467.61972,539.4562 L468.21347,540.8312 L471.33847,540.8312 L472.11972,537.11245 L470.15097,536.7062 L472.90097,533.79995 L471.93222,532.79995 L472.11972,531.04995 L475.65097,529.11245 L475.83847,526.9562 L473.49472,526.7687 L471.93222,528.11245 L471.93222,526.17495 L475.05722,525.98745 L476.02597,523.6437 L476.80722,516.79995 L476.21347,513.86245 L476.15097,511.04995 L472.74472,513.29995 L468.68222,513.4562 L468.33847,510.6437 L468.86972,509.92495 L467.61972,509.04995 L467.27597,504.2687 L466.74472,503.3937 L464.61972,503.3937 L463.55722,502.5187 L463.55722,499.1437 L462.15097,498.2687 L461.08847,497.73745 L458.96347,495.0812 L459.11972,493.48745 L456.49472,493.48745 L455.58847,490.8312 L451.86972,490.8312 L449.93222,488.17495 L450.46347,487.29995 L449.24472,486.5812 L446.40097,487.11245 L445.33847,486.42495 L441.46347,486.42495 L441.08847,485.36245 L438.90097,484.9562 L437.33847,484.9562 L437.33847,484.9562 L437.33847,484.9562 L437.33847,484.9562 Z M437.33847,484.9562"></path>
                                    <path data-num="2B"
                                          d="M469.96347,445.8937 L467.02597,447.86245 L467.43222,449.79995 L468.99472,451.7687 L467.24472,453.11245 L468.02597,454.67495 L466.83847,456.04995 L466.83847,457.79995 L468.80722,459.5812 L468.80722,462.29995 L467.61972,464.8312 L466.27597,465.42495 L464.71347,463.2687 L461.96347,463.48745 L461.36972,463.0812 L459.02597,463.0812 L456.90097,465.04995 L456.08847,468.36245 L451.02597,469.3312 L447.11972,472.6437 L446.33847,474.79995 L444.40097,474.61245 L443.40097,473.42495 L442.83847,476.7687 L441.46347,477.3312 L441.05722,480.4562 L441.65097,481.8312 L439.49472,483.3937 L438.90097,484.9562 L441.08847,485.36245 L441.46347,486.42495 L445.33847,486.42495 L446.40097,487.11245 L449.24472,486.5812 L450.46347,487.29995 L449.93222,488.17495 L451.86972,490.8312 L455.58847,490.8312 L456.49472,493.48745 L459.11972,493.48745 L458.96347,495.0812 L461.08847,497.73745 L462.15097,498.2687 L463.55722,499.1437 L463.55722,502.5187 L464.61972,503.3937 L466.74472,503.3937 L467.27597,504.2687 L467.61972,509.04995 L468.86972,509.92495 L468.33847,510.6437 L468.68222,513.4562 L472.74472,513.29995 L476.15097,511.04995 L476.02597,505.2687 L480.71347,498.6437 L480.71347,487.7062 L478.77597,483.98745 L478.18222,472.2687 L476.80722,470.11245 L474.27597,468.17495 L473.86972,460.92495 L475.05722,457.61245 L473.49472,452.3312 L472.52597,448.04995 L471.71347,446.86245 L469.96347,445.8937 L469.96347,445.8937 L469.96347,445.8937 L469.96347,445.8937 Z M469.96347,445.8937"></path>
                                    <path data-num="13"
                                          d="M371.71875,405.90625 L366.25,409.03125 L364.84375,419.53125 L359.0625,418.71875 L357.40625,423.125 L358.78125,425.0625 L352.4375,428.9375 L350.6875,433 L356.875,433.28125 L365.09375,433.875 L366.65625,435.4375 L363.71875,435.4375 L361.78125,438.75 L370.15625,440.5 L376.8125,439.34375 L373.28125,436 L375.625,434.0625 L379.34375,435.625 L381.09375,439.34375 L392.25,439.53125 L395.15625,438.34375 L395.75,440.125 L392.625,442.84375 L396.9375,443.03125 L396.15625,445 L394.96875,446.375 L404.53125,446.375 L409.21875,447.9375 L409.6875,448.5625 L409.875,444.6875 L411.28125,443.09375 L413.0625,442.03125 L412.875,440.96875 L411.46875,439.5625 L410.0625,439.5625 L409.15625,438.5 L410.75,437.0625 L410.75,436.53125 L409,435.65625 L409,434.25 L412.875,434.4375 L413.78125,433.71875 L410.40625,430.53125 L410.59375,426.8125 L408.46875,425.0625 L410.21875,421.53125 L414.46875,418.6875 L411.28125,416.5625 L409,418.34375 L403.6875,419.5625 L399.4375,419.03125 L391.84375,415.875 L387.25,416.03125 L383.375,414.28125 L381.9375,412.3125 L378.9375,408.96875 L371.875,405.96875 L371.71875,405.90625 L371.71875,405.90625 L371.71875,405.90625 L371.71875,405.90625 Z M371.71875,405.90625"></path>
                                    <path data-num="84"
                                          d="M379,377.34375 L376.25,377.5625 L374.125,380.875 L374.6875,384.375 L378,384.78125 L377.4375,386.34375 L374.875,386.53125 L371.96875,389.46875 L371.1875,388.5 L371.75,384.59375 L370.59375,383.21875 L365.3125,384 L364.28125,386.09375 L364.84375,386.40625 L368.15625,391.90625 L368.15625,396.34375 L373.96875,402.125 L373.96875,404.625 L371.71875,405.90625 L371.875,405.96875 L378.9375,408.96875 L381.9375,412.3125 L383.375,414.28125 L387.25,416.03125 L391.84375,415.875 L399.4375,419.03125 L403.6875,419.5625 L409,418.34375 L411.1875,416.625 L411.46875,415.15625 L407.40625,410.5625 L402.96875,410.5625 L402.96875,408.96875 L404.5625,407.1875 L404.5625,405.25 L401.03125,403.5 L400.6875,400.65625 L402.625,399.78125 L402.625,397.3125 L400.5,396.9375 L400.34375,394.28125 L400.3125,394.09375 L398.53125,393.96875 L395.59375,391.8125 L394.8125,389.28125 L389.34375,388.875 L385.25,388.5 L384.84375,386.15625 L386.21875,383.21875 L383.6875,385.375 L379.78125,384.96875 L379,383.59375 L381.71875,379.90625 L379,377.34375 L379,377.34375 L379,377.34375 L379,377.34375 Z M379,377.34375"></path>
                                    <path data-num="83"
                                          d="M449.78125,409.1875 L446.8125,409.3125 L445.40625,410.75 L440.09375,410.5625 L435.5,413.90625 L432.34375,411.78125 L427.375,413.375 L426.5,415.15625 L422.96875,417.8125 L416.59375,413.5625 L411.4375,415.25 L411.1875,416.625 L411.28125,416.5625 L414.46875,418.6875 L410.21875,421.53125 L408.46875,425.0625 L410.59375,426.8125 L410.40625,430.53125 L413.78125,433.71875 L412.875,434.4375 L409,434.25 L409,435.65625 L410.75,436.53125 L410.75,437.0625 L409.15625,438.5 L410.0625,439.5625 L411.46875,439.5625 L412.875,440.96875 L413.0625,442.03125 L411.28125,443.09375 L409.875,444.6875 L409.6875,448.5625 L410.21875,449.28125 L413.71875,450.84375 L414.6875,454.75 L416.84375,455.15625 L418.8125,453.78125 L422.3125,451.625 L428.375,452.21875 L428.1875,453.78125 L426.21875,454.75 L430.90625,454.96875 L429.75,453.78125 L429.34375,451.25 L431.875,449.5 L434.8125,450.46875 L436,450.84375 L436.96875,452.03125 L438.34375,451.0625 L438.71875,448.5 L440.28125,447.15625 L444.375,447.15625 L445.5625,445.375 L448.28125,446.15625 L451.40625,444.8125 L451.40625,439.71875 L447.3125,439.90625 L450.4375,437.96875 L452,435.8125 L452.40625,432.6875 L458.0625,431.90625 L461.21875,428.375 L459.03125,426.125 L459.03125,424.875 L457.96875,423.8125 L459.375,422.59375 L459.03125,420.625 L456.71875,419.75 L455.5,419.75 L453.375,417.625 L453,413.90625 L450.71875,412.84375 L448.40625,412.6875 L447.53125,410.5625 L449.78125,409.1875 L449.78125,409.1875 L449.78125,409.1875 L449.78125,409.1875 Z M449.78125,409.1875"></path>
                                    <path data-num="04"
                                          d="M455.84375,360.34375 L453.71875,363.53125 L450.71875,365.3125 L449.65625,367.4375 L447,367.59375 L447,369.53125 L446.28125,370.59375 L445.21875,373.25 L438.875,373.09375 L435.875,371.5 L433.90625,372.90625 L430.21875,372.71875 L429.3125,373.96875 L430.21875,373.96875 L430.75,377.3125 L429.84375,377.6875 L426.5,375.5625 L426.5,374.3125 L424.5625,372.71875 L423.5,372.71875 L423.5,374.5 L421.90625,374.84375 L418.53125,376.78125 L416.40625,380.34375 L415.875,382.09375 L417.125,382.4375 L417.3125,385.28125 L416.0625,385.28125 L414.125,383.5 L413.0625,383.6875 L413.59375,385.28125 L416.59375,388.625 L414.65625,389.34375 L413.25,388.46875 L409.6875,388.46875 L406.6875,391.28125 L406.65625,391.25 L406.53125,392.40625 L405.375,391.03125 L403.8125,389.65625 L402.8125,392.59375 L401.0625,394.15625 L400.3125,394.09375 L400.34375,394.28125 L400.5,396.9375 L402.625,397.3125 L402.625,399.78125 L400.6875,400.65625 L401.03125,403.5 L404.5625,405.25 L404.5625,407.1875 L402.96875,408.96875 L402.96875,410.5625 L407.40625,410.5625 L411.46875,415.15625 L411.4375,415.25 L416.59375,413.5625 L422.96875,417.8125 L426.5,415.15625 L427.375,413.375 L432.34375,411.78125 L435.5,413.90625 L440.09375,410.5625 L445.40625,410.75 L446.8125,409.3125 L449.78125,409.1875 L449.84375,409.15625 L449.125,407.375 L450,406.3125 L449.65625,404.90625 L452.46875,404.90625 L453.1875,404.03125 L455.84375,402.59375 L457.96875,404.03125 L459.375,403.125 L456.03125,400.125 L452.46875,396.78125 L451.25,396.40625 L451.0625,393.75 L448.9375,390.59375 L449.65625,386 L450.71875,383.5 L452.65625,381.90625 L452.84375,379.4375 L455.5,378.03125 L455.90625,377.875 L455.90625,374.09375 L458.65625,373.71875 L457.09375,372.34375 L455.125,371.75 L454.15625,369.21875 L454.9375,367.46875 L458.4375,363.75 L457.875,361 L458.375,360.46875 L455.84375,360.34375 L455.84375,360.34375 L455.84375,360.34375 L455.84375,360.34375 Z M455.84375,360.34375"></path>
                                    <path data-num="06"
                                          d="M455.90625,377.875 L455.5,378.03125 L452.84375,379.4375 L452.65625,381.90625 L450.71875,383.5 L449.65625,386 L448.9375,390.59375 L451.0625,393.75 L451.25,396.40625 L452.46875,396.78125 L456.03125,400.125 L459.375,403.125 L457.96875,404.03125 L455.84375,402.59375 L453.1875,404.03125 L452.46875,404.90625 L449.65625,404.90625 L450,406.3125 L449.125,407.375 L449.84375,409.15625 L447.53125,410.5625 L448.40625,412.6875 L450.71875,412.84375 L453,413.90625 L453.375,417.625 L455.5,419.75 L456.71875,419.75 L459.03125,420.625 L459.375,422.59375 L457.96875,423.8125 L459.03125,424.875 L459.03125,426.125 L461.21875,428.375 L461.375,428.1875 L461.5625,423.71875 L465.46875,424.5 L466.84375,422.71875 L468.8125,423.125 L469,417.0625 L473.5,416.6875 L477.40625,413.15625 L480.90625,413.15625 L481.09375,411 L484.625,408.875 L482.65625,404.375 L485.59375,401.84375 L485,398.90625 L489.3125,397.53125 L490.46875,393.25 L489.90625,390.3125 L488.90625,388.5625 L488.125,386 L485.21875,386.21875 L476.03125,389.53125 L473.09375,389.53125 L468.03125,385.4375 L462.9375,384.0625 L460,384.0625 L460,380.53125 L455.90625,378 L455.90625,377.875 L455.90625,377.875 L455.90625,377.875 L455.90625,377.875 Z M455.90625,377.875"></path>
                                    <path data-num="05"
                                          d="M439.34375,335.15625 L437.59375,335.9375 L437.1875,338.875 L433.6875,339.28125 L433.09375,336.53125 L431.9375,335.375 L428.40625,335.75 L427.03125,336.9375 L426.25,341.03125 L426.84375,342 L430.9375,342.40625 L431.71875,344.9375 L433.28125,345.71875 L433.28125,350 L429.5625,349.8125 L428,351.5625 L423.53125,350.78125 L421,352.9375 L419.21875,352.15625 L416.6875,354.125 L417.65625,355.875 L416.09375,357.4375 L411.21875,357.4375 L411.21875,359.78125 L412.78125,360.5625 L412.1875,361.9375 L408.875,363.28125 L404.78125,363.6875 L403.59375,367.40625 L403.40625,369.75 L405.5625,371.5 L403.40625,374.03125 L400.6875,372.65625 L397.5625,372.46875 L397.15625,374.21875 L399.125,375.59375 L396.75,377.15625 L397.5625,380.46875 L404.1875,382.25 L405.375,384.78125 L407.3125,385.15625 L406.65625,391.25 L406.6875,391.28125 L409.6875,388.46875 L413.25,388.46875 L414.65625,389.34375 L416.59375,388.625 L413.59375,385.28125 L413.0625,383.6875 L414.125,383.5 L416.0625,385.28125 L417.3125,385.28125 L417.125,382.4375 L415.875,382.09375 L416.40625,380.34375 L418.53125,376.78125 L421.90625,374.84375 L423.5,374.5 L423.5,372.71875 L424.5625,372.71875 L426.5,374.3125 L426.5,375.5625 L429.84375,377.6875 L430.75,377.3125 L430.21875,373.96875 L429.3125,373.96875 L430.21875,372.71875 L433.90625,372.90625 L435.875,371.5 L438.875,373.09375 L445.21875,373.25 L446.28125,370.59375 L447,369.53125 L447,367.59375 L449.65625,367.4375 L450.71875,365.3125 L453.71875,363.53125 L455.84375,360.34375 L458.375,360.46875 L460.21875,358.46875 L462.34375,358.65625 L462.34375,356.90625 L459.625,355.53125 L459.03125,349.875 L456.875,349.09375 L454.15625,349.5 L449.0625,346.9375 L448.28125,341.09375 L445.375,340.125 L444.375,338.15625 L443.09375,335.34375 L439.34375,335.15625 L439.34375,335.15625 L439.34375,335.15625 L439.34375,335.15625 Z M439.34375,335.15625"></path>
                                    <path data-num="48"
                                          d="M312.78125,348.25 L307.3125,350.21875 L305.75,353.71875 L302.25,351.375 L299.5,359.96875 L296.6875,366.4375 L300.78125,371.46875 L300.5,375.34375 L303.25,377.28125 L303.25,381.96875 L304.09375,388.59375 L307.40625,390 L307.125,392.1875 L311.8125,391.375 L313.46875,392.1875 L312.4375,393.09375 L318.46875,397.125 L323.625,396.0625 L324.5,394.8125 L323.78125,393.0625 L325.90625,392.53125 L328.90625,395.34375 L334.03125,395.875 L336.34375,392.34375 L336.34375,389.34375 L337.75,387.75 L336.5,387.40625 L336.5,383.34375 L333.6875,380.34375 L336,379.96875 L337.21875,378.90625 L338.1875,377.03125 L337.21875,376.4375 L337.78125,372.3125 L334.46875,368.71875 L333.09375,361.53125 L328.125,355.1875 L324.5,356.0625 L323.71875,353.34375 L321.75,353.34375 L321.375,355.6875 L316.3125,357.25 L312.78125,348.25 L312.78125,348.25 L312.78125,348.25 L312.78125,348.25 Z M312.78125,348.25"></path>
                                    <path data-num="03"
                                          d="M293.625,243.96875 L290.90625,247.46875 L289.34375,247.65625 L287.59375,249.4375 L285.625,247.28125 L280.375,252.5625 L280.375,255.6875 L281.34375,256.46875 L281.53125,258.03125 L278.8125,260.15625 L276.25,259.375 L271.375,260.375 L268.84375,263.28125 L267.90625,265.28125 L268.0625,265.25 L270.40625,268.5625 L270.40625,270.90625 L271.75,272.65625 L273.125,270.90625 L274.6875,273.65625 L276.84375,274.4375 L279,279.5 L279.09375,280.96875 L282.0625,283.28125 L283.65625,282.5625 L284.90625,279.5625 L286.125,279.21875 L286.125,277.625 L288.25,277.4375 L288.4375,278.5 L291.09375,275.5 L294.09375,275.5 L294.625,276.5625 L293.21875,278.5 L295.3125,280.8125 L295.6875,282.21875 L300.625,285.0625 L306.625,285.9375 L308.40625,285.75 L311.0625,286.28125 L313.34375,284.875 L315.125,285.75 L315.46875,288.21875 L317.78125,288.75 L320.78125,288.59375 L321.65625,290.71875 L324.40625,291.8125 L324.5,290.84375 L329.1875,290.625 L328.8125,279.5 L327.4375,276.78125 L328,274.625 L331.25,274.0625 L331.34375,273.84375 L335.4375,270.71875 L335.625,263.09375 L334.25,261.15625 L331.125,261.15625 L329.96875,259.59375 L326.65625,259.59375 L325.6875,258.40625 L325.6875,255.46875 L321.75,248.0625 L319.8125,246.6875 L316.09375,251.78125 L314.53125,252.15625 L313.9375,249.625 L312.1875,248.84375 L311.40625,250.40625 L308.5,250.40625 L308.09375,248.65625 L306.125,249.8125 L304,251 L301.65625,248.4375 L298.3125,246.875 L298.125,244.34375 L293.625,243.96875 L293.625,243.96875 L293.625,243.96875 L293.625,243.96875 Z M293.625,243.96875"></path>
                                    <path data-num="30"
                                          d="M338.1875,377.03125 L337.21875,378.90625 L336,379.96875 L333.6875,380.34375 L336.5,383.34375 L336.5,387.40625 L337.75,387.75 L336.34375,389.34375 L336.34375,392.34375 L334.03125,395.875 L328.90625,395.34375 L325.90625,392.53125 L323.78125,393.0625 L324.5,394.8125 L323.625,396.0625 L318.46875,397.125 L312.4375,393.09375 L311.28125,394.125 L311.28125,396.90625 L309.0625,397.4375 L309.625,399.65625 L312.375,400.21875 L315.40625,400.21875 L316.25,404.0625 L312.65625,405.71875 L312.65625,407.46875 L315.46875,408.4375 L315.46875,410.03125 L316.71875,410.75 L317.78125,409.84375 L319.1875,409.84375 L319.90625,411.4375 L322.03125,411.4375 L323.09375,407.71875 L324.84375,407.71875 L327.5,404.375 L330.6875,404.71875 L331.21875,409.3125 L332.4375,410.75 L334.40625,409.6875 L337.75,411.4375 L339,413.5625 L344.8125,417.09375 L346.9375,422.0625 L346.9375,424.6875 L343.21875,426.8125 L340.8125,428.96875 L343.8125,429.1875 L343.8125,433.09375 L348.28125,432.875 L350.6875,433 L352.4375,428.9375 L358.78125,425.0625 L357.40625,423.125 L359.0625,418.71875 L364.84375,419.53125 L366.25,409.03125 L373.96875,404.625 L373.96875,402.125 L368.15625,396.34375 L368.15625,391.90625 L364.84375,386.40625 L357.9375,382.53125 L357.40625,385.5625 L354.625,385.84375 L353.8125,382.8125 L351.03125,383.34375 L350.5,387.21875 L348.28125,386.40625 L343.59375,383.34375 L341.375,384.46875 L341.375,378.9375 L338.1875,377.03125 L338.1875,377.03125 L338.1875,377.03125 L338.1875,377.03125 Z M338.1875,377.03125"></path>
                                    <path data-num="11"
                                          d="M266.25,434.46875 L265.96875,438.0625 L262.375,436.9375 L258.5,436.9375 L258.78125,435.5625 L256.84375,435.84375 L252.71875,437.21875 L251.34375,434.71875 L248.5625,437.21875 L249.40625,439.15625 L246.34375,440.53125 L245.8125,443.5625 L243.3125,444.6875 L245.53125,447.15625 L244.96875,448.8125 L254.65625,453.5 L255.46875,460.15625 L255.46875,463.75 L256.03125,468.4375 L251.0625,468.4375 L249.6875,470.375 L256.03125,475.625 L259.625,473.6875 L264.03125,478.9375 L263.375,479 L264.21875,479.5 L272.15625,475.625 L270.21875,472.78125 L270.0625,469.4375 L288.59375,469.4375 L288.25,466.9375 L292.5,464.65625 L297.4375,468.53125 L300,469.71875 L299.84375,464.125 L300.0625,457.6875 L297.71875,457.875 L295.75,454.96875 L297.3125,452.40625 L300.625,455.53125 L303.5625,453.1875 L305.53125,451.25 L305.78125,449.1875 L303.28125,449.09375 L302.40625,446.28125 L299.9375,446.09375 L297.625,442.71875 L295.84375,442.90625 L293.75,441.65625 L293.375,438.65625 L292.3125,439.1875 L292.84375,441.3125 L290.375,441.3125 L290.1875,444.84375 L286.5,446.09375 L284.71875,442.375 L282.25,443.96875 L280.125,442.375 L279.0625,439.90625 L280.84375,437.78125 L280,435.5 L279.78125,435.5625 L273.96875,435.5625 L267.90625,434.46875 L266.25,434.46875 L266.25,434.46875 L266.25,434.46875 L266.25,434.46875 Z M266.25,434.46875"></path>
                                    <path data-num="34"
                                          d="M327.5,404.375 L324.84375,407.71875 L323.09375,407.71875 L322.03125,411.4375 L319.90625,411.4375 L319.1875,409.84375 L317.78125,409.84375 L316.71875,410.75 L315.46875,410.03125 L315.46875,408.4375 L312.65625,407.46875 L312.65625,408.5 L309.34375,409.03125 L307.6875,410.4375 L308.21875,413.75 L305.1875,413.75 L302.15625,412.09375 L300.5,412.09375 L300.5,414.03125 L300.78125,419.8125 L297.46875,419.8125 L295.8125,419.8125 L294.6875,422.03125 L287.5,424.5 L284.75,422.59375 L283.09375,425.0625 L282.28125,427.8125 L285.3125,430.59375 L284.1875,434.1875 L280,435.5 L280.84375,437.78125 L279.0625,439.90625 L280.125,442.375 L282.25,443.96875 L284.71875,442.375 L286.5,446.09375 L290.1875,444.84375 L290.375,441.3125 L292.84375,441.3125 L292.3125,439.1875 L293.375,438.65625 L293.75,441.65625 L295.84375,442.90625 L297.625,442.71875 L299.9375,446.09375 L302.40625,446.28125 L303.28125,449.09375 L305.78125,449.1875 L305.90625,448.125 L312.9375,445.96875 L313.71875,444.21875 L319.1875,444.03125 L320.9375,441.875 L331.5,433.46875 L338.125,428.78125 L340.8125,428.96875 L343.21875,426.8125 L346.9375,424.6875 L346.9375,422.0625 L344.8125,417.09375 L339,413.5625 L337.75,411.4375 L334.40625,409.6875 L332.4375,410.75 L331.21875,409.3125 L330.6875,404.71875 L327.5,404.375 L327.5,404.375 L327.5,404.375 L327.5,404.375 Z M327.5,404.375"></path>
                                    <path data-num="66"
                                          d="M292.5,464.65625 L288.25,466.9375 L288.59375,469.4375 L270.0625,469.4375 L270.21875,472.78125 L272.15625,475.625 L264.21875,479.5 L263.375,479 L256.84375,479.46875 L256.03125,481.125 L252.71875,481.96875 L250.5,483.90625 L244.4375,485.3125 L244.78125,487.375 L247.71875,490.125 L253.5625,491.6875 L253.75,495.1875 L256.875,497.9375 L259.21875,497.53125 L262.5625,493.4375 L266.65625,492.65625 L273.09375,494.8125 L278.5625,499.5 L280.125,497.53125 L281.5,497.53125 L282.875,498.5 L284.03125,497.9375 L284.21875,495.1875 L290.09375,493.8125 L292.03125,491.28125 L294.96875,490.3125 L299.0625,490.3125 L301.625,493.03125 L304.75,493.25 L304.75,490.125 L303.1875,487.96875 L300.4375,486.78125 L300,469.71875 L297.4375,468.53125 L292.5,464.65625 L292.5,464.65625 L292.5,464.65625 L292.5,464.65625 Z M292.5,464.65625"></path>
                                    <path data-num="15"
                                          d="M277.84375,319.71875 L277.25,321.875 L278.21875,324.21875 L277.03125,325.59375 L275.09375,325.59375 L273.125,323.4375 L271.375,322.46875 L271.1875,327.9375 L267.65625,330.09375 L265.125,333.59375 L265.71875,337.125 L264.9375,338.6875 L263.9375,341.8125 L262.375,341.8125 L260.8125,343.75 L262,344.9375 L262.78125,346.875 L260.25,348.65625 L261.28125,355.1875 L264.59375,357.65625 L262.09375,363.46875 L264.59375,364.5625 L263.5,367.875 L265.6875,368.15625 L267.34375,365.40625 L270.125,365.40625 L270.65625,366.21875 L276.75,366.21875 L277.84375,363.75 L279.21875,363.1875 L279.78125,358.78125 L281.15625,358.78125 L281.15625,354.09375 L286.6875,349.375 L287.25,350.21875 L287.78125,353.8125 L291.65625,353.25 L292.5,358.78125 L294.40625,358.78125 L294.96875,364.3125 L296.6875,366.4375 L299.5,359.96875 L302.25,351.375 L305.75,353.71875 L307.3125,350.21875 L312.3125,348.40625 L312.3125,346.75 L311.25,345.15625 L309.125,343.90625 L310.1875,342.3125 L309.28125,341.4375 L310.34375,341.09375 L311.59375,340.03125 L309.46875,339.84375 L308.40625,338.4375 L308.0625,334.71875 L306.8125,333.46875 L305.9375,330.3125 L301.5,330.3125 L300.625,327.8125 L299.21875,327.65625 L298.5,329.0625 L295.6875,328.875 L293.03125,324.8125 L291.96875,324.65625 L289.84375,323.59375 L288.59375,324.8125 L285.4375,324.8125 L283.84375,321.46875 L277.84375,319.71875 L277.84375,319.71875 L277.84375,319.71875 L277.84375,319.71875 Z M277.84375,319.71875"></path>
                                    <path data-num="43"
                                          d="M309.8125,322.34375 L308.40625,323.0625 L308.40625,324.28125 L306.28125,324.46875 L304.34375,326.0625 L300.8125,326.59375 L300,327.75 L300.625,327.8125 L301.5,330.3125 L305.9375,330.3125 L306.8125,333.46875 L308.0625,334.71875 L308.40625,338.4375 L309.46875,339.84375 L311.59375,340.03125 L310.34375,341.09375 L309.28125,341.4375 L310.1875,342.3125 L309.125,343.90625 L311.25,345.15625 L312.3125,346.75 L312.3125,348.40625 L312.78125,348.25 L316.3125,357.25 L321.375,355.6875 L321.75,353.34375 L323.71875,353.34375 L324.5,356.0625 L328.125,355.1875 L332.625,360.9375 L335.4375,356.46875 L340.5,352.75 L345.1875,352.75 L346.75,347.875 L349.875,347.65625 L350.09375,343.96875 L353,343.96875 L352.4375,342.59375 L351.65625,340.0625 L352.8125,338.09375 L355.5625,336.9375 L356.71875,332.25 L354.1875,329.3125 L351.0625,329.5 L351.4375,325.78125 L345.1875,323.0625 L343.0625,323.25 L338.75,326.78125 L334.8125,325.5 L334.03125,326.25 L331.5625,325.53125 L329.8125,323.75 L328.75,325.875 L325.71875,325.71875 L324.3125,324.46875 L323.25,326.9375 L321.3125,326.0625 L320.0625,323.75 L318.46875,323.75 L317.0625,322.53125 L314.9375,323.40625 L312.46875,323.59375 L311.0625,322.6875 L310.1875,323.21875 L309.8125,322.34375 L309.8125,322.34375 L309.8125,322.34375 L309.8125,322.34375 Z M309.8125,322.34375"></path>
                                    <path data-num="63"
                                          d="M291.09375,275.5 L288.4375,278.5 L288.25,277.4375 L286.125,277.625 L286.125,279.21875 L284.90625,279.5625 L283.65625,282.5625 L282.0625,283.28125 L279.09375,280.96875 L279.375,285.5625 L280.9375,287.5 L281.71875,291.21875 L279.375,292.96875 L278.8125,295.71875 L276.65625,296.875 L272.9375,299.03125 L273.3125,300.78125 L277.8125,305.28125 L278.21875,308.03125 L276.4375,310.9375 L276.4375,313.6875 L277.625,315.0625 L278.21875,318.375 L277.84375,319.71875 L283.84375,321.46875 L285.4375,324.8125 L288.59375,324.8125 L289.84375,323.59375 L291.96875,324.65625 L293.03125,324.8125 L295.6875,328.875 L298.5,329.0625 L299.21875,327.65625 L300,327.75 L300.8125,326.59375 L304.34375,326.0625 L306.28125,324.46875 L308.40625,324.28125 L308.40625,323.0625 L309.8125,322.34375 L310.1875,323.21875 L311.0625,322.6875 L312.46875,323.59375 L314.9375,323.40625 L317.0625,322.53125 L318.46875,323.75 L320.0625,323.75 L321.3125,326.0625 L323.25,326.9375 L324.3125,324.46875 L325.71875,325.71875 L328.75,325.875 L329.8125,323.75 L331.5625,325.53125 L334.03125,326.25 L334.8125,325.5 L333.28125,325 L332.6875,322.65625 L336.40625,319.15625 L334.65625,312.71875 L329.5625,309.375 L327.4375,304.3125 L325.09375,301.1875 L325.6875,296.875 L327.4375,295.125 L324.3125,292.59375 L324.40625,291.8125 L321.65625,290.71875 L320.78125,288.59375 L317.78125,288.75 L315.46875,288.21875 L315.125,285.75 L313.34375,284.875 L311.0625,286.28125 L308.40625,285.75 L306.625,285.9375 L300.625,285.0625 L295.6875,282.21875 L295.3125,280.8125 L293.21875,278.5 L294.625,276.5625 L294.09375,275.5 L291.09375,275.5 L291.09375,275.5 L291.09375,275.5 L291.09375,275.5 Z M291.09375,275.5"></path>
                                    <path data-num="65"
                                          d="M171.21875,424.53125 L169.28125,425.5625 L169.625,425.59375 L172.9375,431.0625 L170.78125,433.03125 L172.34375,435.375 L174.6875,438.875 L172.75,441.40625 L169.625,448.4375 L164.34375,452.9375 L165.71875,455.6875 L164.53125,456.46875 L161.625,455.875 L160.8125,462.3125 L159.25,463.5 L158.9375,467.53125 L159.4375,467.25 L162.75,469.21875 L166.65625,472.15625 L167.03125,474.5 L170.15625,477.03125 L172.71875,477.03125 L179.15625,474.28125 L181.875,477.40625 L185.59375,478.40625 L186.96875,476.0625 L188.71875,476.84375 L192.5,477.09375 L192.25,466.59375 L194.21875,466.59375 L195.96875,467.46875 L197.21875,466.25 L197.03125,464.3125 L199.5,462.875 L198.625,459.1875 L197.5625,458.28125 L195.4375,459 L196.5,457.21875 L195.96875,454.9375 L192.78125,452.625 L192.96875,451.03125 L194.75,448.03125 L197.03125,447.15625 L197.03125,445.90625 L198.4375,443.78125 L199.375,442.46875 L195.8125,440.625 L191.03125,440.625 L190.3125,439.1875 L187.84375,439.1875 L187.125,437.59375 L184.84375,437.59375 L184.125,438.3125 L181.46875,438.3125 L181.3125,436.71875 L179.1875,435.3125 L179.90625,434.59375 L180.25,432.84375 L179.71875,432.3125 L178.65625,429.46875 L176.34375,429.125 L174.0625,427.875 L174.21875,424.53125 L171.21875,424.53125 L171.21875,424.53125 L171.21875,424.53125 L171.21875,424.53125 Z M171.21875,424.53125"></path>
                                    <path data-num="64"
                                          d="M164.15625,424.875 L161.34375,426.46875 L155.6875,426.28125 L155.15625,425.40625 L151.4375,426.65625 L148.59375,427.53125 L146.46875,425.9375 L144.1875,426.65625 L143.46875,425.75 L140.65625,425.75 L138.875,426.65625 L134.28125,426.46875 L131.8125,428.40625 L127.375,428.0625 L126.5,429.3125 L125.4375,428.9375 L126.84375,427.53125 L124.375,425.59375 L121.375,428.25 L116.25,428.59375 L110.625,425.78125 L109.8125,427.21875 L105.3125,432.6875 L101.8125,434.0625 L99.28125,434.4375 L99.28125,436.59375 L101.625,438.75 L105.125,438.9375 L105.3125,441.46875 L108.0625,441.6875 L108.84375,439.90625 L112.5625,441.46875 L114.90625,442.0625 L115.46875,444.40625 L114.125,445.59375 L114.125,449.28125 L111.375,450.65625 L111.1875,452.40625 L112.9375,454.375 L116.0625,455.34375 L116.65625,452.40625 L118.40625,450.46875 L118.21875,453 L119.59375,454.96875 L123.09375,454.96875 L124.65625,457.09375 L129.34375,457.875 L133.84375,460.625 L141.25,460.625 L141.65625,464.71875 L146.71875,468.625 L148.6875,470.96875 L150.84375,469.8125 L152.78125,469.40625 L153.75,470.375 L155.53125,469.40625 L158.9375,467.53125 L159.25,463.5 L160.8125,462.3125 L161.625,455.875 L164.53125,456.46875 L165.71875,455.6875 L164.34375,452.9375 L169.625,448.4375 L172.75,441.40625 L174.6875,438.875 L172.34375,435.375 L170.78125,433.03125 L172.9375,431.0625 L169.625,425.59375 L164.34375,425.21875 L164.15625,424.875 L164.15625,424.875 L164.15625,424.875 L164.15625,424.875 Z M164.15625,424.875"></path>
                                    <path data-num="40"
                                          d="M131.8125,370.4375 L125.625,373.625 L124.03125,373.6875 L120.5625,392.25 L116.0625,409.4375 L114.6875,416.09375 L113.53125,420.78125 L110.625,425.78125 L116.25,428.59375 L121.375,428.25 L124.375,425.59375 L126.84375,427.53125 L125.4375,428.9375 L126.5,429.3125 L127.375,428.0625 L131.8125,428.40625 L134.28125,426.46875 L138.875,426.65625 L140.65625,425.75 L143.46875,425.75 L144.1875,426.65625 L146.46875,425.9375 L148.59375,427.53125 L151.4375,426.65625 L155.15625,425.40625 L155.6875,426.28125 L161.34375,426.46875 L164.15625,424.875 L162.78125,422.46875 L164.15625,418.75 L166.09375,416.21875 L165.5,412.90625 L167.0625,411.34375 L164.75,407.4375 L166.6875,405.09375 L168.84375,404.6875 L170.78125,405.46875 L173.53125,403.125 L174.5,406.0625 L175.46875,407.4375 L177.625,406.84375 L177.4375,404.3125 L178.0625,402.9375 L177.59375,401.71875 L178.125,397.84375 L180.25,395.71875 L179.1875,394.46875 L176.875,394.28125 L174.21875,393.25 L170.34375,393.59375 L169.625,389.34375 L167.15625,386.34375 L166.09375,386 L166.46875,389.53125 L166.46875,390.59375 L163.09375,390.75 L159.5625,389.53125 L158.84375,385.09375 L156.375,382.4375 L154.625,382.28125 L154.4375,380.6875 L152.5,379.4375 L149.3125,378.5625 L150.1875,377.5 L150.1875,376.4375 L149.125,375.5625 L147.90625,374.5 L144.34375,375.03125 L142.25,376.78125 L140.8125,376.96875 L138.53125,375.375 L135.15625,376.78125 L133.5625,375.71875 L135,373.96875 L135.15625,371.65625 L131.8125,370.4375 L131.8125,370.4375 L131.8125,370.4375 L131.8125,370.4375 Z M131.8125,370.4375"></path>
                                    <path data-num="33"
                                          d="M133.25,311.21875 L130.125,315.90625 L129.15625,332.3125 L126.625,348.90625 L124.84375,361.78125 L124.65625,365.125 L126.03125,360.625 L128.75,357.09375 L132.65625,360.625 L133.0625,361.78125 L134.21875,363.34375 L129.34375,363.5625 L128.5625,362.375 L126.625,363.15625 L126.21875,366.09375 L124.0625,369.03125 L124.0625,373.5 L124.03125,373.6875 L125.625,373.625 L131.8125,370.4375 L135.15625,371.65625 L135,373.96875 L133.5625,375.71875 L135.15625,376.78125 L138.53125,375.375 L140.8125,376.96875 L142.25,376.78125 L144.34375,375.03125 L147.90625,374.5 L149.125,375.5625 L150.1875,376.4375 L150.1875,377.5 L149.3125,378.5625 L152.5,379.4375 L154.4375,380.6875 L154.625,382.28125 L156.375,382.4375 L158.84375,385.09375 L159.5625,389.53125 L163.09375,390.75 L166.46875,390.59375 L166.46875,389.53125 L166.09375,386 L167.15625,386.34375 L169.15625,388.78125 L172.28125,388.28125 L173.71875,386.875 L173.53125,384.9375 L172.28125,383.875 L172.65625,381.90625 L174.59375,381.90625 L176.53125,380.6875 L175.65625,378.90625 L175.125,376.25 L176.53125,373.78125 L179.53125,369.1875 L181.3125,367.0625 L182.90625,366.53125 L183.25,364.78125 L181.125,364.59375 L180.25,362.65625 L180.9375,360.71875 L183.4375,360.1875 L185.1875,359.65625 L187.25,359.375 L187.125,359.28125 L186.96875,355.40625 L188.90625,354 L186.4375,352.40625 L183.96875,355.40625 L177.9375,355.59375 L177.40625,354.15625 L175.65625,353.28125 L177.0625,351.5 L177.0625,349.5625 L176.34375,348.5 L176.34375,347.4375 L178.125,346.375 L178.65625,343.21875 L179.71875,340.375 L178.65625,338.78125 L176.71875,338.78125 L175.6875,337.5625 L174.6875,339.65625 L172.75,338.28125 L170,339.65625 L167.65625,339.28125 L163.1875,334.78125 L160.4375,334.59375 L159.65625,328.34375 L154.5625,327.75 L154.375,324.8125 L153.40625,325.78125 L147.625,325.78125 L147.90625,327.03125 L149.28125,332.6875 L149.65625,338.34375 L148.6875,339.90625 L147.71875,335.21875 L144.96875,324.5 L135,315.5 L135.21875,311.40625 L133.25,311.21875 L133.25,311.21875 L133.25,311.21875 L133.25,311.21875 Z M133.25,311.21875"></path>
                                    <path data-num="24"
                                          d="M201.84375,306.46875 L200.09375,309.59375 L197.34375,309.96875 L197.15625,314.65625 L187.96875,320.90625 L187.78125,327.75 L184.25,331.25 L182.3125,333.03125 L178.40625,332.625 L176.25,336.34375 L175.6875,337.5625 L176.71875,338.78125 L178.65625,338.78125 L179.71875,340.375 L178.65625,343.21875 L178.125,346.375 L176.34375,347.4375 L176.34375,348.5 L177.0625,349.5625 L177.0625,351.5 L175.65625,353.28125 L177.40625,354.15625 L177.9375,355.59375 L183.96875,355.40625 L186.4375,352.40625 L188.90625,354 L186.96875,355.40625 L187.125,359.28125 L189.96875,361.25 L190.3125,364.9375 L193.3125,366 L195.09375,364.40625 L198.96875,364.40625 L201.09375,362.65625 L202.34375,362.84375 L202.6875,364.25 L206.59375,364.25 L207.46875,363.1875 L208.875,363.375 L210.46875,365.125 L210.46875,366.375 L209.0625,367.25 L209.59375,368.5 L211.53125,368.65625 L214,366.375 L216.125,366.375 L217.53125,367.96875 L220.59375,369.25 L220.78125,368.75 L222.5625,367 L222.75,364.0625 L227.03125,363.6875 L229.78125,359.78125 L228.59375,359.375 L228.40625,357.25 L231.71875,356.84375 L231.9375,354.90625 L233.5,353.90625 L235.25,350.78125 L233.5,348.84375 L233.5,346.6875 L234.84375,345.53125 L233.09375,342.78125 L233.28125,338.5 L229,338.6875 L227.25,337.5 L228.8125,335.5625 L226.65625,333.8125 L228.21875,331.84375 L226.65625,331.0625 L226.65625,328.34375 L230.5625,324.8125 L228.40625,323.0625 L227.25,320.125 L223.125,319.53125 L221.75,318.5625 L224.6875,317.1875 L223.71875,315.84375 L219.4375,315.25 L218.4375,311.34375 L212.1875,310.75 L210.8125,312.71875 L209.46875,313.09375 L207.6875,310.75 L208.5,308.59375 L207.5,306.65625 L201.84375,306.46875 L201.84375,306.46875 L201.84375,306.46875 L201.84375,306.46875 Z M201.84375,306.46875"></path>
                                    <path data-num="47"
                                          d="M187.25,359.375 L185.1875,359.65625 L183.4375,360.1875 L180.9375,360.71875 L180.25,362.65625 L181.125,364.59375 L183.25,364.78125 L182.90625,366.53125 L181.3125,367.0625 L179.53125,369.1875 L176.53125,373.78125 L175.125,376.25 L175.65625,378.90625 L176.53125,380.6875 L174.59375,381.90625 L172.65625,381.90625 L172.28125,383.875 L173.53125,384.9375 L173.71875,386.875 L172.28125,388.28125 L169.15625,388.78125 L169.625,389.34375 L170.34375,393.59375 L174.21875,393.25 L176.875,394.28125 L179.1875,394.46875 L180.25,395.71875 L178.125,397.84375 L177.59375,401.71875 L178.0625,402.9375 L178.8125,401.375 L181.125,403.34375 L184.25,400.21875 L185.625,402.15625 L188.9375,401.5625 L192.46875,401.1875 L194.03125,398.4375 L199.875,397.875 L202.8125,400.78125 L203.8125,399.8125 L205.75,399.21875 L204.96875,396.5 L207.90625,395.71875 L211.625,394.9375 L210.8125,392.59375 L212,391.21875 L212.96875,387.5 L210.8125,385.15625 L212.1875,380.6875 L215.125,382.4375 L219.4375,381.65625 L217.46875,377.34375 L215.90625,371.5 L219.8125,371.3125 L220.59375,369.25 L217.53125,367.96875 L216.125,366.375 L214,366.375 L211.53125,368.65625 L209.59375,368.5 L209.0625,367.25 L210.46875,366.375 L210.46875,365.125 L208.875,363.375 L207.46875,363.1875 L206.59375,364.25 L202.6875,364.25 L202.34375,362.84375 L201.09375,362.65625 L198.96875,364.40625 L195.09375,364.40625 L193.3125,366 L190.3125,364.9375 L189.96875,361.25 L187.25,359.375 L187.25,359.375 L187.25,359.375 L187.25,359.375 Z M187.25,359.375"></path>
                                    <path data-num="46"
                                          d="M239.46875,343.3125 L235.3125,345.25 L234.71875,345.34375 L234.84375,345.53125 L233.5,346.6875 L233.5,348.84375 L235.25,350.78125 L233.5,353.90625 L231.9375,354.90625 L231.71875,356.84375 L228.40625,357.25 L228.59375,359.375 L229.78125,359.78125 L227.03125,363.6875 L222.75,364.0625 L222.5625,367 L220.78125,368.75 L219.8125,371.3125 L215.90625,371.5 L217.46875,377.34375 L219.125,380.96875 L221.625,380.875 L221.78125,381.90625 L220.375,383.5 L221.4375,385.625 L223.03125,385.625 L224.78125,387.5625 L226.375,387.5625 L227.625,386.15625 L227.96875,386.53125 L227.96875,388.28125 L228.5,390.59375 L232.21875,390.75 L235.21875,387.5625 L236.8125,387.40625 L237.34375,388.28125 L238.21875,390.21875 L239.65625,390.21875 L240.1875,386.6875 L243.1875,387.0625 L244.9375,384.9375 L247.78125,385.625 L252.03125,383.6875 L252.0625,384.0625 L253.4375,382.625 L251.65625,379.96875 L250.96875,376.4375 L253.25,374.5 L254.3125,374.84375 L257.5,371.3125 L259.25,371.5 L259.96875,370.59375 L263.5,370.59375 L264.75,369.1875 L265.09375,368.09375 L263.5,367.875 L264.59375,364.5625 L262.09375,363.46875 L264.59375,357.65625 L261.28125,355.1875 L260.15625,348 L257.125,347.1875 L254.90625,349.375 L253.8125,347.4375 L250.5,350.75 L248.28125,351.03125 L244.4375,345.53125 L239.46875,343.3125 L239.46875,343.3125 L239.46875,343.3125 L239.46875,343.3125 Z M239.46875,343.3125"></path>
                                    <path data-num="09"
                                          d="M229.21875,442.375 L227.96875,443.25 L227.4375,444.3125 L229.90625,446.09375 L230.625,447.34375 L230.09375,448.375 L225.84375,448.75 L224.625,450.5 L224.78125,451.03125 L226.375,451.5625 L227.28125,452.8125 L226.21875,454.5625 L224.96875,454.40625 L223.03125,452.625 L220.71875,451.9375 L218.4375,452.09375 L214.375,454.5625 L214.53125,457.9375 L215.59375,458.65625 L214.90625,461.28125 L210.28125,462.53125 L208.53125,464.65625 L208.53125,468.1875 L209.25,469.25 L207.59375,470.78125 L208.65625,471.375 L214.6875,472.53125 L217.25,472.53125 L220.5625,476.84375 L228.96875,476.4375 L232.28125,481.71875 L235.21875,480.53125 L243.8125,481.71875 L244.4375,485.3125 L250.5,483.90625 L252.71875,481.96875 L256.03125,481.125 L256.84375,479.46875 L264.03125,478.9375 L259.625,473.6875 L256.03125,475.625 L249.6875,470.375 L251.0625,468.4375 L256.03125,468.4375 L255.46875,463.75 L255.46875,460.15625 L254.65625,453.5 L244.96875,448.8125 L245.53125,447.15625 L243.6875,445.09375 L242.125,445.75 L240,446.09375 L236.09375,444.3125 L235.03125,443.96875 L236.625,445.90625 L235.9375,447.5 L232.5625,447.15625 L232.40625,445.375 L230.4375,442.71875 L229.21875,442.375 L229.21875,442.375 L229.21875,442.375 L229.21875,442.375 Z M229.21875,442.375"></path>
                                    <path data-num="32"
                                          d="M199.875,397.875 L194.03125,398.4375 L192.46875,401.1875 L188.9375,401.5625 L185.625,402.15625 L184.25,400.21875 L181.125,403.34375 L178.8125,401.375 L177.4375,404.3125 L177.625,406.84375 L175.46875,407.4375 L174.5,406.0625 L173.53125,403.125 L170.78125,405.46875 L168.84375,404.6875 L166.6875,405.09375 L164.75,407.4375 L167.0625,411.34375 L165.5,412.90625 L166.09375,416.21875 L164.15625,418.75 L162.78125,422.46875 L164.34375,425.21875 L169.28125,425.5625 L171.21875,424.53125 L174.21875,424.53125 L174.0625,427.875 L176.34375,429.125 L178.65625,429.46875 L179.71875,432.3125 L180.25,432.84375 L179.90625,434.59375 L179.1875,435.3125 L181.3125,436.71875 L181.46875,438.3125 L184.125,438.3125 L184.84375,437.59375 L187.125,437.59375 L187.84375,439.1875 L190.3125,439.1875 L191.03125,440.625 L195.8125,440.625 L199.375,442.46875 L199.6875,442.03125 L201.625,440.96875 L205.15625,436.375 L211.71875,436.90625 L214.53125,438.84375 L215.4375,437.59375 L216.84375,433.375 L218.59375,429.3125 L222.3125,427.71875 L224.09375,427 L223.5625,425.40625 L221.78125,425.21875 L221.09375,423.46875 L219.65625,423.46875 L217.375,421.15625 L217.53125,419.5625 L214.53125,416.5625 L214,414.65625 L212.0625,415.5 L211.53125,414.4375 L212.78125,412.5 L211.34375,411.09375 L211.34375,408.625 L210.125,407.375 L206.21875,407.1875 L206.21875,404.90625 L208.34375,403.3125 L208.34375,401.53125 L210.65625,400.46875 L209.40625,399.78125 L208,400.46875 L205.15625,400.46875 L204.28125,399.65625 L203.8125,399.8125 L202.8125,400.78125 L199.875,397.875 L199.875,397.875 L199.875,397.875 L199.875,397.875 Z M199.875,397.875"></path>
                                    <path data-num="31"
                                          d="M237,408.4375 L234.15625,409.5 L233.28125,410.90625 L232.21875,409.6875 L230.28125,409.5 L229.90625,411.28125 L228.6875,411.78125 L230.4375,412.6875 L229.21875,414.625 L224.78125,415.875 L222.84375,413.5625 L221.09375,413.5625 L219.65625,414.4375 L214.53125,414.4375 L214,414.65625 L214.53125,416.5625 L217.53125,419.5625 L217.375,421.15625 L219.65625,423.46875 L221.09375,423.46875 L221.78125,425.21875 L223.5625,425.40625 L224.09375,427 L222.3125,427.71875 L218.59375,429.3125 L216.84375,433.375 L215.4375,437.59375 L214.53125,438.84375 L211.71875,436.90625 L205.15625,436.375 L201.625,440.96875 L199.6875,442.03125 L198.4375,443.78125 L197.03125,445.90625 L197.03125,447.15625 L194.75,448.03125 L192.96875,451.03125 L192.78125,452.625 L195.96875,454.9375 L196.5,457.21875 L195.4375,459 L197.5625,458.28125 L198.625,459.1875 L199.5,462.875 L197.03125,464.3125 L197.21875,466.25 L195.96875,467.46875 L194.21875,466.59375 L192.25,466.59375 L192.5,477.09375 L200.4375,477.625 L200.84375,468.03125 L203.5625,468.4375 L207.59375,470.78125 L209.25,469.25 L208.53125,468.1875 L208.53125,464.65625 L210.28125,462.53125 L214.90625,461.28125 L215.59375,458.65625 L214.53125,457.9375 L214.375,454.5625 L218.4375,452.09375 L220.71875,451.9375 L223.03125,452.625 L224.96875,454.40625 L226.21875,454.5625 L227.28125,452.8125 L226.375,451.5625 L224.78125,451.03125 L224.625,450.5 L225.84375,448.75 L230.09375,448.375 L230.625,447.34375 L229.90625,446.09375 L227.4375,444.3125 L227.96875,443.25 L229.21875,442.375 L230.4375,442.71875 L232.40625,445.375 L232.5625,447.15625 L235.9375,447.5 L236.625,445.90625 L235.03125,443.96875 L236.09375,444.3125 L240,446.09375 L242.125,445.75 L243.6875,445.09375 L243.3125,444.6875 L245.8125,443.5625 L246.34375,440.53125 L249.40625,439.15625 L248.5625,437.21875 L251.34375,434.71875 L252.71875,437.21875 L256.84375,435.84375 L257.625,435.71875 L257.6875,434.4375 L257.6875,431.9375 L255.5625,432.3125 L252.90625,431.59375 L250.59375,428.78125 L249.71875,427.53125 L245.125,425.59375 L244.0625,424 L245.46875,423.46875 L245.46875,421.53125 L244.0625,419.9375 L242.28125,417.09375 L242.125,414.625 L241.59375,414.28125 L239.46875,411.78125 L238.59375,409.15625 L237,408.4375 L237,408.4375 L237,408.4375 L237,408.4375 Z M237,408.4375"></path>
                                    <path data-num="82"
                                          d="M212.1875,380.6875 L210.8125,385.15625 L212.96875,387.5 L212,391.21875 L210.8125,392.59375 L211.625,394.9375 L207.90625,395.71875 L204.96875,396.5 L205.75,399.21875 L204.28125,399.65625 L205.15625,400.46875 L208,400.46875 L209.40625,399.78125 L210.65625,400.46875 L208.34375,401.53125 L208.34375,403.3125 L206.21875,404.90625 L206.21875,407.1875 L210.125,407.375 L211.34375,408.625 L211.34375,411.09375 L212.78125,412.5 L211.53125,414.4375 L212.0625,415.5 L214.53125,414.4375 L219.65625,414.4375 L221.09375,413.5625 L222.84375,413.5625 L224.78125,415.875 L229.21875,414.625 L230.4375,412.6875 L228.6875,411.78125 L229.90625,411.28125 L230.28125,409.5 L232.21875,409.6875 L233.28125,410.90625 L234.15625,409.5 L237,408.4375 L238.28125,409.03125 L239.28125,407.375 L237.53125,405.4375 L240.875,405.4375 L241.9375,403.5 L244.25,401.375 L241.9375,401.375 L242.65625,398.375 L248.65625,397.65625 L250.96875,396.25 L253.78125,395.1875 L254.6875,394.28125 L253.59375,391.46875 L255.1875,388.28125 L252.375,388.09375 L252.03125,383.6875 L247.78125,385.625 L244.9375,384.9375 L243.1875,387.0625 L240.1875,386.6875 L239.65625,390.21875 L238.21875,390.21875 L237.34375,388.28125 L236.8125,387.40625 L235.21875,387.5625 L232.21875,390.75 L228.5,390.59375 L227.96875,388.28125 L227.96875,386.53125 L227.625,386.15625 L226.375,387.5625 L224.78125,387.5625 L223.03125,385.625 L221.4375,385.625 L220.375,383.5 L221.78125,381.90625 L221.625,380.875 L219.125,380.96875 L219.4375,381.65625 L215.125,382.4375 L212.1875,380.6875 L212.1875,380.6875 L212.1875,380.6875 L212.1875,380.6875 Z M212.1875,380.6875"></path>
                                    <path data-num="12"
                                          d="M286.6875,349.375 L281.15625,354.09375 L281.15625,358.78125 L279.78125,358.78125 L279.21875,363.1875 L277.84375,363.75 L276.75,366.21875 L270.65625,366.21875 L270.125,365.40625 L267.34375,365.40625 L265.6875,368.15625 L265.09375,368.09375 L264.75,369.1875 L263.5,370.59375 L259.96875,370.59375 L259.25,371.5 L257.5,371.3125 L254.3125,374.84375 L253.25,374.5 L250.96875,376.4375 L251.65625,379.96875 L253.4375,382.625 L252.0625,384.0625 L252.375,388.09375 L255.1875,388.28125 L253.59375,391.46875 L254.84375,394.65625 L256.4375,393.75 L257.15625,395.34375 L259.4375,393.0625 L262.8125,392.875 L266.15625,395.34375 L272,396.40625 L274.125,400.125 L277.125,401.53125 L278.71875,405.59375 L278.53125,407.1875 L280.46875,410.75 L280.46875,412.6875 L284,417.28125 L287.375,419.03125 L289.5,418.5 L290.5625,417.09375 L292.15625,417.46875 L295.8125,419.8125 L295.84375,419.8125 L297.46875,419.8125 L300.78125,419.8125 L300.5,414.03125 L300.5,412.09375 L302.15625,412.09375 L305.1875,413.75 L308.21875,413.75 L307.6875,410.4375 L309.34375,409.03125 L312.65625,408.5 L312.65625,405.71875 L316.25,404.0625 L315.40625,400.21875 L312.375,400.21875 L309.625,399.65625 L309.0625,397.4375 L311.28125,396.90625 L311.28125,394.125 L313.46875,392.1875 L311.8125,391.375 L307.125,392.1875 L307.40625,390 L304.09375,388.59375 L303.25,381.96875 L303.25,377.28125 L300.5,375.34375 L300.78125,371.46875 L294.96875,364.3125 L294.40625,358.78125 L292.5,358.78125 L291.65625,353.25 L287.78125,353.8125 L287.25,350.21875 L286.6875,349.375 L286.6875,349.375 L286.6875,349.375 L286.6875,349.375 Z M286.6875,349.375"></path>
                                    <path data-num="81"
                                          d="M262.8125,392.875 L259.4375,393.0625 L257.15625,395.34375 L256.4375,393.75 L254.84375,394.65625 L254.6875,394.28125 L253.78125,395.1875 L250.96875,396.25 L248.65625,397.65625 L242.65625,398.375 L241.9375,401.375 L244.25,401.375 L241.9375,403.5 L240.875,405.4375 L237.53125,405.4375 L239.28125,407.375 L238.28125,409.03125 L238.59375,409.15625 L239.46875,411.78125 L241.59375,414.28125 L242.125,414.625 L242.28125,417.09375 L244.0625,419.9375 L245.46875,421.53125 L245.46875,423.46875 L244.0625,424 L245.125,425.59375 L249.71875,427.53125 L250.59375,428.78125 L252.90625,431.59375 L255.5625,432.3125 L257.6875,431.9375 L257.6875,434.4375 L257.625,435.71875 L258.78125,435.5625 L258.5,436.9375 L262.375,436.9375 L265.96875,438.0625 L266.25,434.46875 L267.90625,434.46875 L273.96875,435.5625 L279.78125,435.5625 L284.1875,434.1875 L285.3125,430.59375 L282.28125,427.8125 L283.09375,425.0625 L284.75,422.59375 L287.5,424.5 L294.6875,422.03125 L295.8125,419.8125 L292.15625,417.46875 L290.5625,417.09375 L289.5,418.5 L287.375,419.03125 L284,417.28125 L280.46875,412.6875 L280.46875,410.75 L278.53125,407.1875 L278.71875,405.59375 L277.125,401.53125 L274.125,400.125 L272,396.40625 L266.15625,395.34375 L262.8125,392.875 L262.8125,392.875 L262.8125,392.875 L262.8125,392.875 Z M262.8125,392.875"></path>
                                    <path data-num="01"
                                          d="M375.28125,258.59375 L373.125,258.8125 L371.75,261.34375 L368.0625,275.78125 L367.53125,276.96875 L367.15625,281.53125 L366.09375,283 L366.09375,289.59375 L365.46875,291.09375 L369.28125,293.40625 L370.78125,293.625 L373.125,295.75 L373.53125,299.15625 L376.09375,298.3125 L380.0625,299.46875 L380.125,298.71875 L382.03125,298.71875 L384.78125,301.28125 L387.34375,300 L388.625,296.1875 L389.90625,294.6875 L391.59375,294.90625 L393.28125,296.40625 L394.15625,299.15625 L402,308.71875 L404.34375,307.03125 L404.75,303.40625 L407.3125,302.96875 L407.3125,296.59375 L408.59375,295.53125 L409,289.8125 L409.5,290.21875 L409.4375,288.125 L408.375,286.1875 L408.8125,280.6875 L410.71875,281.75 L411.78125,279.8125 L413.6875,279.1875 L415.65625,277.625 L413.53125,277.625 L413.53125,273.90625 L415.875,272.53125 L419.375,272.15625 L419.59375,270.1875 L418.40625,269.40625 L421.34375,265.6875 L420.9375,264.53125 L417.59375,262.75 L409.46875,271.6875 L403.8125,271.6875 L403.8125,269.34375 L400.6875,267.78125 L396.96875,271.875 L394.03125,272.28125 L394.03125,269.53125 L391.5,268.375 L387.59375,262.90625 L384.0625,261.53125 L382.90625,259 L380.9375,258.59375 L379,259.96875 L377.4375,260.375 L375.28125,258.59375 L375.28125,258.59375 L375.28125,258.59375 L375.28125,258.59375 Z M375.28125,258.59375"></path>
                                    <path data-num="38"
                                          d="M389.90625,294.6875 L388.625,296.1875 L387.34375,300 L384.78125,301.28125 L382.03125,298.71875 L380.125,298.71875 L379.90625,301.5 L382.6875,303.84375 L378.4375,309.34375 L372.90625,310.625 L368.65625,312.125 L371.40625,314.875 L372.0625,316.15625 L367.8125,318.28125 L367.375,324.4375 L367.25,324.5 L368.4375,326.96875 L371.84375,328.03125 L374.1875,327.1875 L376.9375,325.28125 L380.5625,328.25 L383.53125,328.25 L385.65625,331.21875 L384.78125,333.34375 L385.21875,336.34375 L384.15625,339.3125 L384.59375,340.375 L386.0625,339.9375 L389.46875,341 L393.9375,342.28125 L395.84375,341 L396.6875,339.53125 L397.34375,339.53125 L397.53125,355.4375 L398.59375,356.5 L401.375,356.5 L403.90625,358 L405.8125,359.5 L407.75,359.6875 L409,360.75 L412.53125,361.15625 L412.78125,360.5625 L411.21875,359.78125 L411.21875,357.4375 L416.09375,357.4375 L417.65625,355.875 L416.6875,354.125 L419.21875,352.15625 L421,352.9375 L423.53125,350.78125 L428,351.5625 L429.5625,349.8125 L433.28125,350 L433.28125,345.71875 L431.71875,344.9375 L430.9375,342.40625 L426.84375,342 L426.25,341.03125 L427.03125,336.9375 L428.40625,335.75 L427.28125,334.21875 L425.15625,332.9375 L423.875,334.21875 L424.3125,332.5 L424.3125,330.8125 L422.59375,329.09375 L423.46875,325.0625 L425.375,324 L425.15625,321.25 L421.125,317.21875 L419.625,317.21875 L418.5625,318.6875 L416.03125,315.3125 L414.53125,315.5 L413.25,318.28125 L414.125,319.96875 L413.46875,320.625 L411.78125,319.34375 L406.875,318.28125 L404.5625,314.03125 L404.5625,312.3125 L402.21875,309.78125 L401.96875,308.6875 L394.15625,299.15625 L393.28125,296.40625 L391.59375,294.90625 L389.90625,294.6875 L389.90625,294.6875 L389.90625,294.6875 L389.90625,294.6875 Z M389.90625,294.6875"></path>
                                    <path data-num="74"
                                          d="M438.125,262.1875 L433.65625,262.96875 L429.34375,266.46875 L428.1875,264.71875 L426.03125,264.90625 L424.0625,269.21875 L424.28125,270.96875 L426.40625,272.71875 L422.5,275.28125 L419.96875,277.625 L415.65625,277.625 L413.6875,279.1875 L411.78125,279.8125 L410.71875,281.75 L408.8125,280.6875 L408.375,286.1875 L409.4375,288.125 L409.5,290.21875 L411.125,291.5 L411.125,297.03125 L414.96875,297.65625 L416.4375,300.4375 L419.84375,300.84375 L420.46875,299.59375 L422.1875,299.59375 L425.15625,302.78125 L426.21875,303.84375 L429.625,303.1875 L430.46875,301.5 L431.3125,298.09375 L433.21875,296.59375 L434.71875,292.15625 L436.625,290.875 L438.125,291.28125 L438.53125,292.5625 L437.46875,293.84375 L439.375,296.1875 L442.5625,296.1875 L444.5,299.375 L444.0625,300.4375 L445.96875,299.15625 L447.46875,297.46875 L448.78125,297.625 L448.875,294.21875 L455.53125,291.46875 L456.3125,289.53125 L455.90625,285.21875 L451.625,280.75 L450.25,281.53125 L450.25,279.75 L450.25,276.84375 L446.53125,275.0625 L446.34375,273.5 L448.5,271.15625 L448.5,268.4375 L444.96875,264.71875 L444.78125,262.1875 L438.125,262.1875 L438.125,262.1875 L438.125,262.1875 L438.125,262.1875 Z M438.125,262.1875"></path>
                                    <path data-num="42"
                                          d="M331.53125,274.03125 L328,274.625 L327.4375,276.78125 L328.8125,279.5 L329.1875,290.625 L324.5,290.84375 L324.3125,292.59375 L327.4375,295.125 L325.6875,296.875 L325.09375,301.1875 L327.4375,304.3125 L329.5625,309.375 L334.65625,312.71875 L336.40625,319.15625 L332.6875,322.65625 L333.28125,325 L338.75,326.78125 L343.0625,323.25 L345.1875,323.0625 L351.4375,325.78125 L351.0625,329.5 L354.1875,329.3125 L356.65625,332.15625 L358.46875,331.65625 L361.84375,331.03125 L362.71875,327.1875 L367.375,324.4375 L367.8125,318.28125 L367.96875,318.1875 L365.6875,317.84375 L363.5625,318.6875 L361.84375,317.625 L363.96875,315.09375 L363.34375,313.1875 L356.75,312.125 L351.21875,307.03125 L351.21875,305.3125 L352.5,304.25 L352.5,302.78125 L351.03125,301.90625 L352.28125,300 L352.28125,297.25 L349.75,294.90625 L349.75,292.5625 L348.03125,290.875 L348.03125,288.96875 L347.1875,285.78125 L348.46875,284.5 L348.6875,280.6875 L352.71875,280.6875 L353.78125,279.40625 L352.5,277.28125 L352.5,275.375 L351.4375,274.53125 L350.6875,278.53125 L348.53125,278.53125 L346.96875,280.09375 L345.78125,278.90625 L339.53125,277.9375 L337.1875,279.3125 L335.625,279.3125 L335.25,277.9375 L332.3125,277.34375 L332.125,274.21875 L331.53125,274.03125 L331.53125,274.03125 L331.53125,274.03125 L331.53125,274.03125 Z M331.53125,274.03125"></path>
                                    <path data-num="69"
                                          d="M363.75,271.3125 L361.625,271.5 L359.84375,273.25 L358.6875,271.6875 L356.9375,273.25 L354.5625,271.6875 L352.625,271.6875 L351.84375,272.28125 L351.4375,274.53125 L352.5,275.375 L352.5,277.28125 L353.78125,279.40625 L352.71875,280.6875 L348.6875,280.6875 L348.46875,284.5 L347.1875,285.78125 L348.03125,288.96875 L348.03125,290.875 L349.75,292.5625 L349.75,294.90625 L352.28125,297.25 L352.28125,300 L351.03125,301.90625 L352.5,302.78125 L352.5,304.25 L351.21875,305.3125 L351.21875,307.03125 L356.75,312.125 L363.34375,313.1875 L363.96875,315.09375 L361.84375,317.625 L363.5625,318.6875 L365.6875,317.84375 L367.96875,318.1875 L372.0625,316.15625 L371.40625,314.875 L368.65625,312.125 L372.90625,310.625 L378.4375,309.34375 L382.6875,303.84375 L379.90625,301.5 L380.0625,299.46875 L376.09375,298.3125 L373.53125,299.15625 L373.125,295.75 L370.78125,293.625 L369.28125,293.40625 L365.46875,291.09375 L366.09375,289.59375 L366.09375,283 L367.15625,281.53125 L367.53125,276.96875 L366.875,278.53125 L365.5,278.34375 L364.75,274.4375 L363.75,271.3125 L363.75,271.3125 L363.75,271.3125 L363.75,271.3125 Z M363.75,271.3125"></path>
                                    <path data-num="73"
                                          d="M409,289.8125 L408.59375,295.53125 L407.3125,296.59375 L407.3125,302.96875 L404.75,303.40625 L404.34375,307.03125 L402,308.71875 L401.96875,308.6875 L402.21875,309.78125 L404.5625,312.3125 L404.5625,314.03125 L406.875,318.28125 L411.78125,319.34375 L413.46875,320.625 L414.125,319.96875 L413.25,318.28125 L414.53125,315.5 L416.03125,315.3125 L418.5625,318.6875 L419.625,317.21875 L421.125,317.21875 L425.15625,321.25 L425.375,324 L423.46875,325.0625 L422.59375,329.09375 L424.3125,330.8125 L424.3125,332.5 L423.875,334.21875 L425.15625,332.9375 L427.28125,334.21875 L428.40625,335.75 L431.9375,335.375 L433.09375,336.53125 L433.6875,339.28125 L437.1875,338.875 L437.59375,335.9375 L439.34375,335.15625 L443.09375,335.34375 L443.03125,335.21875 L448.875,332.875 L451.03125,334.25 L453.1875,334.25 L453.375,331.90625 L455.90625,330.53125 L456.875,329.375 L461.96875,327.40625 L462.5625,324.09375 L461.5625,322.53125 L464.3125,317.84375 L461.78125,316.875 L461,314.125 L455.71875,311 C455.71875,311 456.03377,305.01275 455.53125,303.9375 C455.51544,303.91055 455.48155,303.86019 455.46875,303.84375 C455.46374,303.8383 455.44264,303.81713 455.4375,303.8125 C455.43393,303.81272 455.4091,303.81243 455.40625,303.8125 C455.4062,303.80552 455.40608,303.78312 455.40625,303.78125 C455.40269,303.78137 455.37784,303.78121 455.375,303.78125 C455.37209,303.7811 455.3467,303.78118 455.34375,303.78125 C455.34022,303.78117 455.31534,303.78126 455.3125,303.78125 C454.53125,303.97657 451.625,304.1875 451.625,304.1875 L448.6875,300.84375 L448.78125,297.625 L447.46875,297.46875 L445.96875,299.15625 L444.0625,300.4375 L444.5,299.375 L442.5625,296.1875 L439.375,296.1875 L437.46875,293.84375 L438.53125,292.5625 L438.125,291.28125 L436.625,290.875 L434.71875,292.15625 L433.21875,296.59375 L431.3125,298.09375 L430.46875,301.5 L429.625,303.1875 L426.21875,303.84375 L425.15625,302.78125 L422.1875,299.59375 L420.46875,299.59375 L419.84375,300.84375 L416.4375,300.4375 L414.96875,297.65625 L411.125,297.03125 L411.125,291.5 L409,289.8125 L409,289.8125 L409,289.8125 L409,289.8125 Z M409,289.8125"></path>
                                    <path data-num="07"
                                          d="M367.25,324.5 L362.71875,327.1875 L361.84375,331.03125 L358.46875,331.65625 L356.65625,332.15625 L356.71875,332.25 L355.5625,336.9375 L352.8125,338.09375 L351.65625,340.0625 L352.4375,342.59375 L353,343.96875 L350.09375,343.96875 L349.875,347.65625 L346.75,347.875 L345.1875,352.75 L340.5,352.75 L335.4375,356.46875 L332.625,360.9375 L333.09375,361.53125 L334.46875,368.71875 L337.78125,372.3125 L337.21875,376.4375 L341.375,378.9375 L341.375,384.46875 L343.59375,383.34375 L348.28125,386.40625 L350.5,387.21875 L351.03125,383.34375 L353.8125,382.8125 L354.625,385.84375 L357.40625,385.5625 L357.9375,382.53125 L364.28125,386.09375 L365.3125,384 L368,383.59375 L368.21875,379.46875 L367.59375,378.59375 L366.75,378.40625 L366.75,376.90625 L367.375,375.40625 L366.3125,373.71875 L366.9375,369.90625 L369.5,366.90625 L369.5,362.6875 L368.4375,357.78125 L370.34375,357.375 L370.78125,355.25 L372.6875,351.625 L373.75,348.875 L372.0625,344.625 L371,341.21875 L369.5,335.28125 L369.5,327.3125 L368.4375,326.96875 L367.25,324.5 L367.25,324.5 L367.25,324.5 L367.25,324.5 Z M367.25,324.5"></path>
                                    <path data-num="26"
                                          d="M376.9375,325.28125 L374.1875,327.1875 L371.84375,328.03125 L369.5,327.3125 L369.5,335.28125 L371,341.21875 L372.0625,344.625 L373.75,348.875 L372.6875,351.625 L370.78125,355.25 L370.34375,357.375 L368.4375,357.78125 L369.5,362.6875 L369.5,366.90625 L366.9375,369.90625 L366.3125,373.71875 L367.375,375.40625 L366.75,376.90625 L366.75,378.40625 L367.59375,378.59375 L368.21875,379.46875 L368,383.59375 L370.59375,383.21875 L371.75,384.59375 L371.1875,388.5 L371.96875,389.46875 L374.875,386.53125 L377.4375,386.34375 L378,384.78125 L374.6875,384.375 L374.125,380.875 L376.25,377.5625 L379,377.34375 L381.71875,379.90625 L379,383.59375 L379.78125,384.96875 L383.6875,385.375 L386.21875,383.21875 L384.84375,386.15625 L385.25,388.5 L389.34375,388.875 L394.8125,389.28125 L395.59375,391.8125 L398.53125,393.96875 L401.0625,394.15625 L402.8125,392.59375 L403.8125,389.65625 L405.375,391.03125 L406.53125,392.40625 L407.3125,385.15625 L405.375,384.78125 L404.1875,382.25 L397.5625,380.46875 L396.75,377.15625 L399.125,375.59375 L397.15625,374.21875 L397.5625,372.46875 L400.6875,372.65625 L403.40625,374.03125 L405.5625,371.5 L403.40625,369.75 L403.59375,367.40625 L404.78125,363.6875 L408.875,363.28125 L412.1875,361.9375 L412.53125,361.15625 L409,360.75 L407.75,359.6875 L405.8125,359.5 L403.90625,358 L401.375,356.5 L398.59375,356.5 L397.53125,355.4375 L397.34375,339.53125 L396.6875,339.53125 L395.84375,341 L393.9375,342.28125 L389.46875,341 L386.0625,339.9375 L384.59375,340.375 L384.15625,339.3125 L385.21875,336.34375 L384.78125,333.34375 L385.65625,331.21875 L383.53125,328.25 L380.5625,328.25 L376.9375,325.28125 L376.9375,325.28125 L376.9375,325.28125 L376.9375,325.28125 Z M376.9375,325.28125"></path>
                                    <path data-num="17"
                                          d="M141.3125,266.625 L138.5625,266.8125 L132.59375,270.4375 L134.03125,271.75 L130.90625,274.28125 L130.53125,276.25 L127.59375,276.625 L126.03125,274.875 L122.125,274.5 L121.71875,272.53125 L119.375,270.96875 L116.0625,272.15625 L118.21875,275.28125 L120.9375,275.28125 L123.6875,277.03125 L125.84375,278.78125 L129.9375,278.59375 L130.71875,280.34375 L133.4375,280.9375 L134.4375,283.65625 L136.1875,284.4375 L136,286.59375 L133.65625,286.21875 L132.875,287.375 L134.625,289.90625 L133.65625,294.21875 L131.3125,294.03125 L131.5,296.75 L132.09375,297.71875 L129.34375,297.71875 L128.96875,296.15625 L130.71875,293.8125 L130.125,292.46875 L129.15625,291.6875 L128.75,287 L125.4375,286.59375 L122.71875,283.28125 L122.3125,290.125 L126.8125,293.4375 L127.1875,297.15625 L127.96875,301.4375 L128.375,305.75 L130.71875,305.53125 L134.8125,308.875 L137.5625,310.4375 L137.75,312.375 L139.90625,312.78125 L146.15625,319.03125 L147.625,325.78125 L153.40625,325.78125 L154.375,324.8125 L154.5625,327.75 L159.65625,328.34375 L160.4375,334.59375 L163.1875,334.78125 L167.65625,339.28125 L170,339.65625 L172.75,338.28125 L174.6875,339.65625 L176.25,336.34375 L177.8125,333.625 L173.65625,330.8125 L172.375,329.09375 L170.65625,327.1875 L166.625,327.84375 L165.34375,327.1875 L165.15625,326.125 L167.28125,325.28125 L167.28125,324.875 L165.78125,324.4375 L164.71875,323.59375 L167.28125,321.46875 L167.28125,319.96875 L166,318.6875 L166.84375,317.84375 L167.28125,315.71875 L165.78125,314.25 L164.5,312.125 L162.1875,310 L160.46875,308.9375 L161.96875,307.21875 L161.125,307.03125 L160.90625,302.5625 L159.1875,301.90625 L161.53125,300.65625 L164.3125,300.65625 L165.5625,299.59375 L167.90625,299.59375 L168.34375,300.65625 L170.46875,300.84375 L171.9375,300.21875 L172.375,296.1875 L174.0625,290.03125 L174.125,290 L172.59375,288.53125 L172.15625,286.40625 L169.40625,285.125 L165.78125,282.59375 L161.3125,283 L158.5625,279.40625 L154.53125,279.1875 L151.34375,276.84375 L151.34375,275.5625 L149.21875,273.25 L149.125,270.375 L146.1875,268.1875 L142.46875,269.75 L141.3125,266.625 L141.3125,266.625 L141.3125,266.625 L141.3125,266.625 Z M141.3125,266.625"></path>
                                    <path data-num="19"
                                          d="M257.75,303.625 L256.90625,305.75 L253.71875,306.375 L252.46875,308.5 L250.96875,308.5 L248.84375,307.875 L247.34375,310.40625 L245.03125,310.625 L243.53125,313.375 L241.625,313.375 L240.125,314.875 L236.3125,314.4375 L235.03125,316.5625 L233.5625,316.375 L231,319.5625 L228.65625,318.6875 L227.5625,320.90625 L228.40625,323.0625 L230.5625,324.8125 L226.65625,328.34375 L226.65625,331.0625 L228.21875,331.84375 L226.65625,333.8125 L228.8125,335.5625 L227.25,337.5 L229,338.6875 L233.28125,338.5 L233.09375,342.78125 L234.71875,345.34375 L235.3125,345.25 L239.46875,343.3125 L244.4375,345.53125 L248.28125,351.03125 L250.5,350.75 L253.8125,347.4375 L254.90625,349.375 L257.125,347.1875 L260.15625,348 L260.25,348.65625 L262.78125,346.875 L262,344.9375 L260.8125,343.75 L262.375,341.8125 L263.9375,341.8125 L264.9375,338.6875 L265.71875,337.125 L265.125,333.59375 L267.65625,330.09375 L271.1875,327.9375 L271.375,322.46875 L273.125,323.4375 L275.09375,325.59375 L277.03125,325.59375 L278.21875,324.21875 L277.25,321.875 L278.21875,318.375 L277.625,315.0625 L276.4375,313.6875 L276.4375,310.9375 L278.21875,308.03125 L277.8125,305.28125 L277.375,304.84375 L275.40625,306.375 L271.5625,306.375 L270.3125,308.28125 L267.96875,308.28125 L266.0625,306.375 L265.1875,305.09375 L260.3125,305.09375 L259.25,303.625 L257.75,303.625 L257.75,303.625 L257.75,303.625 L257.75,303.625 Z M257.75,303.625"></path>
                                    <path data-num="23"
                                          d="M248.125,263.875 L246.96875,267 L243.4375,266.8125 L242.65625,266.40625 L240.3125,266.625 L238.5625,265.4375 L235.1875,269.3125 L235.25,272.1875 L232.90625,276.84375 L233.34375,279.1875 L235.875,279.8125 L237.59375,284.0625 L239.28125,285.78125 L238.65625,293.84375 L242.25,292.78125 L243.75,294.6875 L241.40625,296.59375 L241.40625,298.53125 L243.3125,298.71875 L246.71875,298.53125 L247.78125,297.03125 L248.625,297.03125 L248.21875,299.59375 L250.96875,300.84375 L253.53125,302.5625 L253.53125,303.625 L252.03125,303.625 L252.46875,306.15625 L253.46875,306.78125 L253.71875,306.375 L256.90625,305.75 L257.75,303.625 L259.25,303.625 L260.3125,305.09375 L265.1875,305.09375 L266.0625,306.375 L267.96875,308.28125 L270.3125,308.28125 L271.5625,306.375 L275.40625,306.375 L277.375,304.84375 L273.3125,300.78125 L272.9375,299.03125 L276.65625,296.875 L278.8125,295.71875 L279.375,292.96875 L281.71875,291.21875 L280.9375,287.5 L279.375,285.5625 L279,279.5 L276.84375,274.4375 L274.6875,273.65625 L273.125,270.90625 L271.75,272.65625 L270.40625,270.90625 L270.40625,268.5625 L268.0625,265.25 L261.625,266.03125 L257.90625,265.0625 L248.125,263.875 L248.125,263.875 L248.125,263.875 L248.125,263.875 Z M248.125,263.875"></path>
                                    <path data-num="87"
                                          d="M231.53125,266.8125 L229.78125,268.5625 L224.875,268.1875 L224.3125,268.0625 L220.59375,268.75 L218.4375,270.53125 L218.4375,272.875 L214.15625,273.0625 L211.625,276 L210.0625,277.15625 L211.40625,278.71875 L211.21875,284 L210.25,285.75 L211.8125,287.5 L214.53125,287.71875 L215.125,290.4375 L215.3125,292.1875 L211.8125,292.96875 L210.0625,293.5625 L210.4375,298.4375 L208.09375,300 L206.125,300.59375 L205.15625,303.34375 L203.59375,303.53125 L202.9375,306.5 L207.5,306.65625 L208.5,308.59375 L207.6875,310.75 L209.46875,313.09375 L210.8125,312.71875 L212.1875,310.75 L218.4375,311.34375 L219.4375,315.25 L223.71875,315.84375 L224.6875,317.1875 L221.75,318.5625 L223.125,319.53125 L227.25,320.125 L227.5625,320.90625 L228.65625,318.6875 L231,319.5625 L233.5625,316.375 L235.03125,316.5625 L236.3125,314.4375 L240.125,314.875 L241.625,313.375 L243.53125,313.375 L245.03125,310.625 L247.34375,310.40625 L248.84375,307.875 L250.96875,308.5 L252.46875,308.5 L253.46875,306.78125 L252.46875,306.15625 L252.03125,303.625 L253.53125,303.625 L253.53125,302.5625 L250.96875,300.84375 L248.21875,299.59375 L248.625,297.03125 L247.78125,297.03125 L246.71875,298.53125 L243.3125,298.71875 L241.40625,298.53125 L241.40625,296.59375 L243.75,294.6875 L242.25,292.78125 L238.65625,293.84375 L239.28125,285.78125 L237.59375,284.0625 L235.875,279.8125 L233.34375,279.1875 L232.90625,276.84375 L235.25,272.1875 L235.1875,269.3125 L234.65625,269.9375 L231.53125,266.8125 L231.53125,266.8125 L231.53125,266.8125 L231.53125,266.8125 Z M231.53125,266.8125"></path>
                                    <path data-num="86"
                                          d="M180.75,221.6875 L177.03125,225.59375 L176.09375,227.21875 L176.40625,232.03125 L178.09375,231.8125 L178.3125,233.9375 L178.96875,237.34375 L180.03125,239.6875 L178.75,241.15625 L179.375,242.21875 L178.53125,243.71875 L178.53125,244.34375 L180.03125,246.0625 L180.03125,247.125 L179.375,248.8125 L177.25,252 L179.375,252.84375 L180.03125,254.34375 L179.15625,256.65625 L178.96875,257.71875 L177.6875,259.84375 L177.6875,261.34375 L178.53125,261.5625 L178.53125,266.03125 L180.03125,267.09375 L179.375,268.5625 L179.59375,269.84375 L181.28125,271.75 L182.15625,270.46875 L182.15625,269.40625 L183.84375,268.5625 L185.125,269.40625 L185.125,272.59375 L183.84375,274.09375 L182.78125,276.625 L184.25,278.96875 L187.25,279.8125 L186.59375,281.75 L183.8125,282.21875 L186.375,285.34375 L189.78125,285.125 L192.75,284.0625 L195.75,285.78125 L196.8125,284.9375 L196.59375,282.15625 L198.28125,280.875 L199.78125,283.4375 L201.03125,284.71875 L204.65625,283.21875 L206.15625,281.53125 L209.53125,281.53125 L211.28125,282.40625 L211.40625,278.71875 L210.0625,277.15625 L211.625,276 L214.15625,273.0625 L218.4375,272.875 L218.4375,270.53125 L220.59375,268.75 L225.875,267.78125 L226.25,264.84375 L224.125,263.6875 L222.9375,259.59375 L219.8125,259.1875 L217.875,257.25 L214.15625,254.3125 L214.9375,251.96875 L214.9375,248.25 L211.40625,244.75 L211.03125,242 L207.6875,238.5 L206.53125,233.8125 L205.15625,233.21875 L203.59375,231.0625 L202.03125,232.03125 L202.4375,234.1875 L197.34375,235.375 L191.5,235.375 L191.6875,233.03125 L191.6875,229.3125 L187,227.9375 L187,225.59375 L183.28125,224.8125 L182.5,221.6875 L180.75,221.6875 L180.75,221.6875 L180.75,221.6875 L180.75,221.6875 Z M180.75,221.6875"></path>
                                    <path data-num="16"
                                          d="M198.28125,280.875 L196.59375,282.15625 L196.8125,284.9375 L195.75,285.78125 L192.75,284.0625 L189.78125,285.125 L186.375,285.34375 L183.8125,282.21875 L183,282.375 L179.59375,284.0625 L177.03125,284.71875 L177.03125,286.1875 L175.5625,287.90625 L175.96875,288.96875 L174.0625,290.03125 L172.375,296.1875 L171.9375,300.21875 L170.46875,300.84375 L168.34375,300.65625 L167.90625,299.59375 L165.5625,299.59375 L164.3125,300.65625 L161.53125,300.65625 L159.1875,301.90625 L160.90625,302.5625 L161.125,307.03125 L161.96875,307.21875 L160.46875,308.9375 L162.1875,310 L164.5,312.125 L165.78125,314.25 L167.28125,315.71875 L166.84375,317.84375 L166,318.6875 L167.28125,319.96875 L167.28125,321.46875 L164.71875,323.59375 L165.78125,324.4375 L167.28125,324.875 L167.28125,325.28125 L165.15625,326.125 L165.34375,327.1875 L166.625,327.84375 L170.65625,327.1875 L172.375,329.09375 L173.65625,330.8125 L177.8125,333.625 L178.40625,332.625 L182.3125,333.03125 L184.25,331.25 L187.78125,327.75 L187.96875,320.90625 L197.15625,314.65625 L197.34375,309.96875 L200.09375,309.59375 L201.84375,306.46875 L202.9375,306.5 L203.59375,303.53125 L205.15625,303.34375 L206.125,300.59375 L208.09375,300 L210.4375,298.4375 L210.0625,293.5625 L211.8125,292.96875 L215.3125,292.1875 L215.125,290.4375 L214.53125,287.71875 L211.8125,287.5 L210.25,285.75 L211.21875,284 L211.28125,282.40625 L209.53125,281.53125 L206.15625,281.53125 L204.65625,283.21875 L201.03125,284.71875 L199.78125,283.4375 L198.28125,280.875 L198.28125,280.875 L198.28125,280.875 L198.28125,280.875 Z M198.28125,280.875"></path>
                                    <path data-num="79"
                                          d="M173.71875,225.40625 L168.4375,225.59375 L163.5625,226.5625 L158.28125,226.96875 L158.28125,229.6875 L155.5625,231.46875 L149.5,230.09375 L145.40625,231.84375 L147.34375,234.59375 L147.34375,236.9375 L152.03125,240.84375 L150.875,243.375 L154,246.875 L152.625,248.65625 L154.5625,251.5625 L155.15625,257.03125 L154,258.59375 L155.375,260.9375 L154,263.5 L154.1875,265.0625 L155.75,263.875 L157.6875,265.84375 L154.96875,267.59375 L154,268.75 L151.84375,269.34375 L149.3125,270.53125 L149.125,270.375 L149.21875,273.25 L151.34375,275.5625 L151.34375,276.84375 L154.53125,279.1875 L158.5625,279.40625 L161.3125,283 L165.78125,282.59375 L169.40625,285.125 L172.15625,286.40625 L172.59375,288.53125 L174.125,290 L175.96875,288.96875 L175.5625,287.90625 L177.03125,286.1875 L177.03125,284.71875 L179.59375,284.0625 L183,282.375 L186.59375,281.75 L187.25,279.8125 L184.25,278.96875 L182.78125,276.625 L183.84375,274.09375 L185.125,272.59375 L185.125,269.40625 L183.84375,268.5625 L182.15625,269.40625 L182.15625,270.46875 L181.28125,271.75 L179.59375,269.84375 L179.375,268.5625 L180.03125,267.09375 L178.53125,266.03125 L178.53125,261.5625 L177.6875,261.34375 L177.6875,259.84375 L178.96875,257.71875 L179.15625,256.65625 L180.03125,254.34375 L179.375,252.84375 L177.25,252 L179.375,248.8125 L180.03125,247.125 L180.03125,246.0625 L178.53125,244.34375 L178.53125,243.71875 L179.375,242.21875 L178.75,241.15625 L180.03125,239.6875 L178.96875,237.34375 L178.3125,233.9375 L178.09375,231.8125 L176.40625,232.03125 L176.09375,227.21875 L175.6875,227.9375 L174.3125,226.78125 L173.71875,225.40625 L173.71875,225.40625 L173.71875,225.40625 L173.71875,225.40625 Z M173.71875,225.40625"></path>
                                    <path data-num="22"
                                          d="M61.78125,119.21875 L60,120.59375 L55.53125,121.15625 L54.53125,122.53125 L51.40625,120.1875 L47.3125,122.9375 L48.875,125.0625 L46.15625,128.78125 L46.03125,128.71875 L44.90625,133.96875 L47.3125,134.125 L47.15625,136.21875 L48.9375,137.34375 L47.3125,138.96875 L46.1875,139.78125 L46.34375,141.6875 L48.78125,142.5 L46.5,143.15625 L46.5,145.5625 L47.96875,147.5 L48.28125,153.15625 L47.3125,154.125 L48.125,157.03125 L51.1875,157.84375 L51.5,159.4375 L53.4375,159.59375 L55.0625,158.46875 L56.03125,159.4375 L59.75,161.0625 L62.8125,159.4375 L63.59375,157.84375 L66.1875,157.65625 L69.09375,160.25 L71.84375,159.59375 L74.25,162.03125 L75.375,162.03125 L76.5,163.46875 L78.78125,163.46875 L79.5625,162.34375 L80.53125,164.4375 L82.96875,165.40625 L86.03125,163.46875 L86.03125,161.375 L88.28125,160.5625 L89.71875,160.5625 L91.5,163.8125 L95.375,164.125 L97.3125,161.6875 L99.40625,157.1875 L102.15625,156.21875 L103.59375,154.125 L105.0625,155.5625 L108.125,154.9375 L109.09375,146.0625 L110.0625,142.5 L109.09375,140.5625 L107.46875,139.9375 L106.375,134.03125 L105.125,135.4375 L101.40625,135.03125 L101.03125,137.1875 L98.6875,137.375 L98.5,134.65625 L96.53125,134.0625 L95.15625,135.625 L95.15625,131.71875 L92.8125,133.46875 L89.3125,132.875 L88.125,135.21875 L80.90625,139.125 L80.90625,141.09375 L79.34375,141.09375 L79.34375,137.5625 L75.25,135.625 L75.625,132.09375 L71.9375,129.375 L71.9375,126.0625 L69.1875,125.46875 L69.375,122.34375 L67.25,122.15625 L67.4375,120 L63.53125,120 L62.9375,121.9375 L61.78125,119.21875 L61.78125,119.21875 L61.78125,119.21875 L61.78125,119.21875 Z M61.78125,119.21875"></path>
                                    <path data-num="85"
                                          d="M130.53125,225.5625 L129.40625,227.65625 L126.1875,227.65625 L127.46875,228.96875 L126.5,232.1875 L123.59375,233.15625 L122.46875,232.34375 L122.96875,229.125 L122.15625,227.34375 L120.375,227.34375 L119.09375,228.78125 L119.71875,233.3125 L121.1875,235.40625 L119.71875,237.03125 L117,236.53125 L112.96875,235.5625 L111.84375,232.5 L109.25,232.1875 L105.875,230.71875 L105.0625,228.78125 L101.375,226.375 L95.5625,233.875 L95.375,238.5625 L101.40625,244.40625 L101.21875,246.15625 L102.96875,246.15625 L106.6875,257.3125 L110.59375,259.25 L114.5,263.15625 L119,263.15625 L120.75,267.0625 L125.0625,267.0625 L127,270 L131.3125,272.15625 L131.5,269.40625 L132.59375,270.4375 L138.5625,266.8125 L141.3125,266.625 L142.46875,269.75 L146.1875,268.1875 L149.3125,270.53125 L151.84375,269.34375 L154,268.75 L154.96875,267.59375 L157.6875,265.84375 L155.75,263.875 L154.1875,265.0625 L154,263.5 L155.375,260.9375 L154,258.59375 L155.15625,257.03125 L154.5625,251.5625 L152.625,248.65625 L154,246.875 L150.875,243.375 L152.03125,240.84375 L147.34375,236.9375 L147.34375,234.59375 L145.40625,231.84375 L145.78125,231.6875 L143.125,229.4375 L138.125,229.4375 L136.5,228.46875 L134.25,228.15625 L131.65625,225.71875 L130.53125,225.5625 L130.53125,225.5625 L130.53125,225.5625 L130.53125,225.5625 Z M130.53125,225.5625"></path>
                                    <path data-num="50"
                                          d="M111.5625,73.5 L110.78125,75.46875 L114.90625,78.78125 L114.90625,83.09375 L113.34375,85.03125 L114.3125,86 L114.90625,86.40625 L114.5,90.125 L115.875,93.25 L120.375,98.3125 L121.34375,102.8125 L122.3125,104.1875 L122.3125,111.21875 L124.65625,115.90625 L124.65625,121.375 L122.125,126.4375 L124.84375,133.46875 L129.15625,134.4375 L129.53125,136.40625 L127.40625,137.375 L123.71875,137.375 L124.3125,139.84375 L125.46875,143.5625 L128.8125,146.5 L130.375,146.875 L131.9375,144.75 L133.6875,144.53125 L135.8125,142 L137.78125,143.5625 L140.125,143.5625 L141.6875,144.34375 L141.6875,144.71875 L145,145.125 L146.96875,143.5625 L149.875,144.75 L149.9375,144.875 L153.28125,142.03125 L154.40625,138.3125 L154.09375,136.6875 L154.5625,134.78125 L152.625,132.84375 L147.625,129.59375 L143.9375,129.28125 L140.21875,124.59375 L143.28125,123.46875 L144.5625,121.0625 L142.96875,119.59375 L144.40625,118.3125 L145.84375,119.4375 L148.4375,117.84375 L150.0625,115.25 L150.6875,112.6875 L149.5625,110.40625 L150.21875,109.59375 L148.75,107.1875 L150.375,105.09375 L149.09375,103.46875 L147.46875,105.5625 L145.21875,104.28125 L141.5,100.5625 L141.34375,98.96875 L142.46875,97.84375 L142.125,95.6875 L140.28125,96.15625 L140.09375,91.46875 L135,85.4375 L136.5625,81.53125 L138.71875,81.53125 L136.78125,76.25 L128.375,75.84375 L123.875,78.96875 L118.8125,75.65625 L111.5625,73.5 L111.5625,73.5 L111.5625,73.5 L111.5625,73.5 Z M111.5625,73.5"></path>
                                    <path data-num="56"
                                          d="M48,156.59375 L44.75,158.15625 L42.46875,158.15625 L40.0625,160.09375 L40.21875,161.53125 L41.65625,165.25 L42.46875,168.15625 L47.46875,168.96875 L49.90625,170.90625 L50.875,169.75 L52.46875,171.875 L51.65625,172.84375 L51.5,175.71875 L50.0625,175.71875 L48.9375,177.5 L46.65625,177.5 L45.71875,181.34375 L47.90625,184.84375 L51.03125,185.625 L52.1875,183.875 L51.625,186 L54.34375,187.1875 L57.875,190.6875 L59.03125,192.84375 L58.65625,195.375 L58.25,197.9375 L60.59375,199.6875 L61.78125,198.3125 L60.59375,196.75 L60.59375,193.25 L62.9375,193.8125 L63.71875,191.46875 L64.3125,192.84375 L66.84375,195 L68.03125,193.03125 L66.84375,190.3125 L69,193.25 L71.71875,192.84375 L71.15625,191.46875 L73.6875,192.0625 L75.625,194.40625 L74.65625,195.96875 L72.125,195.1875 L69.1875,193.8125 L67.625,195.78125 L69.96875,196.5625 L71.71875,199.28125 L82.28125,198.3125 L85,198.90625 L83.65625,200.0625 L83.84375,201.84375 L84.21875,202.125 L85.0625,201.96875 L86.8125,200.21875 L87.96875,201.5625 L91.09375,201.5625 L94.8125,199.625 L100.28125,197.46875 L100.46875,192 L101.625,191.375 L99.5625,187.5 L101.34375,186.0625 L101.03125,185.09375 L99.90625,184.4375 L101.65625,183.625 L103.28125,181.6875 L103.125,179.75 L101.03125,179.75 L100.53125,177.84375 L102,175.90625 L100.375,173 L97.96875,171.53125 L95.21875,171.53125 L94.25,171.21875 L94.25,169.9375 L95.6875,168.625 L96.5,165.40625 L96.03125,163.3125 L95.375,164.125 L91.5,163.8125 L89.71875,160.5625 L88.28125,160.5625 L86.03125,161.375 L86.03125,163.46875 L82.96875,165.40625 L80.53125,164.4375 L79.5625,162.34375 L78.78125,163.46875 L76.5,163.46875 L75.375,162.03125 L74.25,162.03125 L71.84375,159.59375 L69.09375,160.25 L66.1875,157.65625 L63.59375,157.84375 L62.8125,159.4375 L59.75,161.0625 L56.03125,159.4375 L55.0625,158.46875 L53.4375,159.59375 L51.5,159.4375 L51.1875,157.84375 L48.125,157.03125 L48,156.59375 L48,156.59375 L48,156.59375 L48,156.59375 Z M48,156.59375"></path>
                                    <path data-num="29"
                                          d="M32.65625,125.0625 L30.53125,127.40625 L28.1875,126.4375 L23.875,126.84375 L23.09375,128.78125 L20.5625,129.375 L20.15625,127.21875 L15.6875,127.8125 L15.6875,129.1875 L12.5625,129.375 L11.1875,128.40625 L9.625,129.1875 L9.21875,131.53125 L3.96875,131.71875 L1.21875,135.03125 L3.5625,136.78125 L0.4375,139.34375 L1.40625,141.09375 L0.625,145.375 L3.75,145.78125 L4.9375,144.59375 L5.53125,145.375 L12.9375,144.40625 L17.8125,140.90625 L13.53125,145 L13.90625,146.9375 L17.8125,145.1875 L17.03125,147.9375 L21.34375,148.125 L21.15625,149.28125 L16.46875,149.09375 L12.75,148.125 L8.25,145.96875 L5.53125,149.09375 L9.03125,150.28125 L8.84375,155.53125 L9.8125,154.75 L11.96875,151.4375 L16.0625,153.78125 L18.03125,154.1875 L18.8125,157.3125 L17.625,159.4375 L15.09375,159.25 L12.75,159.25 L8.84375,159.84375 L2.1875,160.21875 L0.84375,162 L2.78125,163.15625 L4.9375,162.96875 L6.6875,164.53125 L9.21875,164.34375 L13.34375,169.03125 L14.3125,174.09375 L12.9375,176.84375 L17.03125,177.625 L21.53125,177.40625 L22.5,175.65625 L20.75,173.3125 L22.5,174.09375 L24.28125,173.90625 L27.40625,175.65625 L29.34375,175.28125 L29.34375,171.9375 L30.125,175.28125 L32.65625,179.375 L38.125,179.75 L38.34375,178.59375 L39.6875,180.53125 L43.03125,181.125 L45.5625,181.125 L45.71875,181.34375 L46.65625,177.5 L48.9375,177.5 L50.0625,175.71875 L51.5,175.71875 L51.65625,172.84375 L52.46875,171.875 L50.875,169.75 L49.90625,170.90625 L47.46875,168.96875 L42.46875,168.15625 L41.65625,165.25 L40.21875,161.53125 L40.0625,160.09375 L42.46875,158.15625 L44.75,158.15625 L48,156.59375 L47.3125,154.125 L48.28125,153.15625 L47.96875,147.5 L46.5,145.5625 L46.5,143.15625 L48.78125,142.5 L46.34375,141.6875 L46.1875,139.78125 L47.3125,138.96875 L48.9375,137.34375 L47.15625,136.21875 L47.3125,134.125 L44.90625,133.96875 L46.03125,128.71875 L42.8125,126.84375 L37.34375,127.03125 L37.34375,130.9375 L35.78125,130.9375 L35.40625,129.1875 L33.0625,129.5625 L32.65625,125.0625 L32.65625,125.0625 L32.65625,125.0625 L32.65625,125.0625 Z M32.65625,125.0625"></path>
                                    <path data-num="35"
                                          d="M108.25,131.90625 L106.375,134.03125 L107.46875,139.9375 L109.09375,140.5625 L110.0625,142.5 L109.09375,146.0625 L108.125,154.9375 L105.0625,155.5625 L103.59375,154.125 L102.15625,156.21875 L99.40625,157.1875 L97.3125,161.6875 L96.03125,163.3125 L96.5,165.40625 L95.6875,168.625 L94.25,169.9375 L94.25,171.21875 L95.21875,171.53125 L97.96875,171.53125 L100.375,173 L102,175.90625 L100.53125,177.84375 L101.03125,179.75 L103.125,179.75 L103.28125,181.6875 L101.65625,183.625 L99.90625,184.4375 L101.03125,185.09375 L101.34375,186.0625 L99.5625,187.5 L101.625,191.375 L105.5625,189.28125 L117.65625,188.6875 L118.4375,186.53125 L120.40625,184.59375 L124.6875,184 L124.875,181.84375 L127.8125,182.25 L129.5625,184.59375 L133.5,185.5625 L134.25,184 L135.25,180.46875 L137.78125,174.21875 L139.15625,173.4375 L142.46875,173.84375 L142.46875,168.5625 L141.09375,167.1875 L141.09375,161.53125 L140.5,159.59375 L140.5,156.46875 L142.46875,154.5 L142.46875,150.59375 L141.5,149.8125 L141.6875,144.34375 L140.125,143.5625 L137.78125,143.5625 L135.8125,142 L133.6875,144.53125 L131.9375,144.75 L130.375,146.875 L128.8125,146.5 L125.46875,143.5625 L124.3125,139.84375 L123.71875,137.375 L114.125,137.375 L110.59375,135.21875 L112.9375,132.09375 L108.25,131.90625 L108.25,131.90625 L108.25,131.90625 L108.25,131.90625 Z M108.25,131.90625"></path>
                                    <path data-num="44"
                                          d="M124.875,181.84375 L124.6875,184 L120.40625,184.59375 L118.4375,186.53125 L117.65625,188.6875 L105.5625,189.28125 L100.46875,192 L100.28125,197.46875 L94.8125,199.625 L91.09375,201.5625 L87.96875,201.5625 L86.8125,200.21875 L85.0625,201.96875 L84.21875,202.125 L85.21875,202.8125 L81.5,206.125 L82.28125,206.90625 L83.0625,208.46875 L81.09375,211.21875 L83.25,212.375 L86.96875,213.15625 L87.34375,211.59375 L89.5,214.34375 L93.03125,214.34375 L95.5625,211.59375 L98.875,211.59375 L95.375,213.34375 L95.5625,215.3125 L96.34375,217.0625 L94.1875,219.21875 L91.84375,219.21875 L92.25,222.15625 L96.53125,221.375 L101.625,226.0625 L101.375,226.375 L105.0625,228.78125 L105.875,230.71875 L109.25,232.1875 L111.84375,232.5 L112.96875,235.5625 L117,236.53125 L119.71875,237.03125 L121.1875,235.40625 L119.71875,233.3125 L119.09375,228.78125 L120.375,227.34375 L122.15625,227.34375 L122.96875,229.125 L122.46875,232.34375 L123.59375,233.15625 L126.5,232.1875 L127.46875,228.96875 L126.1875,227.65625 L129.40625,227.65625 L130.53125,225.5625 L131.65625,225.71875 L134.25,228.15625 L136.125,228.40625 L136.1875,226.375 L134.5625,224.28125 L133.125,224.28125 L132.625,224.4375 L131.65625,223.96875 L132.46875,223.15625 L132.46875,221.6875 L134.09375,221.21875 L135.0625,218.96875 L134.25,218.15625 L134.09375,215.40625 L132,215.40625 L129.90625,212.8125 L129.90625,210.90625 L132.15625,209.75 L136.1875,208.96875 L142.46875,209.125 L144.40625,207.8125 L143.75,203.78125 L140.84375,201.0625 L137.3125,201.53125 L136.34375,200.71875 L136.1875,197.84375 L138.75,195.5625 L136.8125,193.15625 L135.53125,189.75 L133.4375,188.46875 L133.4375,186.21875 L133.21875,185.5 L129.5625,184.59375 L127.8125,182.25 L124.875,181.84375 L124.875,181.84375 L124.875,181.84375 L124.875,181.84375 Z M124.875,181.84375"></path>
                                    <path data-num="49"
                                          d="M133.9375,184.6875 L133.5,185.5625 L133.21875,185.5 L133.4375,186.21875 L133.4375,188.46875 L135.53125,189.75 L136.8125,193.15625 L138.75,195.5625 L136.1875,197.84375 L136.34375,200.71875 L137.3125,201.53125 L140.84375,201.0625 L143.75,203.78125 L144.40625,207.8125 L142.46875,209.125 L136.1875,208.96875 L132.15625,209.75 L129.90625,210.90625 L129.90625,212.8125 L132,215.40625 L134.09375,215.40625 L134.25,218.15625 L135.0625,218.96875 L134.09375,221.21875 L132.46875,221.6875 L132.46875,223.15625 L131.65625,223.96875 L132.625,224.4375 L133.125,224.28125 L134.5625,224.28125 L136.1875,226.375 L136.125,228.40625 L136.5,228.46875 L138.125,229.4375 L143.125,229.4375 L145.78125,231.6875 L149.5,230.09375 L155.5625,231.46875 L158.28125,229.6875 L158.28125,226.96875 L163.5625,226.5625 L168.4375,225.59375 L173.71875,225.40625 L174.3125,226.78125 L175.6875,227.9375 L177.03125,225.59375 L180.75,221.6875 L182.25,221.6875 L184.46875,213.6875 L187.59375,209.96875 L187.375,205.6875 L189.34375,203.125 L189.34375,201.96875 L188.375,200.78125 L189,199.5 L186.34375,198.46875 L178.125,193.46875 L170.53125,191.21875 L167.625,191.0625 L167.625,189.125 L165.84375,187.65625 L163.9375,187.65625 L160.375,186.53125 L158.125,188.78125 L152.96875,188.96875 L150.6875,187.65625 L144.90625,185.90625 L143.59375,187.5 L140.375,185.40625 L137.46875,185.40625 L133.9375,184.6875 L133.9375,184.6875 L133.9375,184.6875 L133.9375,184.6875 Z M133.9375,184.6875"></path>
                                    <path data-num="72"
                                          d="M194.4375,147.875 L189.15625,148.0625 L183.875,152.9375 L181.125,152.78125 L177.46875,153.96875 L176.34375,155.90625 L175.84375,160.09375 L176.1875,162.65625 L173.28125,165.09375 L172.46875,166.6875 L173.125,168.15625 L172.3125,170.09375 L172.625,170.90625 L169.40625,171.21875 L168.9375,172.65625 L170.375,176.21875 L170.21875,177.1875 L168.9375,178.3125 L166.1875,178.46875 L165.84375,179.4375 L166.5,180.40625 L166.5,186.21875 L165.875,187.6875 L167.625,189.125 L167.625,191.0625 L170.53125,191.21875 L178.125,193.46875 L186.34375,198.46875 L189,199.5 L190.3125,196.875 L194.21875,199.625 L196.375,199.625 L195.1875,195.71875 L197.5625,197.28125 L198.90625,195.3125 L204.5625,193.75 L203.59375,191.40625 L204.96875,189.65625 L207.90625,188.5 L210.625,184.96875 L210.625,181.25 L212.59375,181.25 L213.375,178.53125 L213.5625,174.4375 L211.625,172.65625 L213.1875,169.9375 L215.5,167 L212.78125,165.0625 L210.25,164.65625 L207.5,160.5625 L206.71875,160.5625 L206.53125,162.5 L206.34375,161.15625 L202.25,161.15625 L200.28125,158.21875 L196.96875,157.03125 L196,150 L194.4375,147.875 L194.4375,147.875 L194.4375,147.875 L194.4375,147.875 Z M194.4375,147.875"></path>
                                    <path data-num="53"
                                          d="M174.5,142.40625 L172.5625,142.59375 L171.75,144.53125 L168.84375,145.71875 L163.5625,144.9375 L158.28125,148.0625 L156.34375,146.6875 L153.40625,148.65625 L151.25,147.09375 L149.875,144.75 L146.96875,143.5625 L145,145.125 L141.6875,144.71875 L141.5,149.8125 L142.46875,150.59375 L142.46875,154.5 L140.5,156.46875 L140.5,159.59375 L141.09375,161.53125 L141.09375,167.1875 L142.46875,168.5625 L142.46875,173.84375 L139.15625,173.4375 L137.78125,174.21875 L135.25,180.46875 L134.25,184 L133.9375,184.6875 L137.46875,185.40625 L140.375,185.40625 L143.59375,187.5 L144.90625,185.90625 L150.6875,187.65625 L152.96875,188.96875 L158.125,188.78125 L160.375,186.53125 L163.9375,187.65625 L165.84375,187.65625 L165.875,187.6875 L166.5,186.21875 L166.5,180.40625 L165.84375,179.4375 L166.1875,178.46875 L168.9375,178.3125 L170.21875,177.1875 L170.375,176.21875 L168.9375,172.65625 L169.40625,171.21875 L172.625,170.90625 L172.3125,170.09375 L173.125,168.15625 L172.46875,166.6875 L173.28125,165.09375 L176.1875,162.65625 L175.84375,160.09375 L176.34375,155.90625 L177.46875,153.96875 L181.125,152.78125 L180.5625,152.75 L179.5625,149.21875 L177.03125,148.25 L176.25,143.96875 L174.5,142.40625 L174.5,142.40625 L174.5,142.40625 L174.5,142.40625 Z M174.5,142.40625"></path>
                                    <path data-num="14"
                                          d="M194.65625,93.78125 L190.09375,94.59375 L182.65625,98.90625 L174.28125,102.21875 L167.625,98.5 L151.625,96.15625 L147.90625,94.21875 L142.125,95.6875 L142.46875,97.84375 L141.34375,98.96875 L141.5,100.5625 L145.21875,104.28125 L147.46875,105.5625 L149.09375,103.46875 L150.375,105.09375 L148.75,107.1875 L150.21875,109.59375 L149.5625,110.40625 L150.6875,112.6875 L150.0625,115.25 L148.4375,117.84375 L145.84375,119.4375 L144.40625,118.3125 L142.96875,119.59375 L144.5625,121.0625 L143.28125,123.46875 L140.21875,124.59375 L143.9375,129.28125 L147.625,129.59375 L150.46875,131.4375 L154.40625,130.25 L157.3125,126.875 L161.34375,128 L164.875,125.5625 L167,124.78125 L169.25,127.03125 L172.96875,126.375 L176.1875,128.15625 L180.21875,126.875 L183.90625,124.125 L186.34375,121.375 L187.96875,121.0625 L188.4375,123.15625 L189.71875,122.84375 L189.875,121.375 L193.59375,120.75 L194.875,121.53125 L198.84375,120.65625 L199.5,118.75 L199.3125,117 L197.34375,116.21875 L197.15625,114.84375 L198.90625,113.6875 L199.125,111.71875 L197.9375,107.03125 L195.59375,103.71875 L197.5625,102.5625 L197.5625,101.78125 L195.59375,101.1875 L194.65625,93.78125 L194.65625,93.78125 L194.65625,93.78125 L194.65625,93.78125 Z M194.65625,93.78125"></path>
                                    <path data-num="61"
                                          d="M198.84375,120.65625 L194.875,121.53125 L193.59375,120.75 L189.875,121.375 L189.71875,122.84375 L188.4375,123.15625 L187.96875,121.0625 L186.34375,121.375 L183.90625,124.125 L180.21875,126.875 L176.1875,128.15625 L172.96875,126.375 L169.25,127.03125 L167,124.78125 L164.875,125.5625 L161.34375,128 L157.3125,126.875 L154.40625,130.25 L150.46875,131.4375 L152.625,132.84375 L154.5625,134.78125 L154.09375,136.6875 L154.40625,138.3125 L153.28125,142.03125 L149.9375,144.875 L151.25,147.09375 L153.40625,148.65625 L156.34375,146.6875 L158.28125,148.0625 L163.5625,144.9375 L168.84375,145.71875 L171.75,144.53125 L172.5625,142.59375 L174.5,142.40625 L176.25,143.96875 L177.03125,148.25 L179.5625,149.21875 L180.5625,152.75 L183.875,152.9375 L189.15625,148.0625 L194.4375,147.875 L196,150 L196.96875,157.03125 L200.28125,158.21875 L202.25,161.15625 L206.34375,161.15625 L206.53125,162.5 L206.71875,160.5625 L207.5,160.5625 L210.25,164.65625 L212.375,165 L212.375,160.375 L211.03125,158.59375 L210.625,157.03125 L213.5625,155.28125 L216.5,154.6875 L218.4375,152.34375 L218.0625,145.125 L213.9375,141.625 L213.75,138.28125 L210.25,135.9375 L211.625,134 L210.8125,131.0625 L208.09375,130.09375 L206.125,128.125 L204.96875,125.40625 L199.5,125.21875 L197.9375,123.25 L198.84375,120.65625 L198.84375,120.65625 L198.84375,120.65625 L198.84375,120.65625 Z M198.84375,120.65625"></path>
                                    <path data-num="28"
                                          d="M239.15625,122.09375 L237.96875,123.0625 L237.96875,126.1875 L234.0625,128.125 L234.0625,131.0625 L232.90625,132.4375 L228,132.4375 L225.6875,131.46875 L218.625,135.15625 L215.90625,135.15625 L213.09375,137.84375 L213.75,138.28125 L213.9375,141.625 L218.0625,145.125 L218.4375,152.34375 L216.5,154.6875 L213.5625,155.28125 L210.625,157.03125 L211.03125,158.59375 L212.375,160.375 L212.375,165 L212.78125,165.0625 L215.5,167 L214.5,168.25 L216.4375,169.21875 L219.53125,168.65625 L221.34375,168.65625 L221.21875,169.5 L219.53125,170.46875 L220.65625,171.3125 L223.46875,171.3125 L224.4375,173.5625 L226.125,174.53125 L227.375,177.34375 L231.71875,178.46875 L234.40625,178.1875 L236.78125,175.9375 L238.90625,176.53125 L239.4375,175.375 L239.3125,174.125 L240.4375,173.28125 L242.25,174.40625 L243.375,173.5625 L243.375,172.03125 L244.90625,171.03125 L246.3125,171.59375 L247.5625,173 L249.8125,171.75 L252.1875,171.75 L253.875,169.90625 L254.875,166.28125 L256.40625,166 L256,162.34375 L257.8125,160.8125 L257.25,159.6875 L257.46875,159.3125 L256.9375,159.375 L256.53125,154.125 L256.125,153.53125 L255.75,151 L251.65625,150.21875 L249.875,148.0625 L249.3125,143.75 L246.96875,143.375 L246.5625,141.21875 L243.84375,139.28125 L242.46875,135.9375 L243.84375,133.59375 L242.46875,132.03125 L242.46875,130.09375 L243.25,127.9375 L241.6875,126.375 L241.09375,124.03125 L239.15625,122.09375 L239.15625,122.09375 L239.15625,122.09375 L239.15625,122.09375 Z M239.15625,122.09375"></path>
                                    <path data-num="89"
                                          d="M310.4375,153.34375 L308.6875,154.6875 L301.0625,154.3125 L297.5625,156.0625 L296.1875,159 L297.75,160.75 L295.40625,163.5 L293.625,165.625 L297.15625,168.96875 L298.125,172.09375 L300.6875,174.8125 L300.6875,178.34375 L295.59375,182.625 L297.34375,184.59375 L296.96875,187.5 L294.21875,189.46875 L290.3125,189.46875 L290.90625,191.625 L293.4375,195.125 L294.03125,198.25 L294.625,200.40625 L293.46875,200.75 L295.9375,201.3125 L297.78125,201.3125 L298.75,199.78125 L300,199.78125 L301.40625,201.03125 L301.125,202.59375 L302.40625,203.4375 L304.21875,203.4375 L306.75,205.125 L307.875,204.5625 L309,205.53125 L310.125,205.25 L312.0625,204 L313.90625,204.5625 L315.15625,204.28125 L315.15625,200.78125 L315.84375,200.90625 L316.28125,202.71875 L318.53125,204.125 L318.53125,206.25 L321.75,206.375 L325.96875,210.3125 L328.625,210.4375 L328.46875,209.1875 L329.59375,207.5 L330.59375,208.75 L329.75,210.15625 L330.15625,211.4375 L331.6875,210.4375 L333.53125,210.4375 L333.375,213.25 L335.0625,214.375 L336.34375,213.8125 L339.46875,211.6875 L339.28125,211.28125 L337.4375,210.15625 L337.3125,208.1875 L339.28125,207.21875 L340.125,206.09375 L339.5625,205.125 L339.5625,202.875 L341.09375,200.625 L343.34375,195.84375 L343.75,193.75 L345.15625,193.1875 L345.3125,192.78125 L344.59375,192.21875 L344.59375,190.53125 L346.84375,188.84375 L347.40625,186.03125 L346.4375,184.375 L344.875,184.375 L344.46875,183.9375 L344.46875,181.5625 L346.4375,180.15625 L346.28125,178.75 L346,177.34375 L345,179.5 L343.625,179.3125 L342.46875,177.15625 L338.5625,179.125 L330.75,178.71875 L329.78125,176.5625 L327.625,173.65625 L327.25,170.125 L324.125,166.40625 L322.15625,167.78125 L318.625,165.0625 L319.21875,159.78125 L314.15625,154.5 L311.8125,154.5 L310.4375,153.34375 L310.4375,153.34375 L310.4375,153.34375 L310.4375,153.34375 Z M310.4375,153.34375"></path>
                                    <path data-num="70"
                                          d="M415.5,171.5 L411.8125,172.09375 L411.21875,174.03125 L409.25,175.40625 L407.90625,173.84375 L406.9375,174.4375 L407.6875,175.59375 L405.75,176.78125 L406.34375,178.34375 L404.1875,179.125 L404.1875,181.65625 L401.4375,181.65625 L401.25,183.21875 L398.53125,183.8125 L398.71875,186.15625 L400.46875,186.34375 L399.5,187.5 L398.90625,191.40625 L397.15625,191.40625 L394.21875,192.59375 L391.09375,191.40625 L388.375,192.59375 L388.375,194.5625 L390.5,194.9375 L392.0625,198.0625 L392.28125,199.625 L389.75,202.5625 L388.5625,202.9375 L387.78125,203.90625 L389.9375,204.90625 L390.3125,208.03125 L392.0625,208.21875 L392.28125,212.125 L393.0625,212.90625 L393.15625,213.53125 L394.65625,213.9375 L396.34375,215.34375 L398.875,215.34375 L399.84375,214.375 L401.5625,214.4375 L403.34375,214.5 L407.28125,211.28125 L408.40625,211.28125 L409.65625,210.3125 L413.71875,210.4375 L416.8125,207.90625 L419.0625,207.5 L419.90625,205.40625 L421.71875,204.84375 L423.53125,201.75 L426.0625,199.78125 L428.71875,199.375 L430.6875,200.78125 L434.34375,200.34375 L434.34375,198.375 L435.8125,197.53125 L436.96875,195.9375 L439.21875,195.9375 L440.46875,194.625 L440.9375,191.5 L440.9375,189.5625 L440.09375,186.59375 L440.09375,184.09375 L441.625,182.96875 L443.4375,182.03125 L443.25,181.65625 L437,178.34375 L435.25,176.375 L433.5,175.21875 L431.9375,176 L431.71875,177.15625 L430.15625,178.125 L429.1875,178.125 L426.25,174.8125 L422.15625,174.8125 L420.40625,176.1875 L418.84375,176.375 L416.3125,174.4375 L416.5,172.28125 L415.5,171.5 L415.5,171.5 L415.5,171.5 L415.5,171.5 Z M415.5,171.5"></path>
                                    <path data-num="76"
                                          d="M233.9375,57.5 L232.65625,59.0625 L224.28125,65.5 L209.4375,69.21875 L199.65625,72.71875 L191.65625,77.03125 L186.96875,84.0625 L186,89.53125 L189.90625,92.46875 L195.5625,93.625 L194.65625,93.78125 L194.6875,93.9375 L199.0625,93.375 L201.3125,90.96875 L203,90.5625 L204.9375,93.9375 L207.625,93.65625 L208.75,95.59375 L213.5,95.3125 L218.28125,98.6875 L215.1875,99.65625 L217.4375,101.34375 L218.84375,101.34375 L220.09375,104.03125 L222.34375,104.03125 L223.03125,102.34375 L221.34375,101.21875 L226.125,99.8125 L231.15625,99.25 L232.4375,95.59375 L234.8125,93.5 L239.3125,93.375 L244.5,96.03125 L247.59375,96.375 L248.125,94.75 L249.5,92.1875 L250.28125,90.84375 L248.3125,90.84375 L248.3125,87.5 L247.15625,85.5625 L247.9375,81.65625 L248.71875,79.6875 L247.15625,79.6875 L247.9375,77.75 L249.875,75.40625 L247.9375,71.875 L247.34375,68.375 L238.75,59.96875 L237.78125,58.03125 L235.625,58.21875 L233.9375,57.5 L233.9375,57.5 L233.9375,57.5 L233.9375,57.5 Z M233.9375,57.5"></path>
                                    <path data-num="27"
                                          d="M203,90.5625 L201.3125,90.96875 L199.0625,93.375 L194.6875,93.9375 L195.59375,101.1875 L197.5625,101.78125 L197.5625,102.5625 L195.59375,103.71875 L197.9375,107.03125 L199.125,111.71875 L198.90625,113.6875 L197.15625,114.84375 L197.34375,116.21875 L199.3125,117 L199.5,118.75 L197.9375,123.25 L199.5,125.21875 L204.96875,125.40625 L206.125,128.125 L208.09375,130.09375 L210.8125,131.0625 L211.625,134 L210.25,135.9375 L213.09375,137.84375 L215.90625,135.15625 L218.625,135.15625 L225.6875,131.46875 L228,132.4375 L232.90625,132.4375 L234.0625,131.0625 L234.0625,128.125 L237.96875,126.1875 L237.96875,123.0625 L239.03125,122.1875 L238.9375,121.3125 L239.9375,120.3125 L238.1875,119.9375 L238.1875,118.375 L237.1875,116.8125 L237.96875,115.84375 L243.4375,114.28125 L244.8125,111.9375 L246,107.625 L247.4375,105.84375 L247.75,103.53125 L249.5,104.5 L250.875,104.125 L249.875,102.5625 L249.3125,98.0625 L247.5625,96.5 L247.59375,96.375 L244.5,96.03125 L239.3125,93.375 L234.8125,93.5 L232.4375,95.59375 L231.15625,99.25 L226.125,99.8125 L221.34375,101.21875 L223.03125,102.34375 L222.34375,104.03125 L220.09375,104.03125 L218.84375,101.34375 L217.4375,101.34375 L215.1875,99.65625 L218.28125,98.6875 L213.5,95.3125 L208.75,95.59375 L207.625,93.65625 L204.9375,93.9375 L203,90.5625 L203,90.5625 L203,90.5625 L203,90.5625 Z M203,90.5625"></path>
                                    <path data-num="37"
                                          d="M204.1875,192.875 L204.5625,193.75 L198.90625,195.3125 L197.5625,197.28125 L195.1875,195.71875 L196.375,199.625 L194.21875,199.625 L190.3125,196.875 L188.375,200.78125 L189.34375,201.96875 L189.34375,203.125 L187.375,205.6875 L187.59375,209.96875 L184.46875,213.6875 L182.25,221.6875 L182.5,221.6875 L183.28125,224.8125 L187,225.59375 L187,227.9375 L191.6875,229.3125 L191.6875,233.03125 L191.5,235.375 L197.34375,235.375 L202.4375,234.1875 L202.03125,232.03125 L203.59375,231.0625 L205.15625,233.21875 L206.53125,233.8125 L207.6875,238.5 L211.03125,242 L211.40625,244.75 L214.4375,247.75 L216.15625,247.59375 L218.28125,245.625 L219.8125,237.65625 L220.78125,234.84375 L221.5,231.34375 L224.59375,230.21875 L226.6875,230.625 L228.09375,231.90625 L229.625,229.375 L231.03125,228.09375 L231.03125,226.5625 L232.84375,226.4375 L233.28125,224.59375 L231.71875,222.5 L231.96875,221.625 L230.875,220.6875 L227.9375,216.34375 L224.15625,216.34375 L223.03125,214.65625 L223.03125,207.625 L221.5,203.5625 L221.21875,198.53125 L219.25,198.375 L217,196.6875 L216.4375,196.6875 L214.46875,198.09375 L213.21875,197.25 L212.9375,195.3125 L214.34375,194.59375 L214.46875,193.90625 L213.65625,193.1875 L204.1875,192.875 L204.1875,192.875 L204.1875,192.875 L204.1875,192.875 Z M204.1875,192.875"></path>
                                    <path data-num="45"
                                          d="M265.71875,156.46875 L263.1875,158.8125 L257.46875,159.3125 L257.25,159.6875 L257.8125,160.8125 L256,162.34375 L256.40625,166 L254.875,166.28125 L253.875,169.90625 L252.1875,171.75 L249.8125,171.75 L247.5625,173 L246.3125,171.59375 L244.90625,171.03125 L243.375,172.03125 L243.375,173.5625 L242.25,174.40625 L240.4375,173.28125 L239.3125,174.125 L239.4375,175.375 L238.90625,176.53125 L239.3125,176.65625 L240.96875,176.65625 L240.84375,177.78125 L239.71875,179.71875 L239.71875,180.71875 L240.84375,180.71875 L241.8125,181.84375 L242.09375,182.96875 L239.875,185.1875 L240.96875,187.875 L240.96875,189.125 L242.8125,190.375 L245.34375,190.65625 L247,192.0625 L247.4375,194.46875 L249.25,196.5625 L251.21875,196 L252.0625,194.1875 L255.15625,194.59375 L255.84375,195.3125 L257.8125,195.3125 L258.78125,194.1875 L265.9375,194.46875 L267.625,196.96875 L269.59375,197.8125 L271.28125,199.375 L273.375,199.09375 L273.9375,198.375 L275.1875,198.375 L276.75,200.34375 L279.96875,200.5 L280.8125,201.59375 L283.0625,204.6875 L284.03125,205.53125 L285.28125,205.40625 L285.4375,202.59375 L286,202.3125 L286.84375,202.4375 L288.25,204.28125 L289.21875,204.6875 L291.21875,203.875 L290.90625,203.53125 L290.71875,201.5625 L294.625,200.40625 L294.03125,198.25 L293.4375,195.125 L290.90625,191.625 L290.3125,189.46875 L294.21875,189.46875 L296.96875,187.5 L297.34375,184.59375 L295.59375,182.625 L300.6875,178.34375 L300.6875,174.8125 L298.125,172.09375 L297.15625,168.96875 L293.625,165.625 L288.75,168.375 L288.375,166.8125 L286.21875,166.625 L285.625,168.1875 L283.6875,168.5625 L278.40625,168.375 L276.25,169.75 L274.5,168.1875 L277.625,166.03125 L277.4375,162.71875 L275.09375,161.53125 L273.125,158.59375 L267.875,158.21875 L265.71875,156.46875 L265.71875,156.46875 L265.71875,156.46875 L265.71875,156.46875 Z M265.71875,156.46875"></path>
                                    <path data-num="36"
                                          d="M246.71875,217.4375 L245.46875,217.875 L242.9375,217.71875 L240,218.71875 L239.3125,220.25 L239.03125,219.6875 L235.65625,219.84375 L233.96875,221.25 L232,221.53125 L231.71875,222.5 L233.28125,224.59375 L232.84375,226.4375 L231.03125,226.5625 L231.03125,228.09375 L229.625,229.375 L228.09375,231.90625 L226.6875,230.625 L224.59375,230.21875 L221.5,231.34375 L220.78125,234.84375 L219.8125,237.65625 L218.28125,245.625 L216.15625,247.59375 L214.4375,247.75 L214.9375,248.25 L214.9375,251.96875 L214.15625,254.3125 L217.875,257.25 L219.8125,259.1875 L222.9375,259.59375 L224.125,263.6875 L226.25,264.84375 L225.875,267.78125 L224.3125,268.0625 L224.875,268.1875 L229.78125,268.5625 L231.53125,266.8125 L234.65625,269.9375 L238.5625,265.4375 L240.3125,266.625 L242.65625,266.40625 L243.4375,266.8125 L246.96875,267 L248.125,263.875 L257.90625,265.0625 L261.625,266.03125 L263.3125,265.84375 L263.40625,264.28125 L265.375,262.3125 L264.96875,260.625 L263.84375,258.40625 L264.25,257.5625 L264.40625,255.03125 L265.09375,254.1875 L265.25,253.625 L263.5625,252.09375 L263,250.125 L260.34375,248.71875 L260.34375,247.03125 L262.28125,245.90625 L262.28125,244.78125 L260.46875,243.25 L259.90625,242.28125 L261.3125,241.5625 L261.1875,240.3125 L263.40625,238.46875 L263.28125,237.65625 L261.46875,237.65625 L260.34375,236.375 L260.34375,235.6875 L261.3125,234 L261.3125,232.75 L259.0625,229.78125 L259.5,227.125 L258.21875,226.15625 L255.5625,226.28125 L253.46875,227.125 L250.65625,226.71875 L249.25,225.59375 L248.96875,224.75 L251.21875,222.90625 L251.375,220.6875 L248.40625,219 L246.71875,217.4375 L246.71875,217.4375 L246.71875,217.4375 L246.71875,217.4375 Z M246.71875,217.4375"></path>
                                    <path data-num="41"
                                          d="M214.5,168.25 L213.1875,169.9375 L211.625,172.65625 L213.5625,174.4375 L213.375,178.53125 L212.59375,181.25 L210.625,181.25 L210.625,184.96875 L207.90625,188.5 L204.96875,189.65625 L203.59375,191.40625 L204.1875,192.875 L213.65625,193.1875 L214.46875,193.90625 L214.34375,194.59375 L212.9375,195.3125 L213.21875,197.25 L214.46875,198.09375 L216.4375,196.6875 L217,196.6875 L219.25,198.375 L221.21875,198.53125 L221.5,203.5625 L223.03125,207.625 L223.03125,214.65625 L224.15625,216.34375 L227.9375,216.34375 L230.875,220.6875 L231.96875,221.625 L232,221.53125 L233.96875,221.25 L235.65625,219.84375 L239.03125,219.6875 L239.3125,220.25 L240,218.71875 L242.9375,217.71875 L245.46875,217.875 L246.71875,217.4375 L248.40625,219 L251.375,220.6875 L253.875,220.53125 L253.75,218 L254.875,216.75 L256,216.625 L256.96875,217.71875 L260.90625,217.3125 L263.40625,215.90625 L263.125,214.9375 L262.4375,214.09375 L262.5625,212.25 L264.40625,208.90625 L266.78125,207.90625 L266.78125,205.8125 L267.34375,204.5625 L265.8125,204 L264.8125,201.875 L262.28125,201.1875 L262.15625,200.34375 L264.6875,198.25 L267.53125,196.84375 L265.9375,194.46875 L258.78125,194.1875 L257.8125,195.3125 L255.84375,195.3125 L255.15625,194.59375 L252.0625,194.1875 L251.21875,196 L249.25,196.5625 L247.4375,194.46875 L247,192.0625 L245.34375,190.65625 L242.8125,190.375 L240.96875,189.125 L240.96875,187.875 L239.875,185.1875 L242.09375,182.96875 L241.8125,181.84375 L240.84375,180.71875 L239.71875,180.71875 L239.71875,179.71875 L240.84375,177.78125 L240.96875,176.65625 L239.3125,176.65625 L236.78125,175.9375 L234.40625,178.1875 L231.71875,178.46875 L227.375,177.34375 L226.125,174.53125 L224.4375,173.5625 L223.46875,171.3125 L220.65625,171.3125 L219.53125,170.46875 L221.21875,169.5 L221.34375,168.65625 L219.53125,168.65625 L216.4375,169.21875 L214.5,168.25 L214.5,168.25 L214.5,168.25 L214.5,168.25 Z M214.5,168.25"></path>
                                    <path data-num="18"
                                          d="M267.53125,196.84375 L264.6875,198.25 L262.15625,200.34375 L262.28125,201.1875 L264.8125,201.875 L265.8125,204 L267.34375,204.5625 L266.78125,205.8125 L266.78125,207.90625 L264.40625,208.90625 L262.5625,212.25 L262.4375,214.09375 L263.125,214.9375 L263.40625,215.90625 L260.90625,217.3125 L256.96875,217.71875 L256,216.625 L254.875,216.75 L253.75,218 L253.875,220.53125 L251.375,220.6875 L251.21875,222.90625 L248.96875,224.75 L249.25,225.59375 L250.65625,226.71875 L253.46875,227.125 L255.5625,226.28125 L258.21875,226.15625 L259.5,227.125 L259.0625,229.78125 L261.3125,232.75 L261.3125,234 L260.34375,235.6875 L260.34375,236.375 L261.46875,237.65625 L263.28125,237.65625 L263.40625,238.46875 L261.1875,240.3125 L261.3125,241.5625 L259.90625,242.28125 L260.46875,243.25 L262.28125,244.78125 L262.28125,245.90625 L260.34375,247.03125 L260.34375,248.71875 L263,250.125 L263.5625,252.09375 L265.25,253.625 L265.09375,254.1875 L264.40625,255.03125 L264.25,257.5625 L263.84375,258.40625 L264.96875,260.625 L265.375,262.3125 L263.40625,264.28125 L263.3125,265.84375 L267.90625,265.28125 L268.84375,263.28125 L271.375,260.375 L276.25,259.375 L278.8125,260.15625 L281.53125,258.03125 L281.34375,256.46875 L280.375,255.6875 L280.375,252.5625 L285.625,247.28125 L287.59375,249.4375 L289.34375,247.65625 L290.90625,247.46875 L293.625,243.96875 L298.125,244.34375 L298.1875,245.40625 L299.6875,240.625 L298.71875,238.875 L298.90625,236.34375 L299.5,231.25 L297.34375,229.125 L297.75,224.4375 L295.78125,220.3125 L295.59375,217.59375 L292.0625,214.84375 L291.5,212.5 L293.25,209.96875 L293.25,206.25 L291.21875,203.875 L289.21875,204.6875 L288.25,204.28125 L286.84375,202.4375 L286,202.3125 L285.4375,202.59375 L285.28125,205.40625 L284.03125,205.53125 L283.0625,204.6875 L280.8125,201.59375 L279.96875,200.5 L276.75,200.34375 L275.1875,198.375 L273.9375,198.375 L273.375,199.09375 L271.28125,199.375 L269.59375,197.8125 L267.625,196.96875 L267.53125,196.84375 L267.53125,196.84375 L267.53125,196.84375 L267.53125,196.84375 Z M267.53125,196.84375"></path>
                                    <path data-num="21"
                                          d="M355.375,173.25 L354.96875,175.78125 L352.4375,177.15625 L346,177.34375 L346.28125,178.75 L346.4375,180.15625 L344.46875,181.5625 L344.46875,183.9375 L344.875,184.375 L346.4375,184.375 L347.40625,186.03125 L346.84375,188.84375 L344.59375,190.53125 L344.59375,192.21875 L345.3125,192.78125 L345.15625,193.1875 L343.75,193.75 L343.34375,195.84375 L341.09375,200.625 L339.5625,202.875 L339.5625,205.125 L340.125,206.09375 L339.28125,207.21875 L337.3125,208.1875 L337.4375,210.15625 L339.28125,211.28125 L339.96875,212.8125 L339.6875,214.9375 L339.28125,216.46875 L340.25,218.15625 L343.0625,218.71875 L344.3125,220.6875 L344.3125,221.53125 L343.46875,221.8125 L343.46875,223.84375 L343.625,223.90625 L347.40625,227.8125 L351.34375,227.6875 L354.84375,230.34375 L357.375,232.1875 L357.5,234.5625 L360.15625,235.125 L362.40625,236.9375 L368.3125,234.84375 L372.375,233.5625 L374.1875,233.28125 L374.75,232.46875 L376.71875,232.59375 L378.25,233.5625 L380.5,233 L382.75,231.46875 L384.4375,231.65625 L384.46875,231.46875 L385.8125,230.6875 L385.625,229.6875 L385.25,228.53125 L386.21875,226.96875 L389.53125,225.40625 L389.53125,223.84375 L390.71875,222.28125 L391.875,220.71875 L391.5,219.34375 L392.0625,217.1875 L392.46875,214.0625 L393.25,214.0625 L393.0625,212.90625 L392.28125,212.125 L392.0625,208.21875 L390.3125,208.03125 L389.9375,204.90625 L387.78125,203.90625 L388.5625,202.9375 L389.75,202.5625 L392.28125,199.625 L392.0625,198.0625 L390.5,194.9375 L388.1875,194.53125 L387.375,196.5 L383.09375,197.46875 L382.6875,196.5 L379.5625,192.59375 L377.8125,193.5625 L375.46875,193.375 L374.6875,191.8125 L371.5625,192 L371.375,188.6875 L369.625,187.5 L372.15625,184.78125 L367.65625,178.71875 L364.15625,175 L361.03125,173.25 L355.375,173.25 L355.375,173.25 L355.375,173.25 L355.375,173.25 Z M355.375,173.25"></path>
                                    <path data-num="58"
                                          d="M298.75,199.78125 L297.78125,201.3125 L295.9375,201.3125 L293.46875,200.75 L290.71875,201.5625 L290.90625,203.53125 L293.25,206.25 L293.25,209.96875 L291.5,212.5 L292.0625,214.84375 L295.59375,217.59375 L295.78125,220.3125 L297.75,224.4375 L297.34375,229.125 L299.5,231.25 L298.90625,236.34375 L298.71875,238.875 L299.6875,240.625 L298.1875,245.40625 L298.3125,246.875 L301.65625,248.4375 L304,251 L306.125,249.8125 L308.09375,248.65625 L308.5,250.40625 L311.40625,250.40625 L312.1875,248.84375 L313.9375,249.625 L314.53125,252.15625 L316.09375,251.78125 L319.8125,246.6875 L321.75,248.0625 L322.0625,248.65625 L325.125,246.75 L326.375,246.90625 L327.34375,249.28125 L329.1875,249 L330.59375,247.59375 L332.40625,247.59375 L333.8125,245.78125 L335.21875,245.5 L335.5,244.5 L338.5625,244.65625 L338.71875,243.9375 L337.3125,242.6875 L337.3125,241.4375 L339.28125,240.3125 L339.28125,239.46875 L337.4375,238.34375 L337.15625,236.25 L337.3125,234.28125 L336.0625,233.4375 L337.15625,231.90625 L338.15625,231.34375 L338.84375,229.65625 L337.875,229.09375 L336.75,227.40625 L338.15625,225.4375 L340.53125,224.03125 L343.46875,224.03125 L343.46875,221.8125 L344.3125,221.53125 L344.3125,220.6875 L343.0625,218.71875 L340.25,218.15625 L339.28125,216.46875 L339.6875,214.9375 L339.96875,212.8125 L339.46875,211.6875 L336.34375,213.8125 L335.0625,214.375 L333.375,213.25 L333.53125,210.4375 L331.6875,210.4375 L330.15625,211.4375 L329.75,210.15625 L330.59375,208.75 L329.59375,207.5 L328.46875,209.1875 L328.625,210.4375 L325.96875,210.3125 L321.75,206.375 L318.53125,206.25 L318.53125,204.125 L316.28125,202.71875 L315.84375,200.90625 L315.15625,200.78125 L315.15625,204.28125 L313.90625,204.5625 L312.0625,204 L310.125,205.25 L309,205.53125 L307.875,204.5625 L306.75,205.125 L304.21875,203.4375 L302.40625,203.4375 L301.125,202.59375 L301.40625,201.03125 L300,199.78125 L298.75,199.78125 L298.75,199.78125 L298.75,199.78125 L298.75,199.78125 Z M298.75,199.78125"></path>
                                    <path data-num="71"
                                          d="M343.46875,223.84375 L343.46875,224.03125 L340.53125,224.03125 L338.15625,225.4375 L336.75,227.40625 L337.875,229.09375 L338.84375,229.65625 L338.15625,231.34375 L337.15625,231.90625 L336.0625,233.4375 L337.3125,234.28125 L337.15625,236.25 L337.4375,238.34375 L339.28125,239.46875 L339.28125,240.3125 L337.3125,241.4375 L337.3125,242.6875 L338.71875,243.9375 L338.5625,244.65625 L335.5,244.5 L335.21875,245.5 L333.8125,245.78125 L332.40625,247.59375 L330.59375,247.59375 L329.1875,249 L327.34375,249.28125 L326.375,246.90625 L325.125,246.75 L322.0625,248.65625 L325.6875,255.46875 L325.6875,258.40625 L326.65625,259.59375 L329.96875,259.59375 L331.125,261.15625 L334.25,261.15625 L335.625,263.09375 L335.4375,270.71875 L331.34375,273.84375 L331.25,274.0625 L331.53125,274.03125 L332.125,274.21875 L332.3125,277.34375 L335.25,277.9375 L335.625,279.3125 L337.1875,279.3125 L339.53125,277.9375 L345.78125,278.90625 L346.96875,280.09375 L348.53125,278.53125 L350.6875,278.53125 L351.84375,272.28125 L352.625,271.6875 L354.5625,271.6875 L356.9375,273.25 L358.6875,271.6875 L359.84375,273.25 L361.625,271.5 L363.75,271.3125 L364.75,274.4375 L365.5,278.34375 L366.875,278.53125 L368.0625,275.78125 L371.75,261.34375 L373.125,258.8125 L375.28125,258.59375 L377.4375,260.375 L379,259.96875 L380.9375,258.59375 L382.90625,259 L384.0625,261.53125 L385.1875,261.96875 L390.3125,261.34375 L392.28125,259.78125 L391.5,258.59375 L389.15625,257.8125 L388.9375,255.09375 L390.90625,253.71875 L391.6875,250.40625 L389.9375,247.28125 L388.75,245.71875 L389.34375,245.125 L389.34375,243.1875 L387.78125,242.1875 L387.375,240.625 L391.875,240.0625 L392.28125,238.5 L390.90625,238.5 L389.75,237.125 L387.59375,237.125 L385.8125,234.1875 L384.25,234 L384.4375,231.65625 L382.75,231.46875 L380.5,233 L378.25,233.5625 L376.71875,232.59375 L374.75,232.46875 L374.1875,233.28125 L372.375,233.5625 L368.3125,234.84375 L362.40625,236.9375 L360.15625,235.125 L357.5,234.5625 L357.375,232.1875 L354.84375,230.34375 L351.34375,227.6875 L347.40625,227.8125 L343.625,223.90625 L343.46875,223.84375 L343.46875,223.84375 L343.46875,223.84375 L343.46875,223.84375 Z M343.46875,223.84375"></path>
                                    <path data-num="39"
                                          d="M393.15625,213.53125 L393.25,214.0625 L392.46875,214.0625 L392.0625,217.1875 L391.5,219.34375 L391.875,220.71875 L390.71875,222.28125 L389.53125,223.84375 L389.53125,225.40625 L386.21875,226.96875 L385.25,228.53125 L385.625,229.6875 L385.8125,230.6875 L384.46875,231.46875 L384.25,234 L385.8125,234.1875 L387.59375,237.125 L389.75,237.125 L390.90625,238.5 L392.28125,238.5 L391.875,240.0625 L387.375,240.625 L387.78125,242.1875 L389.34375,243.1875 L389.34375,245.125 L388.75,245.71875 L389.9375,247.28125 L391.6875,250.40625 L390.90625,253.71875 L388.9375,255.09375 L389.15625,257.8125 L391.5,258.59375 L392.28125,259.78125 L390.3125,261.34375 L385.1875,261.96875 L387.59375,262.90625 L391.5,268.375 L394.03125,269.53125 L394.03125,272.28125 L396.96875,271.875 L400.6875,267.78125 L403.8125,269.34375 L403.8125,271.6875 L409.46875,271.6875 L417.59375,262.75 L417.25,262.5625 L417.625,258.46875 L420.5625,254.96875 L418.59375,254.1875 L418.78125,253 L416.40625,252.78125 L416.25,251.375 L417.78125,249.84375 L417.375,248.3125 L416.53125,246.34375 L420.03125,245.21875 L421.3125,243.40625 L421.59375,241.15625 L418.78125,238.46875 L416.8125,237.9375 L412.46875,236.53125 L412.46875,232.59375 L412.1875,229.65625 L408.6875,229.9375 L403.21875,228.09375 L404.0625,226.15625 L405.3125,223.1875 L405.75,221.25 L404.34375,219.40625 L401.8125,217.71875 L401.53125,215.625 L401.5625,214.4375 L399.84375,214.375 L398.875,215.34375 L396.34375,215.34375 L394.65625,213.9375 L393.15625,213.53125 L393.15625,213.53125 L393.15625,213.53125 L393.15625,213.53125 Z M393.15625,213.53125"></path>
                                    <path data-num="51"
                                          d="M329.375,95.3125 L327.03125,96.3125 L327.4375,98.25 L323.3125,98.25 L319.625,101 L319.625,106.25 L322.34375,108.03125 L323.125,109.78125 L318.625,110.15625 L318.0625,111.9375 L319.8125,113.09375 L319.03125,114.28125 L317.28125,115.0625 L317.65625,116.40625 L320.1875,116.40625 L321.1875,117.78125 L319.4375,118.96875 L317.875,123.0625 L314.9375,124.4375 L313.9375,126.5625 L312.96875,127.75 L313.1875,128.90625 L311.625,129.90625 L311.21875,132.625 L312.78125,133.59375 L313.5625,136.53125 L312.59375,138.28125 L313.1875,139.65625 L316.09375,139.46875 L316.09375,140.4375 L316.9375,140.25 L320.3125,143.8125 L325.0625,143.03125 L330.625,139.25 L333.96875,139.25 L337.34375,136.875 L341.3125,134.6875 L344.28125,134.90625 L344.6875,138.875 L348.25,144.21875 L352.21875,144.21875 L357.78125,143.03125 L361.75,144.40625 L365.90625,141.4375 L366.5,136.5 L371.09375,135.71875 L371,132.625 L367.28125,129.6875 L366.875,128.125 L368.25,125.78125 L367.0625,124.8125 L368.25,121.875 L370.40625,120.90625 L371.96875,116.03125 L368.84375,116.21875 L370.59375,114.28125 L369.21875,109.96875 L367.875,107.03125 L369.625,105.46875 L368.625,105.28125 L368.375,103.9375 C368.33461,103.94351 368.09375,103.96875 368.09375,103.96875 L366.3125,102.375 L364.3125,104.375 L363.71875,104.375 L362.9375,103.375 L358.1875,103.1875 L357.375,104.375 L356,104.375 L354.8125,101.78125 L352.21875,101.78125 L351.625,102.375 L349.0625,102.1875 L345.875,99.8125 L343.6875,99.21875 L342.90625,98.03125 L338.75,95.4375 L334,95.3125 L334.0625,97.09375 L332.6875,97.46875 L329.375,95.3125 L329.375,95.3125 L329.375,95.3125 L329.375,95.3125 Z M329.375,95.3125"></path>
                                    <path data-num="60"
                                          d="M249.21875,76.21875 L247.9375,77.75 L247.15625,79.6875 L248.71875,79.6875 L247.9375,81.65625 L247.15625,85.5625 L248.3125,87.5 L248.3125,90.84375 L250.28125,90.84375 L249.5,92.1875 L248.125,94.75 L247.5625,96.5 L249.3125,98.0625 L249.875,102.5625 L250.875,104.125 L249.5,104.5 L247.75,103.53125 L247.4375,105.84375 L247.5625,105.6875 L248.3125,107.4375 L249.5,109.375 L254.78125,109.78125 L258.5,109.375 L261.03125,107.4375 L264.15625,109.375 L265.71875,110.5625 L268.0625,109.96875 L270.1875,109 L274.3125,111.15625 L278.59375,113.6875 L279.96875,115.0625 L282.3125,113.5 L284.25,114.65625 L285.4375,115.625 L287.1875,115.4375 L288.375,113.875 L291.09375,115.4375 L294.4375,114.0625 L296.375,114.65625 L298.3125,113.09375 L299.5,112.5 L299.875,112.78125 L300.28125,110.125 L298.875,108.53125 L296.5,106.9375 L295.5,108.53125 L294.90625,108.71875 L294.71875,105.75 L296.5,105.34375 L296.09375,102.59375 L293.71875,102.1875 L294.90625,100.1875 L298.28125,99.40625 L299.46875,94.65625 L301.25,93.84375 L298.875,92.0625 L299.6875,90.28125 L300.0625,84.34375 L299.25,79.75 L295.125,80.15625 L292.34375,79.78125 L287.1875,81.15625 L282.8125,85.3125 L279.25,84.125 L275.6875,83.75 L272.90625,80.96875 L267.9375,79.5625 L261.21875,80.15625 L259.4375,78.78125 L255.84375,78.78125 L253.28125,79.78125 L252.09375,78.96875 L252.09375,76.8125 L251.6875,76.21875 L249.21875,76.21875 L249.21875,76.21875 L249.21875,76.21875 L249.21875,76.21875 Z M249.21875,76.21875"></path>
                                    <path data-num="62"
                                          d="M261.25,4.65625 L250.4375,6.71875 L241.84375,13.34375 L241.84375,39.71875 L241.78125,40.5 L244.8125,41.21875 L245.78125,43.375 L248.125,42.78125 L249.5,41.03125 L251.25,41.625 L254.96875,44.53125 L256.34375,43.96875 L257.3125,46.3125 L260.8125,47.875 L260.8125,49.8125 L263.375,50.78125 L265.90625,49.8125 L270.78125,49.21875 L271.96875,50.21875 L274.3125,49.21875 L275.46875,51.1875 L272.5625,53.125 L272.5625,55.875 L273.53125,56.84375 L274.3125,56.65625 L274.875,55.09375 L276.65625,53.90625 L278.40625,55.28125 L282.5,56.65625 L284.25,56.65625 L284.25,54.6875 L286.8125,56.46875 L287,58.03125 L285.8125,59.78125 L287.96875,58.59375 L289.75,57.8125 L290.5,59.1875 L290.5,60.5625 L293.4375,59 L298.125,59 L298.3125,59.1875 L299.46875,56.96875 L298.875,55.96875 L297.09375,55.59375 L295.125,55.59375 L293.9375,55.1875 L295.90625,54 L297.6875,54.1875 L299.46875,54 L299.6875,50.8125 L300.875,50.03125 L301.0625,48.25 L298.875,46.84375 L296.3125,46.65625 L295.71875,46.25 L297.3125,45.0625 L297.6875,43.875 L296.3125,42.90625 L294.3125,40.5 L294.53125,39.3125 L297.09375,38.125 L297.5,36.75 L295.71875,35.9375 L294.71875,33.375 L291.15625,32.96875 L287.59375,32 L287.1875,28.03125 L289.75,26.4375 L288.78125,24.4375 L286.78125,24.4375 L285.40625,26.625 L279.25,26.25 L274.28125,25.03125 L271.53125,22.0625 L271.53125,19.6875 L273.6875,18.6875 L271.90625,17.3125 L267.5625,17.125 L264.96875,10.5625 L261.25,4.65625 L261.25,4.65625 L261.25,4.65625 L261.25,4.65625 Z M261.25,4.65625"></path>
                                    <path data-num="59"
                                          d="M277.78125,0.0625 L271.53125,3 L261.78125,4.5625 L261.25,4.65625 L264.96875,10.5625 L267.5625,17.125 L271.90625,17.3125 L273.6875,18.6875 L271.53125,19.6875 L271.53125,22.0625 L274.28125,25.03125 L279.25,26.25 L285.40625,26.625 L286.78125,24.4375 L288.78125,24.4375 L289.75,26.4375 L287.1875,28.03125 L287.59375,32 L291.15625,32.96875 L294.71875,33.375 L295.71875,35.9375 L297.5,36.75 L297.09375,38.125 L294.53125,39.3125 L294.3125,40.5 L296.3125,42.90625 L297.6875,43.875 L297.3125,45.0625 L295.71875,46.25 L296.3125,46.65625 L298.875,46.84375 L301.0625,48.25 L300.875,50.03125 L299.6875,50.8125 L299.46875,54 L297.6875,54.1875 L295.90625,54 L293.9375,55.1875 L295.125,55.59375 L297.09375,55.59375 L298.875,55.96875 L299.46875,56.96875 L298.3125,59.1875 L299.875,60.75 L301.4375,61.15625 L303,60.15625 L305.15625,60.15625 L305.75,61.34375 L306.53125,61.15625 L308.875,59.78125 L311.21875,61.15625 L314.34375,59 L315.71875,59 L317.28125,60.375 L320.40625,58.21875 L321.75,58.40625 L322.9375,59.375 L327.25,59.78125 L327.625,61.53125 L329.78125,59.59375 L330.9375,59.59375 L331.71875,62.125 L335.4375,63.09375 L336.5,62.375 L336.1875,62.375 L336,60.4375 L339.90625,58.09375 L339.3125,54.375 L335.59375,53.40625 L336.5625,52.40625 L336.5625,49.6875 L339.5,47.53125 L338.71875,45.96875 L332.46875,41.09375 L321.53125,41.6875 L320.375,43.625 L319,43.625 L319.1875,36.78125 L316.0625,33.09375 L313.71875,33.46875 L312.34375,31.90625 L308.4375,33.65625 L307.09375,32.3125 L304.34375,31.90625 L303.5625,29.375 L303.375,21.5625 L301.625,20.78125 L301.40625,19.59375 L300.25,19.59375 L299.84375,17.25 L297.3125,17.46875 L292.4375,19.03125 L290.09375,21.9375 L287.75,21.9375 L286.1875,20 L285.59375,17.84375 L283.65625,15.6875 L280.90625,15.6875 L279.75,13.5625 L279.75,10.21875 L281.09375,8.09375 L280.3125,5.15625 L277.78125,0.0625 L277.78125,0.0625 L277.78125,0.0625 L277.78125,0.0625 Z M277.78125,0.0625"></path>
                                    <path data-num="02"
                                          d="M320.40625,58.21875 L317.28125,60.375 L315.71875,59 L314.34375,59 L311.21875,61.15625 L308.875,59.78125 L306.53125,61.15625 L305.75,61.34375 L305.15625,60.15625 L303,60.15625 L301.4375,61.15625 L301.375,61.15625 L301.84375,63.90625 L299.28125,66.6875 L299.28125,69.25 L297.5,71.25 L297.90625,73.625 L298.875,77.59375 L300.0625,84.34375 L299.6875,90.28125 L298.875,92.0625 L301.25,93.84375 L299.46875,94.65625 L298.28125,99.40625 L294.90625,100.1875 L293.71875,102.1875 L296.09375,102.59375 L296.5,105.34375 L294.71875,105.75 L294.90625,108.71875 L295.5,108.53125 L296.5,106.9375 L298.875,108.53125 L300.28125,110.125 L299.875,112.78125 L301.65625,114.0625 L302.25,118.375 L307.5,123.4375 L309.25,124.03125 L310.25,126.375 L313.53125,127.0625 L313.9375,126.5625 L314.9375,124.4375 L317.875,123.0625 L319.4375,118.96875 L321.1875,117.78125 L320.1875,116.40625 L317.65625,116.40625 L317.28125,115.0625 L319.03125,114.28125 L319.8125,113.09375 L318.0625,111.9375 L318.625,110.15625 L323.125,109.78125 L322.34375,108.03125 L319.625,106.25 L319.625,101 L323.3125,98.25 L327.4375,98.25 L327.03125,96.3125 L329.375,95.3125 L332.6875,97.46875 L334.0625,97.09375 L333.875,90.4375 L334.46875,88.09375 L335.25,85.375 L332.6875,84 L333.28125,82.4375 L337,81.65625 L337,79.125 L339.9375,77.5625 L340.71875,75.21875 L339.75,73.65625 L339.9375,70.71875 L341.6875,69.15625 L339.9375,65.84375 L340.46875,62.375 L336.5,62.375 L335.4375,63.09375 L331.71875,62.125 L330.9375,59.59375 L329.78125,59.59375 L327.625,61.53125 L327.25,59.78125 L322.9375,59.375 L321.75,58.40625 L320.40625,58.21875 L320.40625,58.21875 L320.40625,58.21875 L320.40625,58.21875 Z M320.40625,58.21875"></path>
                                    <path data-num="80"
                                          d="M241.78125,40.5 L241.25,46.9375 L245.5625,50.84375 L245.5625,52.8125 L240.28125,49.6875 L233.9375,57.5 L235.625,58.21875 L237.78125,58.03125 L238.75,59.96875 L247.34375,68.375 L247.9375,71.875 L249.875,75.40625 L249.21875,76.21875 L251.6875,76.21875 L252.09375,76.8125 L252.09375,78.96875 L253.28125,79.78125 L255.84375,78.78125 L259.4375,78.78125 L261.21875,80.15625 L267.9375,79.5625 L272.90625,80.96875 L275.6875,83.75 L279.25,84.125 L282.8125,85.3125 L287.1875,81.15625 L292.34375,79.78125 L295.125,80.15625 L299.25,79.75 L298.875,77.59375 L297.90625,73.625 L297.5,71.25 L299.28125,69.25 L299.28125,66.6875 L301.84375,63.90625 L301.375,61.15625 L299.875,60.75 L298.125,59 L293.4375,59 L290.5,60.5625 L290.5,59.1875 L289.75,57.8125 L287.96875,58.59375 L285.8125,59.78125 L287,58.03125 L286.8125,56.46875 L284.25,54.6875 L284.25,56.65625 L282.5,56.65625 L278.40625,55.28125 L276.65625,53.90625 L274.875,55.09375 L274.3125,56.65625 L273.53125,56.84375 L272.5625,55.875 L272.5625,53.125 L275.46875,51.1875 L274.3125,49.21875 L271.96875,50.21875 L270.78125,49.21875 L265.90625,49.8125 L263.375,50.78125 L260.8125,49.8125 L260.8125,47.875 L257.3125,46.3125 L256.34375,43.96875 L254.96875,44.53125 L251.25,41.625 L249.5,41.03125 L248.125,42.78125 L245.78125,43.375 L244.8125,41.21875 L241.78125,40.5 L241.78125,40.5 L241.78125,40.5 L241.78125,40.5 Z M241.78125,40.5"></path>
                                    <path data-num="08"
                                          d="M359.625,51.84375 L357.65625,54.75 L355.90625,56.53125 L355.90625,58.28125 L355.90625,60.625 L353.5625,62.1875 L349.28125,63.5625 L346.9375,64.53125 L344.1875,62.375 L340.46875,62.375 L339.9375,65.84375 L341.6875,69.15625 L339.9375,70.71875 L339.75,73.65625 L340.71875,75.21875 L339.9375,77.5625 L337,79.125 L337,81.65625 L333.28125,82.4375 L332.6875,84 L335.25,85.375 L334.46875,88.09375 L333.875,90.4375 L334,95.3125 L338.75,95.4375 L342.90625,98.03125 L343.6875,99.21875 L345.875,99.8125 L349.0625,102.1875 L351.625,102.375 L352.21875,101.78125 L354.8125,101.78125 L356,104.375 L357.375,104.375 L358.1875,103.1875 L362.9375,103.375 L363.71875,104.375 L364.3125,104.375 L366.3125,102.375 L368.09375,103.96875 C368.09375,103.96875 368.33461,103.94351 368.375,103.9375 L368.25,103.125 L370.59375,101.96875 L371.75,100.78125 L371,98.84375 L370.78125,97.46875 L372.9375,95.71875 L373.71875,91.8125 L371.375,88.875 L372.15625,87.5 L374.125,83.8125 L374.6875,84.59375 L377.625,84.59375 L379,85.9375 L380.75,84.78125 L382.125,82.53125 L380.71875,82.3125 L379.9375,78.40625 L378.375,77.21875 L372.90625,76.625 L371.9375,74.09375 L370.15625,72.9375 L363.90625,72.15625 L363.53125,67.65625 L364.3125,66.875 L364.3125,65.125 L361.1875,63.15625 L361.78125,61 L362.5625,59.0625 L361.1875,57.875 L363.34375,55.9375 L363.34375,52.40625 L362.5625,51.84375 L359.625,51.84375 L359.625,51.84375 L359.625,51.84375 L359.625,51.84375 Z M359.625,51.84375"></path>
                                    <path data-num="10"
                                          d="M341.3125,134.6875 L337.34375,136.875 L333.96875,139.25 L330.625,139.25 L325.0625,143.03125 L320.3125,143.8125 L316.9375,140.25 L316.09375,140.4375 L316.09375,141.03125 L313.375,142.1875 L313.1875,144.53125 L311.8125,146.3125 L311.03125,150.21875 L310.59375,153.5 L311.8125,154.5 L314.15625,154.5 L319.21875,159.78125 L318.625,165.0625 L322.15625,167.78125 L324.125,166.40625 L327.25,170.125 L327.625,173.65625 L329.78125,176.5625 L330.75,178.71875 L338.5625,179.125 L342.46875,177.15625 L343.625,179.3125 L345,179.5 L346,177.34375 L352.4375,177.15625 L354.96875,175.78125 L355.375,173.25 L361.03125,173.25 L361.8125,173.6875 L361.15625,171.1875 L359.5625,170.1875 L361.75,168.21875 L365.125,168 L366.3125,166.21875 L366.09375,159.09375 L365.3125,154.9375 L361.9375,153.75 L358.375,148.78125 L358.5625,145.8125 L359.59375,143.65625 L357.78125,143.03125 L352.21875,144.21875 L348.25,144.21875 L344.6875,138.875 L344.28125,134.90625 L341.3125,134.6875 L341.3125,134.6875 L341.3125,134.6875 L341.3125,134.6875 Z M341.3125,134.6875"></path>
                                    <path data-num="52"
                                          d="M371.09375,135.71875 L366.5,136.5 L365.90625,141.4375 L361.75,144.40625 L359.59375,143.65625 L358.5625,145.8125 L358.375,148.78125 L361.9375,153.75 L365.3125,154.9375 L366.09375,159.09375 L366.3125,166.21875 L365.125,168 L361.75,168.21875 L359.5625,170.1875 L361.15625,171.1875 L361.8125,173.6875 L364.15625,175 L367.65625,178.71875 L372.15625,184.78125 L369.625,187.5 L371.375,188.6875 L371.5625,192 L374.6875,191.8125 L375.46875,193.375 L377.8125,193.5625 L379.5625,192.59375 L382.6875,196.5 L383.09375,197.46875 L387.375,196.5 L388.1875,194.53125 L388.375,194.5625 L388.375,192.59375 L391.09375,191.40625 L394.21875,192.59375 L397.15625,191.40625 L398.90625,191.40625 L399.5,187.5 L400.46875,186.34375 L398.71875,186.15625 L398.53125,183.8125 L401.25,183.21875 L401.4375,181.65625 L404.1875,181.65625 L404.1875,179.125 L406.34375,178.34375 L405.75,176.78125 L406.34375,176.40625 L404.5625,175 L402.4375,175.78125 L402.4375,171.6875 L396.96875,168.96875 L398.125,163.6875 L399.875,162.5 L399.3125,160.75 L396.75,160.375 L396.1875,157.8125 L393.84375,157.8125 L391.09375,154.125 L387.96875,153.90625 L386.625,151.96875 L388.375,150.21875 L384.25,145.71875 L382.5,145.125 L377.8125,142.78125 L375.28125,140.0625 L371.1875,139.46875 L371.09375,135.71875 L371.09375,135.71875 L371.09375,135.71875 L371.09375,135.71875 Z M371.09375,135.71875"></path>
                                    <path data-num="67"
                                          d="M472.71875,108.28125 L469,109.3125 L467.28125,112.3125 L467.28125,115.25 L465.71875,116.625 L464.34375,116.625 L461.8125,114.84375 L459.84375,116.21875 L457.5,116.21875 L455.5625,114.28125 L451.84375,113.6875 L449.6875,112.71875 L448.90625,109.78125 L447.15625,111.71875 L446.1875,116.21875 L443.625,117 L443.625,119.53125 L446.1875,120.71875 L448.125,122.09375 L447.34375,123.84375 L449.125,125 L452.25,122.65625 L457.6875,125.78125 L455.375,130.09375 L455.5625,131.46875 L457.125,133.03125 L455.9375,137.125 L452.03125,141.03125 L449.875,140.84375 L451.25,142.1875 L450.46875,145.71875 L451.25,151 L454.96875,151.96875 L454.65625,152.6875 L457.59375,152.53125 L459.3125,154.625 L460.84375,156.53125 L464.6875,156.34375 L466.40625,161.3125 L469.40625,162.625 L469.375,162 L474.46875,152.03125 L473.875,146.375 L476.21875,138.75 L476.8125,132.09375 L481.875,128.40625 L481.875,126.0625 L483.84375,123.5 L485.40625,123.5 L487.15625,121.75 L486.78125,118.4375 L488.53125,113.75 L491.25,113.15625 L488.53125,111 L483.65625,110.4375 L479.34375,108.28125 L476.40625,110.03125 L474.84375,108.28125 L472.71875,108.28125 L472.71875,108.28125 L472.71875,108.28125 L472.71875,108.28125 Z M472.71875,108.28125"></path>
                                    <path data-num="54"
                                          d="M393.59375,84.4375 L391.25,86.59375 L387.9375,86.78125 L386.78125,87.96875 L386.53125,87.96875 L386.40625,90.3125 L387.5625,92.21875 L387.15625,93.375 L386.78125,94.71875 L386.96875,95.46875 L387.9375,94.71875 L388.875,93 L390.8125,92.8125 L394.0625,91.84375 L395.78125,93.1875 L396.53125,94.71875 L397.125,96.4375 L397.125,98.15625 L398.0625,98.9375 L398.0625,100.25 L397.125,101.40625 L396.9375,103.90625 L397.6875,105.0625 L397.875,106.59375 L398.0625,109.0625 L399.21875,110.03125 L400.9375,110.78125 L400.1875,112.3125 L402.28125,114.25 L400.375,116.34375 L400.75,117.6875 L402.65625,118.625 L402.65625,119.59375 L400.375,119.59375 L399.40625,120.9375 L399.59375,121.90625 L401.125,123.4375 L399.8125,127.0625 L398.28125,130.5 L399.03125,132.625 L399.03125,136.0625 L399.8125,137.78125 L400.9375,137.78125 L401.53125,138.75 L399.8125,138.75 L398.28125,139.5 L398.28125,140.65625 L400.1875,142.375 L400.1875,145.0625 L402.09375,144.46875 L404.96875,144.65625 L405.15625,147.71875 L406.3125,148.125 L404.96875,149.0625 L404.78125,150.03125 L406.875,150.40625 L408.21875,152.125 L414.53125,151.75 L415.875,149.25 L418.75,149.25 L419.90625,148.3125 L421.8125,149.46875 L423.53125,148.875 L426.03125,149.0625 L428.125,148.3125 L430.21875,146.78125 L431.375,147.9375 L431.5625,145.25 L433.09375,144.65625 L433.875,147.15625 L436.15625,147.34375 L438.46875,147.9375 L439.40625,148.125 L442.6875,146.59375 L444.40625,145.4375 L445.9375,143.53125 L449,142.375 L451,141.9375 L449.875,140.84375 L452.03125,141.03125 L452.4375,140.625 L450.125,139.875 L446.875,137.59375 L444,135.46875 L440.5625,135.46875 L436.9375,133.375 L434.0625,133.1875 L434.0625,132.40625 L429.65625,129.75 L424.6875,127.625 L422.1875,127.625 L421.25,124.96875 L417.40625,120.15625 L413.59375,120.15625 L412.0625,118.0625 L409,118.0625 L409.1875,115 L405.15625,112.5 L405.34375,110.03125 L407.46875,110.03125 L407.46875,107.90625 L408.21875,106.375 L406.5,104.65625 L408.03125,102 L406.875,98.9375 L405.9375,98.15625 L403.4375,92.8125 L404.40625,91.28125 C404.40625,91.28125 404.32712,90.02401 404.25,88.34375 L401.625,88.34375 L398.09375,84.4375 L393.59375,84.4375 L393.59375,84.4375 L393.59375,84.4375 L393.59375,84.4375 Z M393.59375,84.4375"></path>
                                    <path data-num="77"
                                          d="M299.5,112.5 L298.3125,113.09375 L296.375,114.65625 L294.4375,114.0625 L291.09375,115.4375 L288.375,113.875 L287.1875,115.4375 L285.4375,115.625 L284.25,114.65625 L282.3125,113.5 L279.96875,115.0625 L279.875,114.96875 L279.03125,120.375 L280.1875,127.25 L280.1875,131.84375 L278.65625,135.6875 L279.03125,138.34375 L277.3125,139.6875 L278.25,144.875 L277.5,146 L276.9375,151.1875 L278.25,152.90625 L273.875,155.78125 L273.875,159.71875 L275.09375,161.53125 L277.4375,162.71875 L277.625,166.03125 L274.5,168.1875 L276.25,169.75 L278.40625,168.375 L283.6875,168.5625 L285.625,168.1875 L286.21875,166.625 L288.375,166.8125 L288.75,168.375 L293.625,165.625 L295.40625,163.5 L297.75,160.75 L296.1875,159 L297.5625,156.0625 L301.0625,154.3125 L308.6875,154.6875 L310.4375,153.34375 L310.59375,153.5 L311.03125,150.21875 L311.8125,146.3125 L313.1875,144.53125 L313.375,142.1875 L316.09375,141.03125 L316.09375,139.46875 L313.1875,139.65625 L312.59375,138.28125 L313.5625,136.53125 L312.78125,133.59375 L311.21875,132.625 L311.625,129.90625 L313.1875,128.90625 L312.96875,127.75 L313.53125,127.0625 L310.25,126.375 L309.25,124.03125 L307.5,123.4375 L302.25,118.375 L301.65625,114.0625 L299.5,112.5 L299.5,112.5 L299.5,112.5 L299.5,112.5 Z M299.5,112.5"></path>
                                    <path data-num="68"
                                          d="M457.59375,152.53125 L454.65625,152.6875 L452.8125,156.84375 L450.46875,161.53125 L451.0625,164.46875 L449.125,168.96875 L445.78125,171.875 L445.59375,179.5 L443.15625,181.59375 L443.25,181.65625 L444.03125,183.21875 L447.15625,183.40625 L450.6875,186.15625 L451.25,187.5 L451.0625,189.84375 L450.09375,191.625 L450.46875,193.96875 L453.21875,193.5625 L453.8125,195.71875 L454.78125,199.875 L457.09375,199.5 L456.6875,201.625 L458.0625,202.8125 L465.28125,202.625 L469,199.6875 L469.1875,195.375 L471.15625,192.84375 L468.59375,189.90625 L467.25,186.78125 L468.8125,184.65625 L468.8125,179.75 L469.78125,177.40625 L469.78125,173.5 L471.53125,170.96875 L469.59375,168.25 L469.40625,162.625 L466.40625,161.3125 L464.6875,156.34375 L460.84375,156.53125 L459.3125,154.625 L457.59375,152.53125 L457.59375,152.53125 L457.59375,152.53125 L457.59375,152.53125 Z M457.59375,152.53125"></path>
                                    <path data-num="55"
                                          d="M382.125,82.53125 L380.75,84.78125 L379,85.9375 L377.625,84.59375 L374.6875,84.59375 L374.125,83.8125 L372.15625,87.5 L371.375,88.875 L373.71875,91.8125 L372.9375,95.71875 L370.78125,97.46875 L371,98.84375 L371.75,100.78125 L370.59375,101.96875 L368.25,103.125 L368.625,105.28125 L369.625,105.46875 L367.875,107.03125 L369.21875,109.96875 L370.59375,114.28125 L368.84375,116.21875 L371.96875,116.03125 L370.40625,120.90625 L368.25,121.875 L367.0625,124.8125 L368.25,125.78125 L366.875,128.125 L367.28125,129.6875 L371,132.625 L371.1875,139.46875 L375.28125,140.0625 L377.8125,142.78125 L382.5,145.125 L384.25,145.71875 L388.375,150.21875 L387.9375,150.65625 L391.375,150.21875 L391.375,148.5 L395.21875,147.71875 L395.21875,146.40625 L396.15625,146.40625 L396.15625,147.53125 L399.21875,146.59375 L400.40625,145 L400.1875,145.0625 L400.1875,142.375 L398.28125,140.65625 L398.28125,139.5 L399.8125,138.75 L401.53125,138.75 L400.9375,137.78125 L399.8125,137.78125 L399.03125,136.0625 L399.03125,132.625 L398.28125,130.5 L399.8125,127.0625 L401.125,123.4375 L399.59375,121.90625 L399.40625,120.9375 L400.375,119.59375 L402.65625,119.59375 L402.65625,118.625 L400.75,117.6875 L400.375,116.34375 L402.28125,114.25 L400.1875,112.3125 L400.9375,110.78125 L399.21875,110.03125 L398.0625,109.0625 L397.875,106.59375 L397.6875,105.0625 L396.9375,103.90625 L397.125,101.40625 L398.0625,100.25 L398.0625,98.9375 L397.125,98.15625 L397.125,96.4375 L396.53125,94.71875 L395.78125,93.1875 L394.0625,91.84375 L390.8125,92.8125 L388.875,93 L387.9375,94.71875 L386.96875,95.46875 L386.78125,94.71875 L387.15625,93.375 L387.5625,92.21875 L386.40625,90.3125 L386.53125,87.96875 L385.59375,87.96875 L384.8125,84.25 L383.25,82.6875 L382.125,82.53125 L382.125,82.53125 L382.125,82.53125 L382.125,82.53125 Z M382.125,82.53125"></path>
                                    <path data-num="57"
                                          d="M415.09375,86.40625 L412.15625,86.59375 L409.8125,88.5625 L409.21875,89.53125 L405.90625,89.53125 L404.75,88.34375 L404.25,88.34375 C404.32712,90.02401 404.40625,91.28125 404.40625,91.28125 L403.4375,92.8125 L405.9375,98.15625 L406.875,98.9375 L408.03125,102 L406.5,104.65625 L408.21875,106.375 L407.46875,107.90625 L407.46875,110.03125 L405.34375,110.03125 L405.15625,112.5 L409.1875,115 L409,118.0625 L412.0625,118.0625 L413.59375,120.15625 L417.40625,120.15625 L421.25,124.96875 L422.1875,127.625 L424.6875,127.625 L429.65625,129.75 L434.0625,132.40625 L434.0625,133.1875 L436.9375,133.375 L440.5625,135.46875 L444,135.46875 L446.875,137.59375 L450.125,139.875 L452.4375,140.625 L455.9375,137.125 L457.125,133.03125 L455.5625,131.46875 L455.375,130.09375 L457.6875,125.78125 L452.25,122.65625 L449.125,125 L447.34375,123.84375 L448.125,122.09375 L446.1875,120.71875 L443.625,119.53125 L443.625,117 L446.1875,116.21875 L447.15625,111.71875 L448.90625,109.78125 L449.6875,112.71875 L451.84375,113.6875 L455.5625,114.28125 L457.5,116.21875 L459.84375,116.21875 L461.8125,114.84375 L464.34375,116.625 L465.71875,116.625 L467.28125,115.25 L467.28125,112.3125 L469,109.3125 L468.59375,109.4375 L467.25,107.5 L463.34375,105.15625 L461.96875,103 L457.28125,103.40625 L454.53125,105.9375 L447.90625,106.125 L445.9375,104.75 C445.80551,104.51057 444.84437,102.81438 444,102.34375 C443.96729,102.32639 443.91355,102.29802 443.875,102.28125 C443.84646,102.26959 443.80512,102.25698 443.78125,102.25 C443.77058,102.24458 443.73002,102.22452 443.71875,102.21875 C443.71591,102.21876 443.69093,102.21861 443.6875,102.21875 C443.66248,102.21745 443.61378,102.21875 443.59375,102.21875 C442.67823,102.21876 440.90565,101.19125 440.6875,101.0625 L437.9375,102.21875 L437.75,104.5625 L434.4375,104.96875 L432.46875,101.25 L431.3125,100.84375 L431.3125,98.125 L428.5625,96.9375 L428.375,92.25 L426.40625,90.3125 L422.3125,88.34375 L420.375,88.34375 L419.78125,88.75 L417.8125,88.75 L415.09375,86.40625 L415.09375,86.40625 L415.09375,86.40625 L415.09375,86.40625 Z M415.09375,86.40625"></path>
                                    <path data-num="88"
                                          d="M451,141.9375 L449,142.375 L445.9375,143.53125 L444.40625,145.4375 L442.6875,146.59375 L439.40625,148.125 L438.46875,147.9375 L436.15625,147.34375 L433.875,147.15625 L433.09375,144.65625 L431.5625,145.25 L431.375,147.9375 L430.21875,146.78125 L428.125,148.3125 L426.03125,149.0625 L423.53125,148.875 L421.8125,149.46875 L419.90625,148.3125 L418.75,149.25 L415.875,149.25 L414.53125,151.75 L408.21875,152.125 L406.875,150.40625 L404.78125,150.03125 L404.96875,149.0625 L406.3125,148.125 L405.15625,147.71875 L404.96875,144.65625 L402.09375,144.46875 L400.40625,145 L399.21875,146.59375 L396.15625,147.53125 L396.15625,146.40625 L395.21875,146.40625 L395.21875,147.71875 L391.375,148.5 L391.375,150.21875 L387.9375,150.65625 L386.625,151.96875 L387.96875,153.90625 L391.09375,154.125 L393.84375,157.8125 L396.1875,157.8125 L396.75,160.375 L399.3125,160.75 L399.875,162.5 L398.125,163.6875 L396.96875,168.96875 L402.4375,171.6875 L402.4375,175.78125 L404.5625,175 L406.34375,176.40625 L407.6875,175.59375 L406.9375,174.4375 L407.90625,173.84375 L409.25,175.40625 L411.21875,174.03125 L411.8125,172.09375 L415.5,171.5 L416.5,172.28125 L416.3125,174.4375 L418.84375,176.375 L420.40625,176.1875 L422.15625,174.8125 L426.25,174.8125 L429.1875,178.125 L430.15625,178.125 L431.71875,177.15625 L431.9375,176 L433.5,175.21875 L435.25,176.375 L437,178.34375 L443.15625,181.59375 L445.59375,179.5 L445.78125,171.875 L449.125,168.96875 L451.0625,164.46875 L450.46875,161.53125 L452.8125,156.84375 L454.96875,151.96875 L451.25,151 L450.46875,145.71875 L451.25,142.1875 L451,141.9375 L451,141.9375 L451,141.9375 L451,141.9375 Z M451,141.9375"></path>
                                    <path data-num="91"
                                          d="M266.21875,132.40625 L264.46875,133.1875 L262.5625,133.9375 L262.1875,136.0625 L259.3125,137.40625 L258.9375,139.5 L260.28125,141.8125 L258.34375,144.46875 L255.5,144.46875 L256.625,146.1875 L255.28125,147.71875 L254.8125,150.8125 L255.75,151 L256.125,153.53125 L256.53125,154.125 L256.9375,159.375 L263.1875,158.8125 L265.71875,156.46875 L267.875,158.21875 L273.125,158.59375 L273.875,159.71875 L273.875,155.78125 L278.25,152.90625 L276.9375,151.1875 L277.5,146 L278.25,144.875 L277.3125,139.6875 L279.03125,138.34375 L278.6875,135.90625 L276.53125,134.90625 L272.90625,134.90625 L270.8125,133.75 L269.28125,134.53125 L266.21875,132.40625 L266.21875,132.40625 L266.21875,132.40625 L266.21875,132.40625 Z M266.21875,132.40625"></path>
                                    <path data-num="78"
                                          d="M243.5,114.15625 L243.4375,114.28125 L237.96875,115.84375 L237.1875,116.8125 L238.1875,118.375 L238.1875,119.9375 L239.9375,120.3125 L238.9375,121.3125 L239.03125,122.1875 L239.15625,122.09375 L241.09375,124.03125 L241.6875,126.375 L243.25,127.9375 L242.46875,130.09375 L242.46875,132.03125 L243.84375,133.59375 L242.46875,135.9375 L243.84375,139.28125 L246.5625,141.21875 L246.96875,143.375 L249.3125,143.75 L249.875,148.0625 L251.65625,150.21875 L254.8125,150.8125 L255.28125,147.71875 L256.625,146.1875 L255.5,144.46875 L258.34375,144.46875 L260.28125,141.8125 L258.9375,139.5 L259.3125,137.40625 L262.1875,136.0625 L262.5625,133.9375 L264.46875,133.1875 L266.21875,132.40625 L266.5625,132.625 L266.5625,132.40625 L264.8125,130.4375 L263.71875,127.46875 L265.46875,123.65625 L264.59375,120.78125 L261.1875,118.71875 L256.375,118.5 L251.875,115.625 L248.25,116.28125 L243.5,114.15625 L243.5,114.15625 L243.5,114.15625 L243.5,114.15625 Z M243.5,114.15625"></path>
                                    <path data-num="95"
                                          d="M247.5625,105.6875 L246,107.625 L244.8125,111.9375 L243.5,114.15625 L248.25,116.28125 L251.875,115.625 L256.375,118.5 L261.1875,118.71875 L264.59375,120.78125 L265.46875,123.65625 L265.4375,123.71875 L265.8125,123.65625 L269.3125,121.78125 L274.5625,121.4375 L277.4375,120.125 L279.28125,118.8125 L279.875,114.96875 L278.59375,113.6875 L274.3125,111.15625 L270.1875,109 L268.0625,109.96875 L265.71875,110.5625 L264.15625,109.375 L261.03125,107.4375 L258.5,109.375 L254.78125,109.78125 L249.5,109.375 L248.3125,107.4375 L247.5625,105.6875 L247.5625,105.6875 L247.5625,105.6875 L247.5625,105.6875 Z M247.5625,105.6875"></path>
                                    <path data-num="93"
                                          d="M279.28125,118.8125 L277.4375,120.125 L274.5625,121.4375 L269.3125,121.78125 L269.46875,122.5 L269.90625,122.59375 L270.3125,123.21875 L269.90625,124.09375 L269.375,124.1875 L269.75,125.09375 L272.28125,125.0625 L273.09375,126.3125 L273.25,128.0625 L274.125,127.9375 L274.9375,127.28125 L276.15625,127.34375 L277.6875,128.21875 L278.5625,129.1875 L278.96875,129.375 L279.21875,129.84375 L280.1875,130.09375 L280.1875,127.25 L279.03125,120.375 L279.28125,118.8125 L279.28125,118.8125 L279.28125,118.8125 L279.28125,118.8125 Z M279.28125,118.8125"></path>
                                    <path data-num="75"
                                          d="M272.28125,125.0625 L269.75,125.09375 L268.625,125.59375 L268.15625,126.21875 L267.125,126.28125 L266.1875,127.34375 L266.21875,127.9375 L266.4375,128.625 L268,129.0625 L269.90625,130.03125 L271.125,130.09375 L271.9375,129.875 L272.78125,129.28125 L273.0625,129.53125 L274.875,129.78125 L275.1875,129.125 L275.1875,128.46875 L274.875,128.34375 L273.625,128.40625 L273.71875,128.71875 L273.5,128.90625 L273.09375,128.90625 L273.25,128.5 L273.3125,128.0625 L273.25,128.0625 L273.09375,126.3125 L272.28125,125.0625 L272.28125,125.0625 L272.28125,125.0625 L272.28125,125.0625 Z M272.28125,125.0625"></path>
                                    <path data-num="92"
                                          d="M269.3125,121.78125 L265.8125,123.65625 L265.4375,123.71875 L263.71875,127.46875 L264.8125,130.4375 L266.5625,132.40625 L266.5625,132.625 L269.28125,134.53125 L269.9375,134.1875 L269.4375,133.25 L269.9375,131.78125 L269.625,131.25 L269.96875,130.03125 L269.90625,130.03125 L268,129.0625 L266.4375,128.625 L266.21875,127.9375 L266.1875,127.34375 L267.125,126.28125 L268.15625,126.21875 L268.625,125.59375 L269.75,125.09375 L269.375,124.1875 L269.90625,124.09375 L270.3125,123.21875 L269.90625,122.59375 L269.46875,122.5 L269.3125,121.78125 L269.3125,121.78125 L269.3125,121.78125 L269.3125,121.78125 Z M269.3125,121.78125"></path>
                                    <path data-num="94"
                                          d="M274.9375,127.28125 L274.125,127.9375 L273.3125,128.0625 L273.25,128.5 L273.09375,128.90625 L273.5,128.90625 L273.71875,128.71875 L273.625,128.40625 L274.875,128.34375 L275.1875,128.46875 L275.1875,129.125 L274.875,129.78125 L273.0625,129.53125 L272.78125,129.28125 L271.9375,129.875 L271.125,130.09375 L269.96875,130.03125 L269.625,131.25 L269.9375,131.78125 L269.4375,133.25 L269.9375,134.1875 L270.8125,133.75 L272.90625,134.90625 L276.53125,134.90625 L278.6875,135.90625 L278.65625,135.6875 L280.1875,131.84375 L280.1875,130.09375 L279.21875,129.84375 L278.96875,129.375 L278.5625,129.1875 L277.6875,128.21875 L276.15625,127.34375 L274.9375,127.28125 L274.9375,127.28125 L274.9375,127.28125 L274.9375,127.28125 Z M274.9375,127.28125"></path>
                                    <path data-num="25"
                                          d="M439.40625,195.71875 L439.21875,195.9375 L436.96875,195.9375 L435.8125,197.53125 L434.34375,198.375 L434.34375,200.34375 L430.6875,200.78125 L428.71875,199.375 L426.0625,199.78125 L423.53125,201.75 L421.71875,204.84375 L419.90625,205.40625 L419.0625,207.5 L416.8125,207.90625 L413.71875,210.4375 L409.65625,210.3125 L408.40625,211.28125 L407.28125,211.28125 L403.34375,214.5 L401.5625,214.4375 L401.53125,215.625 L401.8125,217.71875 L404.34375,219.40625 L405.75,221.25 L405.3125,223.1875 L404.0625,226.15625 L403.21875,228.09375 L408.6875,229.9375 L412.1875,229.65625 L412.46875,232.59375 L412.46875,236.53125 L416.8125,237.9375 L418.78125,238.46875 L421.59375,241.15625 L421.3125,243.40625 L420.03125,245.21875 L416.53125,246.34375 L417.375,248.3125 L417.78125,249.84375 L416.25,251.375 L416.40625,252.78125 L418.78125,253 L418.8125,252.8125 L430.90625,241.46875 L430.53125,232.09375 L434.8125,229.96875 L437.75,228.59375 L440.46875,226.0625 L440.6875,222.34375 L443.40625,220.96875 L449.65625,213.75 L448.6875,211.40625 L450.84375,210.4375 L453.375,207.3125 L452,205.9375 L447.3125,206.90625 L447.125,206.125 L451.4375,201.15625 L439.40625,195.71875 L439.40625,195.71875 L439.40625,195.71875 L439.40625,195.71875 Z M439.40625,195.71875"></path>
                                    <path data-num="90"
                                          d="M443.4375,182.03125 L441.625,182.96875 L440.09375,184.09375 L440.09375,186.59375 L440.9375,189.5625 L440.9375,191.5 L440.46875,194.625 L439.40625,195.71875 L451.4375,201.15625 L452.1875,200.28125 L454.78125,199.875 L453.8125,195.71875 L453.21875,193.5625 L450.46875,193.96875 L450.09375,191.625 L451.0625,189.84375 L451.25,187.5 L450.6875,186.15625 L447.15625,183.40625 L444.03125,183.21875 L443.4375,182.03125 L443.4375,182.03125 L443.4375,182.03125 L443.4375,182.03125 Z M443.4375,182.03125"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div id="legendeCarte" class="col-xs-2">
            </div>
        </div>
    </div>
</div>

<!-- END MAP -->
<!-- END MAP -->
<!-- END MAP -->
<!-- END MAP -->