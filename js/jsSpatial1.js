/***********************************************************************************/

/******************************************************************************************/

/*variable globales*/
var map; 
var map2;
/* visualisation*/


function visualisation1(){
  
  document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
        document.getElementById("Carte").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req1").textContent;
   document.getElementById("titre_req").value = x; 
 valeur=map2[x].split(','); 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;

 }



}



function visualisation2(){

 document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
        document.getElementById("Carte").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req2").textContent;
   document.getElementById("titre_req").value = x; 
 valeur=map2[x].split(','); 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;

 }


}

function visualisation3(){

 document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
        document.getElementById("Carte").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req3").textContent;
   document.getElementById("titre_req").value = x; 
 valeur=map2[x].split(','); 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;

 }

}
function visualisation4(){

 document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
        document.getElementById("Carte").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req4").textContent;
   document.getElementById("titre_req").value = x; 
 valeur=map2[x].split(','); 

 for(i=0;i<valeur.length;i++){
document.getElementById(valeur[i]).disabled = false;

 }

}
function visualisation5(){

 document.getElementById("Tableau").disabled = true;
    document.getElementById("Camembert").disabled = true;
  document.getElementById("Barre").disabled = true;
  document.getElementById("Nuage").disabled = true;
        document.getElementById("Carte").disabled = true;
document.getElementById("sect_resultat").style.visibility="visible";

 x = document.getElementById("req5").textContent;
   document.getElementById("titre_req").value = x; 
 valeur=map2[x].split(','); 

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
xmlhttp.open("GET","../view/req2.txt",true);

xmlhttp.onreadystatechange = function(){
  if(xmlhttp.status == 200 && xmlhttp.readyState == 4){
    txt = xmlhttp.responseText; 
    ligne=txt.split("\n");

    for(i=0;i<5;i++){
/*     ligne2=ligne[i].split(',');
tab[i]=ligne2[0];
map[ligne2[0]]=ligne2[1];

*/

 s1 =ligne[i].split("#");

      s2=s1[0].split(",");


tab[i]=s2[0];



map[s2[0]]=s2[1];

map2[s2[0]]=s1[1];

    }

document.getElementById("req1").innerHTML = tab[0];
document.getElementById("req2").innerHTML = tab[1];
document.getElementById("req3").innerHTML = tab[2];
document.getElementById("req4").innerHTML = tab[3];
document.getElementById("req5").innerHTML = tab[4];

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
    document.getElementById("Cartee").disabled = true;
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;  
              y=inp.value;
              pa=map2r.get(y);

                    val=pa.split(',');
                  for(j=0;j<val.length;j++){
                    str=val[j]+"e";     

   document.getElementById(str).disabled = false;
  
                  }
                 /******************************************************************************************************/
               

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

//route
var tab0 = [
"Le nombre d accidents mortels dans les routes a sens unique",
"Le nombre d accidents mortels dans les routes a double sens",
"Le nombre d accidents dans les routes a sens unique", 
"Le nombre d accidents dans les routes a double sens",
"Le nombre d accidents par route",
"Le nombre d accidents mortels par route"
];

/*troncon */
var tab2 = [
"Le nombre de pietons blesses graves par troncon",
"Le nombre de pietons blesses legers par troncon",
"Le nombre de pietons decedes par troncon",
"Le nombre de conducteurs decedes par troncon",
"Le nombre de conducteurs blesses graves par troncon",
"Le nombre de conducteurs blesses legers par troncon",
"Le nombre de passagers blesses graves par troncon",
"Le nombre de passagers blesses legers par troncon",
"Le nombre de passagers decedes par troncon",
"Le nombre d accidents par troncon",
"Le nombre d accidents mortels par troncon"
];

/*section*/
var tab3 = [
"Le nombre d accidents dans les sections en mauvais etat",
"Le nombre d accidents mortels dans les sections en mauvais etat",
"Les sections de route en mauvais etat",
"L etat de la chaussee par section de route",
"Le nombre d accidents mortels par section de route",
"Le nombre d accidents par section de route"

];

//commune
var tab4=[
"Le nombre de victimes par commune",
"Le nombre de blesses par commune",
"Le nombre de deces par commune",
"Le nombre de conducteurs decedes par commune",
"Le nombre d accidents par commune",
"Le nombre d accidents mortels par commune"
];



mapr=new Map();
mapr.set("Le nombre de pietons blesses graves par troncon","STAT_TRONCON_PEITONBG");
mapr.set("Le nombre de pietons blesses legers par troncon","STAT_TRONCON_PIETONBL");
mapr.set("Le nombre de pietons decedes par troncon","STAT_TRONCON_PIETOND");
mapr.set("Le nombre de conducteurs decedes par troncon","STAT_TRONCON_CONDD");
mapr.set("Le nombre de conducteurs blesses graves par troncon","STAT_TRONCON_CONDBG");
mapr.set("Le nombre de conducteurs blesses legers par troncon","STAT_TRONCON_CONDBL");
mapr.set("Le nombre de passagers blesses graves par troncon","STAT_TRONCON_PASSAGERBG");
mapr.set("Le nombre de passagers blesses legers par troncon","STAT_TRONCON_PASSAGERBL");
mapr.set("Le nombre de passagers decedes par troncon","STAT_TRONCON_PASSAGERD");
mapr.set("Le nombre d accidents par troncon","STAT_TRONCON_NBACC");
mapr.set("Le nombre d accidents mortels par troncon","STAT_TRONCON_NBACCM");
mapr.set("Le nombre d accidents dans les sections en mauvais etat","STAT_SECTION_NBACCSME");
mapr.set("Le nombre d accidents mortels dans les sections en mauvais etat","STAT_SECTION_NBACCMSME");
mapr.set("Les sections de route en mauvais etat","STAT_SECTION_ETAT");
mapr.set("L etat de la chaussee par section de route","STAT_SECTION_ETAT_CHAUSSE");
mapr.set("Le nombre d accidents mortels par section de route","STAT_SECTION_NBACCM");
mapr.set("Le nombre d accidents par section de route","STAT_SECTION_NBACC");
mapr.set("Le nombre d accidents mortels dans les routes a sens unique","STAT_ROUTE_NBACCM_SSENS");
mapr.set("Le nombre d accidents mortels dans les routes a double sens","STAT_ROUTE_NACCM_DSENS");
mapr.set("Le nombre d accidents dans les routes a sens unique","STAT_ROUTE_NACC_SSENS");
mapr.set("Le nombre d accidents dans les routes a double sens","STAT_ROUTE_NACC_DSENS");
mapr.set("Le nombre d accidents par route","STAT_ROUTE_NACC");
mapr.set("Le nombre d accidents mortels par route","STAT_ROUTE_NBACCM");
mapr.set("Le nombre de victimes par commune","STAT_COMMUNE_VICTIME");
mapr.set("Le nombre de blesses par commune","STAT_COMMUNE_BleSSES");
mapr.set("Le nombre de deces par commune","STAT_COMMUNE_DECES");
mapr.set("Le nombre de conducteurs decedes par commune","STAT_COMMUNE_DECES_COND");
mapr.set("Le nombre d accidents par commune","STAT_COMMUNE_NBACC");
mapr.set("Le nombre d accidents mortels par commune","STAT_COMMUNE_NBACCM");





map2r=new Map();
map2r.set("Le nombre de pietons blesses graves par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de pietons blesses legers par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de pietons decedes par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de conducteurs decedes par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de conducteurs blesses graves par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de conducteurs blesses legers par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de passagers blesses graves par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de passagers blesses legers par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de passagers decedes par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels par troncon","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents dans les sections en mauvais etat","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels dans les sections en mauvais etat","Barre,Camembert,Nuage,Carte");
map2r.set("Les sections de route en mauvais etat","Carte");
map2r.set("L etat de la chaussee par section de route","Carte");
map2r.set("Le nombre d accidents mortels par section de route","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents par section de route","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels dans les routes a sens unique","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels dans les routes a double sens","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents dans les routes a sens unique","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents dans les routes a double sens","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents par route","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels par route","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de victimes par commune","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de blesses par commune","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de deces par commune","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre de conducteurs decedes par commune","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents par commune","Barre,Camembert,Nuage,Carte");
map2r.set("Le nombre d accidents mortels par commune","Barre,Camembert,Nuage,Carte");