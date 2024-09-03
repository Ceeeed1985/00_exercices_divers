function attendre() {

    return new Promise((resolve) => {
        setTimeout(() => {
            console.log('2. Timer en cours');
            resolve("c'est bon");
        }, 2000);
        

    });

}

async function main() {
    console.log("A. lancement du Timer");
    const attente = attendre();
    console.log(attente);
    await attendre(); 
    console.log("C. Fin")
};

// console.log("1. lancement du Timer");

// attendre().then(()=> {
//     console.log("3. Timer terminé");
// });


main();