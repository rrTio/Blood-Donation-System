function donorRequestDenied(){
    var donorEmail = document.getElementById('email');
    var donorName = document.getElementById('fullName');
    var subject = 'REQUEST FOR DONATION SCHEDULE';
    $message = 'WE ARE SORRY FOR THE INCONVENIENCE, YOUR REQUEST FOR DONATION HAS BEEN DENIED.%0D%0A%0D%0A%0D%0AYOURS TRULY,%0D%0ASYSTEM ADMIN';
    window.open("https://mail.google.com/mail/?view=cm&fs=1&tf=1&body="+message+"&su="+subject+"&to="+donorEmail, '_blank');
}