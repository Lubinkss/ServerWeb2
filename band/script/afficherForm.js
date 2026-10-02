const form = document.getElementById("formulaire");

var i = 0;

form.style.display = 'none';

function showform( ) {
    if(i==0){
        form.style.display = '';
        i = 1;
    }
        
    else{
        form.style.display = 'none';
        i = 0;
    }

}
