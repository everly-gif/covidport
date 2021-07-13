$(document).ready(function(){
    $.getJSON("https://api.covid19india.org/data.json",function(cases){
    var confirmed=[];
    var recovered=[];
    var deaths=[];
    var states=[];
    
    
    $.each(cases.statewise,function(id,object){
        states.push(object.state);
        confirmed.push(object.confirmed);
        recovered.push(object.recovered);
        deaths.push(object.deaths);

    });
    states.shift();confirmed.shift();recovered.shift();deaths.shift();
    var total_a=cases.statewise[0].active;
    var total_c=cases.statewise[0].confirmed;
    var total_r=cases.statewise[0].recovered;
    var total_d=cases.statewise[0].deaths;

    $("#active").append(total_a);
    $("#confirmed").append(total_c);
    $("#recovered").append(total_r);
    $("#deaths").append(total_d);

    var chart=document.getElementById('chart').getContext("2d");

    var mychart=new Chart(chart,{
        type:'line',
        data:{
            labels:states,
            datasets:[
                
                {
                    label:"Confirmed",
                    data: confirmed,
                    backgroundColor:"#ffc107",
                    borderColor:"#ffc107",
                },
                {
                    label:"Recovered",
                    data: recovered,
                    backgroundColor:"green",
                    borderColor:"green",
                },
                {
                    label:"Deaths",
                    data: deaths,
                    backgroundColor:"red",
                    borderColor:"red",
                    

                },
            ],
        },
        options:{},
    });

    });
    
    
});