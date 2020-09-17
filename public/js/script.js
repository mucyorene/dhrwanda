function validatePersonal(){
    if (document.formLegal.firstName.value== "") {
        document.formLegal.firstName.focus();
        document.getElementById('perFname').innerHTML = "First name is required please!";
        return false;
    }else{
        document.getElementById('perFname').innerHTML = "";
    }
    if (document.formLegal.lastName.value== "") {
        document.formLegal.lastName.focus();
        document.getElementById('perLname').innerHTML = "Last Name is required please!";
        return false;
    }else{
        document.getElementById('perLname').innerHTML = "";
    }

    if (document.formLegal.email.value== "") {
        document.formLegal.email.focus();
        document.getElementById('email').innerHTML = "Your Email is require!";
        return false;
    }else{
        document.getElementById('email').innerHTML = "";
    }
    
    if (document.formLegal.phoneNumber.value== "") {
        document.formLegal.phoneNumber.focus();
        document.getElementById('phoneNumber').innerHTML = "Your phone number is require!";
        return false;
    }else{
        document.getElementById('phoneNumber').innerHTML = "";
    }
    
    if (document.formLegal.amount.value== "") {
        document.formLegal.amount.focus();
        document.getElementById('amount').innerHTML = "Your donation amount";
        return false;
    }else{
        document.getElementById('amount').innerHTML = "";
    }
    return true;
}
function validateLegalForm(){
    if (document.legalForm.institutionName.value== "") {
        document.legalForm.institutionName.focus();
        document.getElementById('institutionName').innerHTML = "Enter your institution name";
        return false;
    } else {
        document.getElementById('institutionName').innerHTML = "";
    }
    
    if (document.legalForm.email1.value== "") {
        document.legalForm.email1.focus();
        document.getElementById('email1').innerHTML = "Enter your institution name";
        return false;
    } else {
        document.getElementById('email1').innerHTML = "";
    }
    
    if (document.legalForm.amount1.value== "") {
        document.legalForm.amount1.focus();
        document.getElementById('amount1').innerHTML = "Donation Amount field is required";
        return false;
    } else {
        document.getElementById('amount1').innerHTML = "";
    }
}
