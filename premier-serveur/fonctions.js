function addition(a, b) {
    return a + b;
}

const resultat = addition (5,10);
console.log(resultat);


const quotient = function (x, y) {
    return x-y;
}

const res = quotient(10,5);
console.log(res);


const produit = (i,j) => {
    return i*j;
}

const resu = produit(5,8);
console.log(resu);


const direSalut = (formule = "Bonjour", prenom='Bob') => {
    console.log(`${formule} ${prenom}`)
}

direSalut("Bonsoir","Cédric");
direSalut();