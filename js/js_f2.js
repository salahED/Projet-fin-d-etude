/*variable globales*/
var map = "global"; 
var map2;
var mapr;
var map2r;

/* visualisation*/


function visualisation1(){
    document.getElementById("Camembert").disabled = true;
       document.getElementById("Tableau").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
   document.getElementById("Graphe").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req1").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  
 document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;

 }

}



function visualisation2(){
         document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req2").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }

}

function visualisation3(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req3").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }


}
function visualisation4(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req4").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }


}
function visualisation5(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req5").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }


}
function visualisation6(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req6").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }
}

function visualisation7(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req7").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }


}
function visualisation8(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req8").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }
}
function visualisation9(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req9").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }

}
function visualisation10(){
         document.getElementById("Tableau").disabled = true;

    document.getElementById("Camembert").disabled = true;
  document.getElementById("Graphe").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req10").textContent;
   document.getElementById("titre_req").value = x; 

 valeur=map[x]; 
 valeur_nb=map2[x];  document.getElementById("test").value = valeur_nb; 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;
 }


}



/***************************************************************************************************/

/*random requetes */

function rand_req(){
  document.getElementById("sect_resultat").style.visibility="hidden";

document.getElementById("text_req").style.visibility = "visible";

var txt = '';
var res = '';
var tab=[];var tab2=[];
 map=new Map(); map2=new Map();
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","../view/req.txt",true);

xmlhttp.onreadystatechange = function(){
  if(xmlhttp.status == 200 && xmlhttp.readyState == 4){
    txt = xmlhttp.responseText; 
    ligne=txt.split("\n");

    for(i=0;i<10;i++){
      ligne_req_ =ligne[i].split("#");

      ligne_pa_=ligne_req_[1].split("?");

      ligne_pa=ligne_pa_[0].split(",");
tab[i]=ligne_req_[0];
map[ligne_req_[0]]=ligne_pa;

map2[ligne_req_[0]]=ligne_pa_[1];

    }

document.getElementById("req1").innerHTML = tab[0];
document.getElementById("req2").innerHTML = tab[1];
document.getElementById("req3").innerHTML = tab[2];
document.getElementById("req4").innerHTML = tab[3];
document.getElementById("req5").innerHTML = tab[4];
document.getElementById("req6").innerHTML = tab[5];
document.getElementById("req7").innerHTML = tab[6];
document.getElementById("req8").innerHTML = tab[7];
document.getElementById("req9").innerHTML = tab[8];
document.getElementById("req10").innerHTML = tab[9];

  }
};
xmlhttp.send();
return map;
  }
  

/*******************************************************/
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {

             document.getElementById("Tableaue").disabled = true;

    document.getElementById("Camemberte").disabled = true;
  document.getElementById("Barree").disabled = true;
  document.getElementById("Nuagee").disabled = true;
    document.getElementById("Graphee").disabled = true;
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;  
              y=inp.value;
                 /******************************************************************************************************/
                  nb=mapr.get(y);
                  pa=map2r.get(y);
                  document.getElementById("test2").value=nb;

                  val=pa.split(','); 
                  for(j=0;j<val.length;j++){
                    str=val[j]+"e";     

   document.getElementById(str).disabled = false;
  
                  }

              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { //up  
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/***************************************************************************************************************************************************/


var tab0 = [
"Le nombre d accidents mortels par type d infrastructure routiere",
"Le nombre d accidents par type d infrastructure routiere",
"Le taux d accidents par type d infrastructure routiere" ,
"Le nombre d accidents par type d infrastructure routiere par etat chaussee",
"Le nombre d accidents mortels par type d infrastructure routiere par etat chaussee",
"Le nombre d accidents par cause preponderante lie a l environnement",
"Le nombre d accidents dans les sections en mauvais etat",
"Le nombre d accidents mortels dans les sections en mauvais etat",
"Le nombre d accidents mortels dans les routes a sens unique" ,
"Le nombre d accidents mortels dans les routes a double sens",
"Le nombre d accidents mortels par section de route par etat chaussee",
"Le nombre d accidents par route",
"Le nombre d accidents par route nationale par annee",
"Le nombre d accidents par route chemin wilaya par annee",
"Le nombre d accidents mortels par route nationale par annee",
"Le nombre d accidents mortels par route chemin wilaya par annee",
"Le nombre d accidents dans les routes a sens unique",
"Le nombre d accidents dans les routes a double sens",
"Le nombre d accidents mortels par section de route",
"Le nombre d accidents mortels par etat chaussee",
"Le nombre d accidents mortels par condition meteorologique",
"Le nombre d accidents mortels par condition meteorologique par annee",
"Le taux d accidents mortels par condition meteorologique",
"Le nombre d accidents par facteur par condition meteorologique",
"Le nombre d accidents par cause preponderante par condition meteorologique",
"Le nombre d accidents mortels lie au facteur vehicule",
"Le nombre d accidents lie au facteur vehicule",
"Le nombre d accidents par marque de vehicule",
"Le nombre d accidents mortels par route par wilaya",
"Le nombre d accidents par troncon par annee",
"Le nombre d accidents mortels par troncon par annee",
"Le nombre d accidents par troncon par commune",
"Le nombre d accidents par section de route par commune",
"Le nombre d accidents par section de route par cause preponderante",
"Le nombre d accidents mortels par route par wilaya",
"Le nombre d accidents par troncon par commune",
"Le nombre d accidents par section route par commune",
"Le nombre d accidents par wilaya par annee",
"Le nombre d accidents mortels par wilaya par annee",
"Le nombre d accidents par section de route par categorie de vehicule",
"Le nombre d accidents par categorie du vehicule",
"Le nombre d accidents par etat du vehicule",
"Le nombre d accidents par categorie du vehicule par annee",
"Le nombre d accidents par etat du vehicule par annee",
"Le nombre d accidents par cause preponderante lie au facteur vehicule",
"Le taux d accident lie au facteur vehicule",
"Le nombre d accidents mortels par categorie du vehicule",
"Le nombre d accidents mortels par etat du vehicule",
"Le nombre d accidents mortels par cause preponderante lie au facteur vehicule",
"Le taux d accidents mortels lie au facteur vehicule",
"Le nombre d accidents par tranche d age du conducteur par annee",
"Le nombre d accidents par profession du conducteur par annee",
"Le nombre d accidents par situation familiale du conducteur par annee",
"Le nombre d accidents par genre du conducteur par annee",
"Le nombre d accidents mortels par genre du conducteur par annee",
"Le nombre d accidents mortels par tranche d age du conducteur par annee",
"Le nombre d accidents par ancienete de permis par annee",
"Le nombre d accidents lie au facteur humain", 
"Le nombre d accidents par cause preponderante lie au facteur humain", 
"Le nombre d accidents mortels par facteur humain par annee",
"Le nombre d accidents mortels par cause preponderante",
"Le nombre d accidents mortels par facteur",
"Le taux d accidents par facteur",
"Le taux d accidents par cause preponderante",
"Le nombre d accidents par facteur par annee",
"Le nombre d accidents par cause preponderante par annee",
"Le nombre d accidents par facteur",
"Le nombre d accidents par cause preponderante",
"Le nombre d accidents mortels lie au facteur humain",
"Le nombre d accidents par section de route par cause preponderante",
"Le nombre d accidents mortels par annee par condition meteorologique",
"Le nombre d accidents par condition meteorologique",
"Le nombre d accidents par condition meteorologique par annee",
"Le nombre d accidents par section de route par condition meteorologique",
"Le nombre d accidents mortels par section de route par condition meteorologique",
"Le nombre d accidents par annee",
"Le nombre d accidents mortels par annee",
"Le taux d accident lie au facteur environnement",
"Classement des sections de route par ordre decroissant du nombre d accidents mortels", 
"Classement des cause preponderante lie au facteur vehicuLe par ordre des croissant du nombre d accidents",
"Classement des categorie de vehicuLe par ordre decroissant du nombre d accidents",
"Classement des causes preponderantes par ordre decroissant du nombre d accidents",
"Classement des causes preponderantes lie au facteur humain par order decroissant du nombre d accidents",
"Le taux d accident lie au facteur humain",
"Classement des facteurs  par ordre decroissant du nombre d accidents"
];

/*blesses */
var tab2 = [
"Le nombre de victimes par condition meteorologique",
"Le nombre de passagers blesses graves par troncon",
"Le nombre de pietons blesses graves par troncon",
"Le nombre de blesses par route par annee",
"Le nombre de blesses par wilaya",
"Le nombre de blesses par commune",
"Le nombre de conducteurs blesses graves par troncon",
"Le nombre de conducteurs blesses legers par troncon",
"Le nombre de pietons blesses graves par troncon",
"Le nombre de passagers blesses legers par troncon",
"Le nombre de pietons blesses legers par troncon",
"Le nombre de blesses par annee par condition meteorologique",
"Le nombre de blesses par annee",
"Le nombre de victimes par type d infrastructure routiere par annee",
"Le nombre de victimes par type d infrastructure routiere",
"Le nombre de victimes par route par annee",
"Le nombre de victimes par wilaya",
"Le nombre de victimes par route par annee",
"Le nombre de victimes par annee par condition meteorologique",
"Le nombre de victimes par annee",
"Le nombre de victimes par commune"
];

/*mort*/
var tab3 = [
"Le nombre de victimes par condition meteorologique",
"Le nombre de deces par annee",
"Le nombre de deces par annee par condition meteorologique",
"Le nombre de passagers decedes par troncon",
"Le nombre de pietons decedes par troncon",
"Le nombre de pietons decedes par annee",
"Le nombre de conducteurs decedes par commune",
"Le nombre de conducteurs decedes par wilaya",
"Le nombre de conducteurs decedes par annee",
"Le nombre de passagers decedes par troncon",
"Le nombre de pietons decedes par troncon",
"Le nombre de conducteurs decedes par commune",
"Le nombre de conducteurs decedes par wilaya",
"Le nombre de conducteurs decedes par troncon",
"Le nombre de deces par route par annee",
"Le nombre de deces par commune",
"Le nombre de deces par wilaya",
"Classement des communes par ordre decroissant du nombre de conducteurs decedes",
"Le nombre de victimes par type d infrastructure routiere par annee",
"Le nombre de victimes par type d infrastructure routiere",
"Le nombre de victimes par route par annee",
"Le nombre de victimes par wilaya",
"Le nombre de victimes par route par annee",
"Le nombre de victimes par annee par condition meteorologique",
"Le nombre de victimes par annee",
"Le nombre de victimes par commune"
];


var tab4=[
"les sections de route en mauvais etat par commune",
"les sections de route en mauvais etat"
];




mapr=new Map();
map2r=new Map();
mapr.set("Le nombre de victimes par annee","2");

mapr.set("Le nombre d accidents mortels par section de route par etat chaussee","2");
mapr.set("Le nombre d accidents par facteur par condition meteorologique","3");
mapr.set("Le nombre de victimes par annee par condition meteorologique","3");
mapr.set("Le nombre de victimes par wilaya","2");
mapr.set("Le nombre de victimes par route par annee","3");
mapr.set("Le nombre de victimes par type d infrastructure routiere","2");
mapr.set("Le nombre de victimes par type d infrastructure routiere par annee","3");
mapr.set("Classement des communes par ordre decroissant du nombre de conducteurs decedes","3");
mapr.set("Le nombre de deces par wilaya","2");
mapr.set("Le nombre de deces par commune","2");
mapr.set("Le nombre de deces par route par annee","3");
mapr.set("Le nombre de conducteurs decedes par troncon","2");
mapr.set("Le nombre de conducteurs decedes par wilaya","2");
mapr.set("Le nombre de conducteurs decedes par commune","2");
mapr.set("Le nombre de pietons decedes par troncon","2");
mapr.set("Le nombre de passagers decedes par troncon","2");
mapr.set("Le nombre de conducteurs decedes par annee","2");
mapr.set("Le nombre de conducteurs decedes par wilaya","2");
mapr.set("Le nombre de conducteurs decedes par commune","2");
mapr.set("Le nombre de pietons decedes par annee","2");
mapr.set("Le nombre de pietons decedes par troncon","2");
mapr.set("Le nombre de passagers decedes par troncon","2");
mapr.set("Le nombre de deces par annee par condition meteorologique","3");
mapr.set("Le nombre de deces par annee","2");
mapr.set("Le nombre d accidents mortels par condition meteorologique","2");
mapr.set("Le nombre d accidents mortels par condition meteorologique par annee","3");
mapr.set("Le taux d accident par condition meteorologique","2");
mapr.set("Le taux d accident mortels par condition meteorologique","2");
mapr.set("Le nombre d accidents par facteur condition meteorologique","3");
mapr.set("Le nombre d accidents par cause preponderante par condition meteorologique","3");
mapr.set("Le nombre d accidents mortels lie au facteur vehicule","2");
mapr.set("Le nombre d accidents lie au facteur vehicule","2");
mapr.set("Le nombre d accidents par marque de vehicule","2");
mapr.set("Le nombre de victimes par condition meteorologique","2");



mapr.set("Le nombre d accidents par cause preponderante","2");

map2r.set("Le nombre d accidents par cause preponderante","Barre,Camembert,Nuage");


mapr.set("Le taux d accidents par facteur","2");

map2r.set("Le taux d accidents par facteur","Barre,Camembert,Nuage");

mapr.set("Le taux d accidents mortels par condition meteorologique","2");

map2r.set("Le nombre de deces par annee par condition meteorologique","Tableau");


mapr.set("Le nombre d accidents par ancienete de permis par annee","3");

map2r.set("Le nombre d accidents par ancienete de permis par annee","Tableau");


mapr.set("Le nombre d accidents par section de route par cause preponderante","3");

map2r.set("Le nombre d accidents par section de route par cause preponderante","Tableau");
mapr.set("Le nombre d accidents par section de route par categorie de vehicule","3");

map2r.set("Le nombre d accidents par section de route par categorie de vehicule","Tableau");



mapr.set("Le nombre d accidents dans les sections en mauvais etat","2");

map2r.set("Le nombre d accidents dans les sections en mauvais etat","Barre,Camembert,Nuage");

mapr.set("Le nombre d accidents mortels dans les sections en mauvais etat","2");

map2r.set("Le nombre d accidents mortels dans les sections en mauvais etat","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par facteur par condition meteorologique","Tableau");

map2r.set("Le taux d accidents mortels par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par condition meteorologique par annee","Tableau");
map2r.set("Le taux d accident par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le taux d accident mortels par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par facteur condition meteorologique","Tableau");
map2r.set("Le nombre d accidents par cause preponderante par condition meteorologique","Tableau");
map2r.set("Le nombre d accidents mortels lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par marque de vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par commune","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le nombre de victimes par annee par condition meteorologique","Tableau");
map2r.set("Le nombre de victimes par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par route par annee","Tableau");
map2r.set("Le nombre de victimes par type d infrastructure routiere","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par type d infrastructure routiere par annee","Tableau");
map2r.set("Classement des communes par ordre decroissant du nombre de conducteur decedes","Tableau");
map2r.set("Le nombre de deces par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de deces par commune","Barre,Camembert,Nuage");
map2r.set("Le nombre de deces par route par annee","Tableau");
map2r.set("Le nombre de conducteurs decedes par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs decedes par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs decedes par commune","Barre,Camembert,Nuage");
map2r.set("Le nombre de pietons decedes par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de passagers decedes par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs decedes par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le nombre de conducteurs decedes par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs decedes par commune","Barre,Camembert,Nuage");
map2r.set("Le nombre de pietons decedes par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le nombre de pietons decedes par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de passagers decedes par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de deces par annee par condition meteorologique","Tableau");
map2r.set("Le nombre de deces par annee","Barre,Camembert,Nuage,Graphe");


mapr.set("Le nombre de passagers blesses graves par troncon","2");
mapr.set("Le nombre de pietons blesses graves par troncon","2");
mapr.set("Le nombre de blesses par route par annee","3");
mapr.set("Le nombre de blesses par wilaya","2");
mapr.set("Le nombre de blesses par commune","2");
mapr.set("Le nombre de conducteurs blesses graves par troncon","2");
mapr.set("Le nombre de conducteurs blesses legers par troncon","2");
mapr.set("Le nombre de pietons blesses graves par troncon","2");
mapr.set("Le nombre de passagers blesses legers par troncon","2");
mapr.set("Le nombre de pietons blesses legers par troncon","2");
mapr.set("Le nombre de blesses par annee par condition meteorologique","3");
mapr.set("Le nombre de blesses par annee","2");
mapr.set("Le nombre de victimes par type d infrastructure routiere par annee","3");
mapr.set("Le nombre de victimes par type d infrastructure routiere","2");
mapr.set("Le nombre de victimes par route par annee","3");
mapr.set("Le nombre de victimes par wilaya","2");
mapr.set("Le nombre de victimes par route par annee","3");
mapr.set("Le nombre de victimes par annee par condition meteorologique","3");
mapr.set("Le nombre de victimes par annee","2");
mapr.set("Le nombre de victimes par commune","2");

map2r.set("Le nombre de passagers blesses graves par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de pietons blesses graves par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de blesses par route par annee","Tableau");
map2r.set("Le nombre de blesses par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de blesses par commune","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs blesses graves par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de conducteurs blesses legers par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de pietons blesses graves par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de passagers blesses legers par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de pietons blesses legers par troncon","Barre,Camembert,Nuage");
map2r.set("Le nombre de blesses par annee par condition meteorologique","Tableau");
map2r.set("Le nombre de blesses par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le nombre de victimes par type d infrastructure routiere par annee","Tableau");
map2r.set("Le nombre de victimes par type d infrastructure routiere","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par route par annee","Tableau");
map2r.set("Le nombre de victimes par wilaya","Barre,Camembert,Nuage");
map2r.set("Le nombre de victimes par route par annee","Tableau");
map2r.set("Le nombre de victimes par annee par condition meteorologique","Tableau");



mapr.set("Le taux d accidents mortels lie au facteur vehicule","2");
mapr.set("Le nombre d accidents mortels par type d infrastructure routiere","2");
mapr.set("Le nombre d accidents par type d infrastructure routiere","2");
mapr.set("Le taux d accidents par type d infrastructure routiere","2");
mapr.set("Le nombre d accidents par type d infrastructure routiere par etat chaussee","3");
mapr.set("Le nombre d accidents mortels par type d infrastructure routiere par etat chaussee","3");
mapr.set("Le nombre d accidents par cause preponderante lie a l environnement","2");
mapr.set("Le nombre d accidents dans les sections en mauvais etat","2");
mapr.set("Le nombre d accidents mortels dans les section en mauvais etat","2");
mapr.set("Le nombre d accidents mortels dans les routes a sens unique","2")
mapr.set("Le nombre d accidents mortels dans les routes a double sens","2");
mapr.set("Le nombre d accidents mortels par section de route par etat chaussee","3");
mapr.set("Le nombre d accidents mortels par route par wilaya","3");
mapr.set("Le nombre d accidents par route","2");
mapr.set("Le nombre d accidents par route nationale par annee","3");
mapr.set("Le nombre d accidents par route chemin wilaya par annee","3");
mapr.set("Le nombre d accidents mortels par route nationale par annee","3");
mapr.set("Le nombre d accidents mortels par route chemin wilaya par annee","3");
mapr.set("Le nombre d accidents par troncon par annee","3");
mapr.set("Le nombre d accidents mortels par troncon par annee","3");
mapr.set("Le nombre d accidents par troncon par commune","3");
mapr.set("Le nombre d accidents par section de route par commune","3");
mapr.set("Le nombre d accidents dans les routes a sens unique","2");
mapr.set("Le nombre d accidents dans les routes a double sens","2");
mapr.set("Le nombre d accidents mortels par section de route","2");
mapr.set("Le nombre d accidents mortels par etat chaussee","2");
mapr.set("Le nombre d accidents par section route par causes","3");
mapr.set("Le nombre d accidents mortels par route par wilaya","3");
mapr.set("Le nombre d accidents par troncon par commune","3");
mapr.set("Le nombre d accidents par section de route par commune","");
mapr.set("Le nombre d accidents par wilaya par annee","3");
mapr.set("Le nombre d accidents mortels par wilaya par annee","3");
mapr.set("Le nombre d accidents par section route par categorie de vehicule","3");
mapr.set("Le nombre d accidents par categorie du vehicule","2");
mapr.set("Le nombre d accidents par etat du vehicule","2");
mapr.set("Le nombre d accidents par categorie du vehicule par annee","3");
mapr.set("Le nombre d accidents par etat du vehicule par annee","3");
mapr.set("Le nombre d accidents par cause preponderante lie au facteur vehicule","2");
mapr.set("Le taux d accident lie au facteur vehicule","2");
mapr.set("Le nombre d accidents mortels par categorie du vehicule","2");
mapr.set("Le nombre d accidents mortels par etat du vehicule","2");
mapr.set("Le nombre d accidents mortels par cause preponderante lie au facteur vehicule","2");
mapr.set("Le taux d accident mortels lie au facteur vehicule","2");
mapr.set("Le nombre d accidents par tranche d age du conducteur par annee","3");
mapr.set("Le nombre d accidents par profession du conducteur par annee","3");
mapr.set("Le nombre d accidents par situation familiale du conducteur par annee","3");
mapr.set("Le nombre d accidents par genre du conducteur par annee","3");
mapr.set("Le nombre d accidents mortels par genre du conducteur par annee","3");
mapr.set("Le nombre d accidents mortels par tranche d age du conducteur par annee","3");
mapr.set("Le nombre d accidents par ancienete du permis par annee","2");
mapr.set("Le nombre d accidents lie au facteur humain","2"); 
mapr.set("Le nombre d accidents par cause preponderante lie au facteur humain","2"); 
mapr.set("Le nombre d accidents mortels par facteur humain par annee","3");
mapr.set("Le nombre d accidents mortels par cause preponderante","2");
mapr.set("Le nombre d accidents mortels par facteur","2");
mapr.set("Le taux d accident par facteur","2");
mapr.set("Le taux d accident par cause","2");
mapr.set("Le nombre d accidents par facteur par annee","3");
mapr.set("Le nombre d accidents par cause par annee","3");
mapr.set("Le nombre d accidents par facteur","2");
mapr.set("Le nombre d accidents par cause","2");
mapr.set("Le nombre d accidents mortels lie au facteur humain","2");
mapr.set("Le nombre d accidents par section de route par causes","3");
mapr.set("Le nombre d accidents mortels par annee par condition meteorologique","3");
mapr.set("Le nombre d accidents par condition meteorologique","2");
mapr.set("Le nombre d accidents par condition meteorologique par annee","3");
mapr.set("Le nombre d accidents par section de route par condition meteorologique","3");
mapr.set("Le nombre d accidents mortels par section de route par condition meteorologique","3");
mapr.set("Le nombre d accidents par annee","2");
mapr.set("Le nombre d accidents mortels par annee","2");
mapr.set("Le taux d accident lie au facteur environnement","2");
mapr.set("Le taux d accident lie au facteur humain","2");
mapr.set("Classement des sections de route par ordre decroissant du nombre d accidents mortels","3"); 
mapr.set("Classement des causes preponderantes lie au facteur vehicuLe par ordre des croissant du nombre d accidents","3");
mapr.set("Classement des categories de vehicuLe par ordre decroissant du nombre d accidents","3");
mapr.set("Classement des causes preponderantes  par ordr decroissant du nombre d accidents","3");
mapr.set("Classement des causes preponderantes lie au facteur humain par ordre decroissant du nombre d accidents","3");
mapr.set("Classement des facteurs par ordre decroissant du nombre d accidents","3");

map2r.set("Le nombre d accidents mortels par type d infrastructure routiere","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par type d infrastructure routiere","Barre,Camembert,Nuage");
map2r.set("Le taux d accidents par type d infrastructure routiere","Tableau");
map2r.set("Le nombre d accidents par type d infrastructure routiere par etat chaussee","Tableau");
map2r.set("Le nombre d accidents mortels par type d infrastructure routiere par etat chaussee","Tableau");
map2r.set("Le nombre d accidents par cause preponderante lie a l environnement","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents dans les section en mauvais etat","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels dans les section en mauvais etat","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels dans les routes a sens unique","Barre,Camembert,Nuage")
map2r.set("Le nombre d accidents mortels dans les routes a double sens","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par section de route par etat chaussee","Tableau");
map2r.set("Le nombre d accidents mortels par route par wilaya","Tableau");
map2r.set("Le nombre d accidents par route","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par route nationale par annee","Tableau");
map2r.set("Le nombre d accidents par route chemin wilaya par annee","Tableau");
map2r.set("Le nombre d accidents mortels par route nationale par annee","Tableau");
map2r.set("Le nombre d accidents mortels par route chemin wilaya par annee","Tableau");
map2r.set("Le nombre d accidents par troncon par annee","Tableau");
map2r.set("Le nombre d accidents mortels par troncon par annee","Tableau");
map2r.set("Le nombre d accidents par troncon par commune","Tableau");
map2r.set("Le nombre d accidents par section de route par commune","Tableau");
map2r.set("Le nombre d accidents dans les routes a sens unique","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents dans les routes a double sens","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par section de route","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par etat chaussee","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par section de route par causes","Tableau");
map2r.set("Le nombre d accidents mortels par route par wilaya","Tableau");
map2r.set("Le nombre d accidents par troncon par commune","Tableau");
map2r.set("Le nombre d accidents par section de route par commune","Tableau");
map2r.set("Le nombre d accidents par wilaya par annee","Tableau");
map2r.set("Le nombre d accidents mortels par wilaya par annee","Tableau");
map2r.set("Le nombre d accidents par section route par categorie du vehicule","Tableau");
map2r.set("Le nombre d accidents par categorie du vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par etat du vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par categorie du vehicule par annee","Tableau");
map2r.set("Le nombre d accidents par etat du vehicule par annee","Tableau");
map2r.set("Le nombre d accidents par cause preponderante lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le taux d accident lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par categorie du vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par etat du vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par cause preponderante lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le taux d accidents mortels lie au facteur vehicule","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par tranche d age du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents par profession du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents par situation familiale du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents par genre du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents mortels par genre du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents mortels par tranche d age du conducteur par annee","Tableau");
map2r.set("Le nombre d accidents par ancienete du permis par annee","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents lie au facteur humain","Barre,Camembert,Nuage"); 
map2r.set("Le nombre d accidents par cause preponderante lie au facteur humain","Barre,Camembert,Nuage"); 
map2r.set("Le nombre d accidents mortels par facteur humain par annee","Tableau");
map2r.set("Le nombre d accidents mortels par cause preponderante","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels par facteur","Barre,Camembert,Nuage");
map2r.set("Le taux d accident par facteur","Barre,Camembert,Nuage");
map2r.set("Le taux d accident par cause preponderante","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par facteur par annee","Tableau");
map2r.set("Le nombre d accidents par cause preponderante par annee","Tableau");
map2r.set("Le nombre d accidents par facteur","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par cause preponderante","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents mortels lie au facteur humain","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par section de route par cause preponderante","Tableau");
map2r.set("Le nombre d accidents mortels par annee par condition meteorologique","Tableau");
map2r.set("Le nombre d accidents par condition meteorologique","Barre,Camembert,Nuage");
map2r.set("Le nombre d accidents par condition meteorologique par annee","Tableau");
map2r.set("Le nombre d accidents par section de route par condition meteorologique","Tableau");
map2r.set("Le nombre d accidents mortels par section de route par condition meteorologique","Tableau");
map2r.set("Le nombre d accidents par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le nombre d accidents mortels par annee","Barre,Camembert,Nuage,Graphe");
map2r.set("Le taux d accident lie au facteur environnement","Barre,Camembert,Nuage");
map2r.set("Le taux d accident lie au facteur humain","Barre,Camembert,Nuage");
map2r.set("Classement des sections de route par ordre decroissant du nombre d accidents mortels","Tableau"); 
map2r.set("Classement des causes preponderantes lie au facteur vehicuLe par ordre des croissant du nombre d accidents","Tableau");
map2r.set("Classement des categories de vehicuLe par ordre decroissant du nombre d accidents","Tableau");
map2r.set("Classement des causes preponderantes  par ordre decroissant du nombre d accidents","Tableau");
map2r.set("Classement des causes preponderantes lie au facteur humain par ordre decroissant du nombre d accidents","Tableau");
map2r.set("Classement des facteurs  par ordre decroissant du nombre d accidents","Tableau");
