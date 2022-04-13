
setInterval(function () {

    red = (Math.random() * (30 - 40) + 50);
    white = (Math.random() * (1 - 5) + 5);
    black = (Math.random() * (30 - 40) + 50);
    apostared = (Math.random() * 200);
    apostawhite = (Math.random() * 200);
    apostablack = (Math.random() * 200);

}, 3000);

setInterval(function () {

    totalper = 100;


}, 3000);

setInterval(function () {
    var classe = Math.floor((Math.random() * 2));

    var newclass;
    if (classe == 0) {
        newclass = 'text-green';
    }
    if (classe == 1) {
        newclass = 'text-red';
    }
    $('#blackValue').toggleClass(newclass);
}, 2000);




setInterval(function () {


    var valueRed = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    var valueapost = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    $('#red').text(valueRed);
    $('#redblack').text(valueapost);

    var valueWhite = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    var valueapostb = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    $('#blackValue').text(valueWhite);
    $('#blackAposta').text(valueapostb);

    if (white < apostawhite) {
        $('#whiteValue').addClass('text-red')

    }
    var valueWhite = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    var valueapostw = (Math.random() * 10000).toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });
    $('#whiteValue').text(valueWhite);
    $('#whiteAposta').text(valueapostw);

}, 3000);


lucro = 0;

setInterval(function () {
    // lucro = (Math.random() * 500);

    var valueSum = lucro += (Math.random() * 2000);
    var value = valueSum.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

    $('#lucro').text(value);

}, 5000);

total = 0;

setInterval(function () {

    var totalSum = total += (Math.random() * 10000);
    var value = totalSum.toLocaleString('pt-br', { style: 'currency', currency: 'BRL' });

    $('#total').text(value);

}, 10000);




var ctx = document.getElementById('myChart');
var chart = new Chart(ctx, {
    type: 'pie',
    data: {

        datasets: [{
            data: [(Math.random() * 10000), (Math.random() * 10000), (Math.random() * 10000)],
            backgroundColor: [
                '#FF0000',
                '#000000',
                '#F1EAEA',

            ],
            borderColor: [
                '#FF0000',
                '#000000',
                '#F1EAEA',

            ],
            borderWidth: 1
        }]
    },
    options: {

    },



});


setInterval(function () {
    $('#redval').text(`${Math.floor(red.toFixed(2))} - ${red.toFixed(2)}%`);
    $('#whiteval').text(`${Math.floor(white.toFixed(2))} - ${white.toFixed(2)}%`);
    $('#blackval').text(`${Math.floor(black.toFixed(2))} - ${black.toFixed(2)}%`);
}, 17000);
setInterval(function () {
    addData(chart);
}, 17000);



function addData(chart) {

    // chart.data.datasets[0]
    chart.data.datasets[0].data[0] = red.toFixed(2);
    chart.data.datasets[0].data[1] = black.toFixed(2);
    chart.data.datasets[0].data[2] = white.toFixed(2);
    chart.update();
}


setInterval(function () {

    $.ajax({
        url: 'getDados',
        success: function (data) {
            $.each(data, (key, value) => {
                    $('.result').append(`<div class="entry">
                    <div class="roulette-tile">
                        <div class="sm-box ${value.class_name}">
                            <div class="number">${value.number}
                            </div>
                        </div>
                    </div>
                </div>`)
            });
        },

    });
    // console.log(classe);



}, 2000);


