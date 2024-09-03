class Voiture {
    constructor(marque, annee=new Date().getFullYear(), kilometrage=0) {
        this.marque = marque;
        this.anneeMiseEnService = annee;
        this.kilometrage = kilometrage;
    }

    afficherInfos() {
        console.log("=== INFORMATIONS ===");
        console.log(`=> Marque: ${this.marque}`);
        console.log(`=> Année: ${this.anneeMiseEnService}`);
        console.log(`=> KM: ${this.kilometrage}`);
    }

}

const vehicule0001 = new Voiture('Citroen');
console.log(vehicule0001);
const vehicule0002 = new Voiture ('Peugeot', 2012, 120000);
console.log(vehicule0002);
vehicule0001.afficherInfos();