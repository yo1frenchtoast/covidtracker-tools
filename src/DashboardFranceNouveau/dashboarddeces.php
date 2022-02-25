
<style>

.btn-actif{
    border: 1px solid black;
    padding: 6px;
    border-radius: 5px;
    color:black;
}
.btn-inactif{
    border: 1px solid white;
    padding: 6px;
    border-radius: 5px;
    color:black;
}

.btn-inactif:hover{
    border: 1px solid black;
    background-color: lightgrey;
    padding: 6px;
    border-radius: 5px;
    color:white;
}


.shadow {
        border: 0px solid black;
        padding: 12px;
        border-radius: 7px;
        text-align: left;
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        background: #ffffff;
        margin-top: 10px;
    }
    
p {
    font-size: 17px;
}
.wrap {
        display: flex;
        margin-top: 0px;
        flex-wrap: wrap;
    }
.wrap>* {
    flex: 1 1 200px;
}
.boxshadow {
        border: 0px solid black;
        margin-top: 20px;
        padding: 10px 10px 10px 10px;
        border-radius: 7px;
        margin-right: 15px;
        max-width: 500px;
        text-align: left;
        /*box-shadow: 6px 4px 25px #c3d19d;*/
        box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
        width: 100%;
        background: #ffffff;
    }

.boxshadow-wide {
    border: 0px solid black;
    margin-top: 20px;
    padding: 10px 10px 10px 10px;
    border-radius: 7px;
    margin-right: 15px;
    max-width: 800px;
    text-align: left;
    /*box-shadow: 6px 4px 25px #c3d19d;*/
    box-shadow: 0 0 0 transparent, 0 0 0 transparent, 6px 4px 25px #d6d6d6;
    width: 100%;
    background: #ffffff;
}
.title_h2 {
    margin-top: 80px;
    margin-bottom: 10px;
}
.title {
    margin-top: 50px;
}
</style>

<body>
    <div id="deces" class="btn-group btn-group-toggle" role="group" >
        <a href="#depistage" class="btn btn-secondary">Dépistage</a>
        <a href="#hospitalisations" class="btn btn-secondary">Hospitalisations</a>
        <a href="#reanimations" class="btn btn-secondary">Soins critiques</a>
        <a href="#deces" class="btn btn-secondary active">Décès</a>
    </div>

    <h2>Décès hospitaliers</h2>
    <div class="wrap">
        <div class="one">
            <span id="nb_total_deces" style="font-size:200%; margin-top:5px; margin-bottom: 3px;">--</span><br>
            <b>Décès hospitaliers (total)</b><br>
            Nombre total de décès hospitaliers Covid19 depuis le printemps 2020.
            <div style="font-size: 70%; margin-top: 3px;"><i>Dernière donnée : <span class="date_maj">--/--</span> • Source : Santé publique France</i></div>
        </div>

        <div class="one">
            <span id="nb_quotidien_deces" style="font-size:200%; margin-top:5px; margin-bottom: 3px;">--</span><br>
            <b>Décès hospitaliers (quotidien)</b><br>
            Nombre quotidien de décès hospitaliers Covid19 en moyenne sur les 7 derniers jours.
            <div style="font-size: 70%; margin-top: 3px;"><i>Dernière donnée : <span class="date_maj">--/--</span> • Source : Santé publique France</i></div>
        </div>
    </div> 
    <br>

    <h3>Nombre de décès hospitaliers quotidien</h3>
    <p>Nombre de personnes décédées à l'hôpital avec Covid19 chaque jour.</p>
    <div id="deces_hosp" style="width: 95vw; height: 35vw; max-width: 1100px; max-height: 800px; min-height: 300px;"><span>CovidTracker.fr • Données : Santé publique France • Dernière donnée : <span class="date_maj">--/--</span></span></div>

    <h3>Taux de croissance des décès hospitaliers</h3>
    <p>Taux d'évolution hebdomadaire du nombre quotidien de personnes décédées à l'hôpital avec Covid19.</p>
    <div id="deces_taux_croissance" style="width: 95vw; height: 35vw; max-width: 1100px; max-height: 800px; min-height: 300px; margin-bottom: 100px;"><span>CovidTracker.fr • Données : Santé publique France • Dernière donnée : <span class="date_maj">--/--</span></span></div>
    
    <br>
    <br>
    <br>
   
</body>

<script>

function updateDataDeces(){
    N = data_France.deces_hospitaliers.valeur.length;
    let jour_nom = data_France["deces_hospitaliers"].jour_nom;
    let jour = data_France[jour_nom][N-1];

    document.getElementById("nb_total_deces").innerHTML = printableNumber(data_France.deces_hospitaliers_total.valeur);
    document.getElementById("nb_quotidien_deces").innerHTML = printableNumber(data_France.deces_hospitaliers.valeur[N-1]);

    for (element of document.getElementsByClassName('date_maj')){
            element.innerHTML = moment(jour, "YYYY-MM-DD").format("DD / MM / YYYY");
        }
}

function buildChartDeces(){
    updateDataDeces();

    let data_nom = "deces_hospitaliers";
    let jour_nom = "jour_new"
    var trace2 = {
        x: data_France[jour_nom],
        y: data_France[data_nom].valeur,
        hovertemplate: '%{y:.1f} décès<br>%{x}<extra></extra>',
        mode: 'lines',
        type: 'scatter',
        fill: 'tozeroy',
        line: {
            color: 'rgba(0, 0, 0, 1)',
            width: 3
        }
    };

    let N = data_France[jour_nom].length;
    let x_min = data_France[jour_nom][N-300];
    let x_max = data_France[jour_nom][N-1];
    let y_min = 0;
    let y_max = Math.max.apply(Math, data_France[data_nom].valeur);

    var layout = { 
        images: IMAGES,
        font: {size: 15},
        legend: {"orientation": "h"},
        annotations: [
            {
            x: x_max,
            y: data_France[data_nom].valeur[N-1],
            xref: 'x',
            yref: 'y',
            text: printableNumber(data_France[data_nom].valeur[N-1]) + "<br>décès<br>" + printableTaux(data_France["croissance_"+data_nom+"_rolling7"].valeur[N-1]) + "%",
            showarrow: true,
            font: {
                family: 'Helvetica Neue',
                size: 13,
                color: 'rgba(0, 0, 0, 1)'
            },
            align: 'center',
            arrowhead: 2,
            arrowsize: 1,
            arrowwidth: 1.5,
            arrowcolor: 'rgba(0, 0, 0, 1)',
            ax: -30,
            ay: -30,
            borderwidth: 1,
            borderpad: 2,
            bgcolor: 'rgba(256, 256, 256, 0.5)',
            opacity: 0.8
            }
        ],
        margin: MARGIN,
        xaxis: {
            tickfont: {size: 12},
            //range: [x_min, x_max],
        },
        yaxis: {
            range: [y_min, y_max]
        }
    };

    var data = [trace2];

    Plotly.newPlot('deces_hosp', data, layout, config);
}

function buildChartDecesTauxDeCroissance(){
    let MAX_VALUES = 100;
    let data_nom = "croissance_deces_hospitaliers";
    let jour_nom = data_France[data_nom].jour_nom;
    let N = data_France[jour_nom].length;

    var trace1 = {
        x: data_France[jour_nom].slice(9, N-3),
        y: data_France[data_nom+"_rolling7"].valeur.slice(9, N-3),
        hovertemplate: 'Évolution hospitalisations : %{y:.1f} %<br>%{x}<extra></extra>',
        name: "Taux de croissance de la moyenne 7j",
        type: 'line',
        line: {
            color: 'black',
            width: 3
        }
    };

    var bar_colors = [];
    data_France[data_nom].valeur.map((value, idx) => {
        if(value>0){
            bar_colors.push("#ff4d4d");
        } else {
            bar_colors.push("#70db70");
        }
    })

    var trace2 = {
        x: data_France[jour_nom],
        y: data_France[data_nom].valeur,
        hovertemplate: 'Évolution hospitalisations : %{y:.1f} %<br>%{x}<extra></extra>',
        name: 'Taux de croissance',
        type: 'bar',
        fill: 'tozeroy',
        marker: {
            color: bar_colors
        }
    };

    let x_min = data_France[jour_nom][N-MAX_VALUES];
    let x_last = data_France[jour_nom][N-1];
    let x_max = moment(x_last, "YYYY-MM-DD").add('days', 1).format("YYYY-MM-DD");

    let y_min = Math.min.apply(Math, data_France[data_nom].valeur.slice(-MAX_VALUES));
    let y_max = Math.max.apply(Math, data_France[data_nom].valeur.slice(-MAX_VALUES));

    var layout = { 
        images: IMAGES,
        font: {size: 12},
        legend: {"orientation": "h"},
        annotations: [
            {
            x: data_France[jour_nom][N-4],
            y: data_France[data_nom+"_rolling7"].valeur[N-4],
            xref: 'x',
            yref: 'y',
            text: printableTaux(data_France[data_nom+"_rolling7"].valeur[N-4]) + " %",
            showarrow: true,
            font: {
                family: 'Helvetica Neue',
                size: 13,
                color: 'rgba(0, 0, 0, 1)'
            },
            align: 'center',
            arrowhead: 2,
            arrowsize: 1,
            arrowwidth: 1.5,
            arrowcolor: 'rgba(0, 0, 0, 1)',
            ax: -30,
            ay: -30,
            borderwidth: 1,
            borderpad: 2,
            bgcolor: 'rgba(256, 256, 256, 0.5)',
            opacity: 0.8
            }
        ],
        margin: MARGIN,
        xaxis: {
            tickfont: {size: 12},
            range: [x_min, x_max],
        },
        yaxis: {
            range: [y_min, y_max],
            ticksuffix: '%',
        }
    };
    var data = [trace1, trace2];

    Plotly.newPlot('deces_taux_croissance', data, layout, config);
}


</script>
