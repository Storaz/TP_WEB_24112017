var nom = "admin";
var prenom ="boss";
var mdp ="secret";
var essais=0;

function active_boutton()
{
	var nom_requis;
	var prenom_requis;
    var mdp_requis;
    var confirm_mdp_requis;

    nom_requis=document.getElementById('nom').value;
    prenom_requis=document.getElementById('prenom').value;
    mdp_requis=document.getElementById('password').value;
    confirm_mdp_requis=document.getElementById('confirm_password').value;

    if (nom_requis && prenom_requis && mdp_requis && confirm_mdp_requis) {
    	console.log('good');
    	document.getElementById('submit').disabled=false;
    }else{
    	console.log('not good');
    }
}

function test_log()
{
	var nom_entre;
	var prenom_entre;
    var mdp_entre;
    var confirm_mdp;

    nom_entre=document.getElementById('nom').value;
    prenom_entre=document.getElementById('prenom').value;
    mdp_entre=document.getElementById('password').value;
    confirm_mdp=document.getElementById('confirm_password').value;

    if (nom_entre == nom && prenom_entre == prenom && mdp_entre == mdp && mdp_entre == confirm_mdp) {
    	console.log('Bon');
    	event.preventDefault(); //Empêche le comportement par défaut du formulaire
    	window.location=('interface3.php');
    }else{
    	console.log('Toujours pas bon')
    	alert("Erreur de saisie, veuillez réesayer");
    	essais++;
    	console.log(essais);
    }

    if(essais==3){
    	console.log('accueil');
    	event.preventDefault(); //Empêche le comportement par défaut du formulaire
    	window.location=('index.php');
    }
 
}


