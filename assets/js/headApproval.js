function approveDonor(){
    var fullName = document.forms['approval']['da_fullname'].value;
    var email = document.forms['approval']['da_email'].value;
    var venue = document.forms['approval']['venue'].value;
    var month = document.forms['approval']['da_month'].value;
    var day = document.forms['approval']['da_day'].value;
    var year =  document.forms['approval']['da_year'].value;
    var donationID = document.forms['approval']['donationID'].value;
    var time = document.forms['approval']['appt'].value;

    var subject = '&su=REQUEST%20FOR%20DONATION%20SCHEDULE';
    var receiver = '&to=' + email;
    var first_line = '&body=Dear%20' + fullName + ',%0D%0AYour request for donation has been approved%0D%0A';
    var second_line = "%0D%0Ahere are the details of your donation%0D%0A";
    var details = 'DATE:%20' + month + '%20' + day + ',%20' + year + '%0D%0ATIME:%20' + time + '%0D%0ALOCATION:%20' + venue + '%0D%0ADONATION%20ID:%20' + donationID;
    var link = "https://mail.google.com/mail/?view=cm&fs=1";

    var url = link + subject + receiver + first_line + second_line + details;

    window.open(url, '_blank');
}

function denyDonor(){
    var fullname = document.forms['viewForm']['fullName'].value;
    var email = document.forms['viewForm']['email'].value;

    var subject = '&su=REQUEST%20FOR%20DONATION%20SCHEDULE';
    var receiver = '&to=' + email;
    var message = '&body=Dear%20' + fullname + ',%0D%0AWe apologize for the inconvenience, your request for donation has been denied%0D%0A%0D%0AKind%20Regards,%0D%0ASystem%20Admin';
    var link = "https://mail.google.com/mail/?view=cm&fs=1";

    var url = link + subject + receiver + message;
    window.open(url, '_blank');
}