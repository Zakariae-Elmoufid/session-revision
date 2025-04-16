let candidatures = [
    {
        id: 1,
        nom: "Ali Benali",
        age: 20,
        projet: "Application mobile de recyclage",
        statut: "en attente" // ou "validée", "rejetée"
    }
    ]
    
    
    
    
    function ajouterCandidature(nom, age, projet) {
       const id =  candidatures.length +1;
        candidatures.push({
            id : id,
            nom :nom,
            age : age,
            projet : projet,
            statut: "en attente"
        });
    }
    
    ajouterCandidature('zakaria',21,"Application pour la gestion le vent et l'achat des articles d'interure de la maison");
    ajouterCandidature('simo',26,"Application pour la gestion des etudiant");
    ajouterCandidature('ayoub',30," Application pour la gestion des resturant");
    
    
    function afficherToutesLesCandidatures (){
      console.log(candidatures);
    }
    
    afficherToutesLesCandidatures();
    
    function  validerCandidature(id){
      candidatures.forEach( function (candidate) {
        if(candidate.id == id){
          candidate.statut = "validée";
        }
      })