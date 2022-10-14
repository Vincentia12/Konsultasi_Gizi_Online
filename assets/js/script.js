// var heightInput = document.querySelector(".height-input-field");
// var weightInput = document.querySelector(".weight-input-field");
// var calculateButton = document.querySelector(".calculate");
// var result = document.querySelector(".result");
// //  var statement = document.querySelector(".result-statement");
// var statement = document.getElementById("result-statement");
// var BMI, height, weight;

//  calculateButton.addEventListener("click", ()=>{

//      height = heightInput.value;
//      weight = weightInput.value;
//      BMI = weight/(height**2); 
//      result.innerText = BMI;

//      if(BMI < 18.5)
//      {
//          statement.innerText = "Your BMI falls within the underweight range";    
//      }
//      else if((BMI > 18.5) && (BMI < 24.9))
//      {
//          statement.innerText = "Your BMI falls within the normal or healthy weight range";
//      }
//      else if((BMI > 25) && (BMI < 29.9 ))
//      {
//          statement.innerText = "Your BMI falls within the overweight range";
//      }
//      else
//      {
//          statement.innerText = "Your BMI falls within the obese range";
//      }
//  });




// Author: Regga @reggarantai
// https://regga.id/coding/

// CLASSIFICATION OF OVERWEIGHT AND OBESITY BY BMI
// https://www.nhlbi.nih.gov/files/docs/guidelines/ob_gdlns.pdf

function hitung() {
    $('#hasil').hide();
    var hasil = 'Kamu <strong>Obesitas</strong> tingkat 3',
        className = 'bg-danger-2 text-white',
        tinggi = $('#tinggi').val() / 100,
        berat = $('#berat').val(),
        bmi = (berat / Math.pow(tinggi, 2)).toFixed(1);

        if (bmi < 18.5) {
            hasil = 'Berat badan kamu <strong>Kurang</strong>';
            className = 'bg-warning-2 text-white';
        }
        else if ((bmi >= 18.5) && (bmi <= 24.9)) {
            hasil = 'Berat badan kamu <strong>Normal</strong>';
            className = 'bg-success text-white';
        }
        else if ((bmi >= 25) && (bmi <= 29.9)) {
            hasil = 'Berat badan kamu <strong>Berlebih</strong>';
            className = 'bg-warning text-dark';
        }
        else if ((bmi >= 30) && (bmi <= 34.9)) {
            hasil = 'Kamu <strong>Obesitas</strong> tingkat 1';
            className = 'bg-warning-2 text-white';
        }
        else if ((bmi >= 35) && (bmi <= 40)) {
            hasil = 'Kamu <strong>Obesitas</strong> tingkat 2';
            className = 'bg-danger text-white';
        } else {
            hasil = "Kamu <strong>Obesitas</strong> Berat";
            className = 'bg-danger-2 text-white';
        }

    $('#hasil').html(
        '<div class="' + className + '"><p style="color: white;">Nilai BMI/IMT kamu: <strong>' + bmi + '</strong></p><hr>' +
        '<h3>' + hasil + '</h3></div>'
    ).fadeIn();
}

function validate() {
    $('#tinggi').val() > 1 && $('#berat').val() > 1 ? hitung() : $('#hasil').html('');
}

$(document).ready(function () {

    var tinggi = $('#tinggi').val(),
        berat = $('#berat').val();

    $('#tinggi, #berat').keyup(function () {
        tinggi = $('#tinggi').val();
        berat = $('#berat').val();
        validate();
    });

    $('#tinggi, #berat').change(function () {

        // Untuk menghindari dobel proses karena pengaruh keyup, maka perlu diset kondisi
        var change = true,
            tinggiSaatIni = $('#tinggi').val(),
            beratSaatIni = $('#berat').val();

        if (
            ($(this).attr('id') == 'tinggi' && tinggiSaatIni == tinggi) ||
            ($(this).attr('id') == 'berat' && beratSaatIni == berat)
        ) {
            change = false;
        }

        if (change) {
            validate()
        }
    });

});