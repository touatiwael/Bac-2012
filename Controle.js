function verif(){
    nu = f.T1.value
    n  = f.T2.value
    p  = f.T3.value
    
    if (nu.length != 4  || !(verif_chif(nu))) {
        alert ("invalid Num ")
        return false
        
    }
    if (n.length == 0 || !(verif_alpha(n)) ) {
        alert ("invalid Nom ")
        return false
    }
    if (p.length == 0 || !(verif_alpha(p)) ) {
        alert ("invalid Prenom ")
        return false
    }
    if (f.R1[0]==false && f.R1[1]==false) {
        alert ("Choix de genre et obligatoire ")
        
    }
    if (f.D1.selectedIndex == -1) {
        alert ("choix de niveau et obligatoire ")
        
    }

}



function verif_chif(ch){
    i = 1
    test = true
    do {
        if (ch.charAt(i)>= "0" && ch.charAt(i)<="9"){
            i++
        }
        else test = false
        
    } while ((test)&&(i<ch.length));
    return test
}

function verif_alpha(ch){
    i = 1
    test = true
    ch = ch.toUpperCase()
    do {
        if (ch.charAt(i)>= "A" && ch.charAt(i)<="Z"){
            i++
        }
        else test = false
        
    } while ((test)&&(i<ch.length));
    return test
}