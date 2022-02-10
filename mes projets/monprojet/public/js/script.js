const inputUserMrc = document.getElementById('inputUserMrc');
const correctionMrc = document.getElementById('correctionMrc');
const resultatMrc = document.getElementById('resultatMrc');
console.log("Hello World");

btnCorrection.addEventListener('click', function(){

    var input = document.getElementById("inputUserMrc").value;
    
    if (input = "고마워요") {
    resultatMrc.innerHTML="대박! Bravo!"
    }
    
    else if (input = "고마워") {
    resultatMrc.innerHTML="대박! Bravo!"
    }

    else{   
    resultatMrc.innerHTML="Qu'est-ce que c'est que ça? moi pas comprendre 🙂"
    }
});
