const personnage = {
    pseudo: 'Ceeeed',
    pv: 25,
    arme: ['Epée','Arc', 'Masse d\'arme'],
    pouvoir: 'Invisibilité',
    evolution: function() {
        this.pv+= 2;
    },
};


console.log(personnage);

personnage.evolution();
console.log(personnage);

console.log(JSON.stringify(personnage));


const armes = [
    {
        arme: 'épée',
        CA: 3,
        CD: 2,
    },
    {
        arme: 'arc',
        CA: 2,
        CD: 4,
    }

];

console.log(`Quand tu utilises l'${armes[1].arme}, tu infliges ${armes[1].CA} points de dégâts`);
console.log(`Mais tu es aussi moins vulnérable, avec un coefficient de défence de ${armes[1].CD} points!`);