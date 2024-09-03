const prenoms = ['Cédric', 'Magali', 'Robin', 'Alice'];

for (i = 0;i < prenoms.length;i++){
    console.log(prenoms[i]);
}

prenoms.forEach(prenom => {
    console.log(prenom);
});

for (const prenom of prenoms) {
    console.log(prenom);
}

const str = 'bonjour';

for (const lettre of str) {
    console.log(lettre);
    
}
