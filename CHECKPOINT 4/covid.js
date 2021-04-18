$(function() {
    $.ajax({
        url: "https://coronavirus-19-api.herokuapp.com/countries/bangladesh",

        method: "GET",
        dataType: "json",
        success: function(data) {
            var totalTested, totalCase, lastCase, casesPerOneMillion, activeTotal, totalRecovered, totalDeath = '';
            var testsPerOneMillion, deathsPerOneMillion, critical, lastRecovered, lastDeath = '';
            var time = '';

            totalCase = data.cases;
            lastCase = data.todayCases;
            totalDeath = data.deaths;
            lastDeath = data.todayDeaths;
            totalRecovered = data.recovered;
            activeTotal = data.active;
            lastRecovered = data.recovered;
            critical = data.critical;
            casesPerOneMillion = data.casesPerOneMillion;
            deathsPerOneMillion = data.deathsPerOneMillion;
            totalTested = data.totalTests;
            testsPerOneMillion = data.testsPerOneMillion;


            $("#TotalCase").html(totalCase);
            $("#LastCase").html(lastCase);
            $("#TotalDeath").html(totalDeath);
            $("#LastDeath").html(lastDeath);
            $("#TotalRecovered").html(totalRecovered);
            $("#ActiveTotal").html(activeTotal);
            $("#LastRecovered").html(lastRecovered);
            $("#Critical").html(critical);
            $("#AllcasesPerOneMillion").html(casesPerOneMillion);
            $("#deathsPerOneMillion").html(deathsPerOneMillion);
            $("#TotalTested").html(totalTested);
            $("#TestsPerOneMillion").html(testsPerOneMillion);


        }
    });
});