function submitAccount(){

    var patient = document.getElementById('patientradbtn');
    var intern = document.getElementById('intradbtn');
    var review = document.getElementById('revradbtn');
    var x = document.getElementsByClassName("form");

    if(patient.checked == true){

        document.getElementById('patient_register_primary').style.display = 'block';
        document.getElementById('intern_register_primary').style.display = 'none';
        document.getElementById('review_register_primary').style.display = 'none';
        document.getElementById('intern_register_secondary').style.display = 'none';
        document.getElementById('review_register_secondary').style.display = 'none';
    }
    
    else if (intern.checked == true){

        document.getElementById('intern_register_primary').style.display = 'block';
        document.getElementById('review_register_primary').style.display = 'none';
        document.getElementById('patient_register_primary').style.display = 'none';
        document.getElementById('patient_register_secondary').style.display = 'none';
        document.getElementById('review_register_secondary').style.display = 'none';
    }

    else if(review.checked == true){

        document.getElementById('review_register_primary').style.display = 'block';
        document.getElementById('patient_register_primary').style.display = 'none';
        document.getElementById('intern_register_primary').style.display = 'none';
        document.getElementById('intern_register_secondary').style.display = 'none';
        document.getElementById('patient_register_secondary').style.display = 'none';
    }
}

function toNextForm() {

    if(document.getElementById('patient_register_primary').style.display == 'block'){

        document.getElementById('patient_register_secondary').style.display = 'block';
        document.getElementById('patient_register_primary').style.display = 'none';
    }

    else if(document.getElementById('intern_register_primary').style.display == 'block'){

        document.getElementById('intern_register_secondary').style.display = 'block';
        document.getElementById('intern_register_primary').style.display = 'none';
    }

    else if(document.getElementById('review_register_primary').style.display == 'block'){

        document.getElementById('review_register_secondary').style.display = 'block';
        document.getElementById('review_register_primary').style.display = 'none';

    }
}