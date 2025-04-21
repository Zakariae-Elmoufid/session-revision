-- 1 Afficher les freelances qui parlent l’anglais (langues.nom = 'Anglais') avec un niveau avancé.

select u.nom ,  u.email from utilisateurs u
inner join profils p  on  p.utilisateur_id = u.id
inner join profil_langue pl on pl.profil_id = p.id
inner join langues l on l.id = pl.langue_id

WHERE u.role = "freelance" and l.nom = "Anglais" and pl.niveau ="avancé"

-- 2 Lister les freelances ayant plus de 3 compétences.

select   u.email ,count(u.id) as total from utilisateurs u
inner join profils p  on  p.utilisateur_id = u.id
inner join profil_competence pc on pc.profil_id = p.id
inner join competences c on c.id = pc.competence_id 
where  u.role = "freelance"
GROUP BY 
u.email
having total > 3
-- 3 Afficher les freelances disponibles, leur tarif horaire et leur ville

select   u.email ,p.tarif_horaire ,a.ville from utilisateurs u
inner join profils p  on  p.utilisateur_id = u.id
inner join adresses a on a.utilisateur_id = u.id
WHERE p.disponible = true and u.role = "freelance"


-- 4 Lister tous les utilisateurs qui ne possèdent pas encore de profil.
select   u.email , p.id from utilisateurs u
left join profils p  on  p.utilisateur_id = u.id
where p.id = null


-- 5 Afficher les clients qui n'ont jamais publié de projet.
select  u.email , p.id from utilisateurs u
left join projets p on p.client_id = u.id
where  u.role = "client" and p.id = null

-- 6 Afficher les projets ouverts avec leur budget et leur nombre total d’offres reçues.

select p.titre , p.budget  , count(o.id) from projets p
inner join offres o on o.projet_id = p.id

where p.statut ="ouvert"
group by 
p.titre , p.budget

-- 7 Lister les offres envoyées par des freelances dont le tarif horaire est inférieur à 100 MAD.
select u.email ,  o.prix_propose from offres o
inner join utilisateurs u on u.id = o.freelance_id
where o.prix_propose < 100
-- 8 Afficher les projets qui ont reçu au moins 3 offres.
select p.titre , count(o.id) as  total_offer  from projets p
inner join offres o on o.projet_id = p.id 

GROUP BY
p.titre
having total_offer = 2

-- 9 Afficher les freelances qui ont postulé sur plus de 5 projets différents.


select u.email , count(o.projet_id)  as total_project  from offres o
inner join utilisateurs u on u.id = o.freelance_id
group by u.email
HAVING total_project > 5

-- 10 Afficher les projets terminés avec les dates de début et de fin des missions associées.

select p.titre , m.date_debut, m.date_fin  from projets p
inner join offres o on p.id = o.projet_id
inner join missions m on m.offre_id = o.id 
where p.statut = "terminé"


-- 11 Lister les factures payées avec le nom du freelance, le montant, et le moyen de paiement.


select u.nom , f.montant , t.moyen_paiement from  offres o 
inner join utilisateurs u on o.freelance_id = u.id
inner join missions m on m.offre_id = o.id
inner join factures f on f.mission_id = m.id
inner join transactions t on t.facture_id = f.id
where f.paye = true