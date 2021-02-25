@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('jobs//css/style.css')}}">


<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                    <h1>Déposer une actualité</h1>
                </div>
                <div class="wm-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Menu</a></li>
                        <li><a href="{{route('articles')}}">Nos actualités</a></li>
                        <li>Déposer une actualité</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Mini Header \\-->
<section id="post_job">
    <div class="container">
        <div class="vertical-space-60"></div>
        <div class="job-post-box">
            <form action="{{route('article.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputJobtitle">Titre</label>
                    <input type="text" class="form-control" name="titre" required />
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">Dénomination de votre entreprise</label>
                            <input type="text" class="form-control" name="entreprise" required />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleInputCompany">Adresse mail de contact</label>
                            <input type="text" class="form-control" name="entreprise_mail"
                                placeholder="Ne sera pas visible pour les candidats" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputLongDescription">Décrire l'entreprise</label>
                    <textarea class="form-control large" name="description_entreprise"
                        placeholder="Groupe international ou national, PME, artisan, ect..." rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="sel1">Où travaillent les employés ?</label>
                            <select class="form-control" id="sel1" name="job_lieu">
                                <option>Les employés seront rattachés à l'adresse de l'entreprise.</option>
                                <option>Les employés ne seront pas rattachés à une adresse précise.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputJobtitle">Saisissez une adresse postale</label>
                    <input type="text" class="form-control" name="entreprise_adresse" required />
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="exampleInputCompany">Code postal</label>
                            <input type="text" class="form-control" id="postal_code" name="postale" required />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="exampleInputLoction">Ville</label>
                            <input type="text" class="form-control" name="ville" required />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label for="exampleInputCompany">Département</label>
                            <select class="form-control" name="departement" required>
                                <option> Ain </option>
                                <option> Aisne </option>
                                <option> Allier </option>
                                <option> Hautes-Alpes </option>
                                <option> Alpes-de-Haute-Provence </option>
                                <option> Alpes-Maritimes </option>
                                <option> Ardèche </option>
                                <option> Ardennes </option>
                                <option> Ariège </option>
                                <option> Aube </option>
                                <option> Aude </option>
                                <option> Aveyron </option>
                                <option> Bouches-du-Rhône </option>
                                <option> Calvados </option>
                                <option> Cantal </option>
                                <option> Charente </option>
                                <option> Charente-Maritime </option>
                                <option> Cher </option>
                                <option> Corrèze </option>
                                <option> Corse-du-sud </option>
                                <option> Haute-corse </option>
                                <option> Côte-d'or </option>
                                <option> Côtes-d'armor </option>
                                <option> Creuse </option>
                                <option> Dordogne </option>
                                <option> Doubs </option>
                                <option> Drôme </option>
                                <option> Eure </option>
                                <option> Eure-et-Loir </option>
                                <option> Finistère </option>
                                <option> Gard </option>
                                <option> Haute-Garonne </option>
                                <option> Gers </option>
                                <option> Gironde </option>
                                <option> Hérault </option>
                                <option> Ile-et-Vilaine </option>
                                <option> Indre </option>
                                <option> Indre-et-Loire </option>
                                <option> Isère </option>
                                <option> Jura </option>
                                <option> Landes </option>
                                <option> Loir-et-Cher </option>
                                <option> Loire </option>
                                <option> Haute-Loire </option>
                                <option> Loire-Atlantique </option>
                                <option> Loiret </option>
                                <option> Lot </option>
                                <option> Lot-et-Garonne </option>
                                <option> Lozère </option>
                                <option> Maine-et-Loire </option>
                                <option> Manche </option>
                                <option> Marne </option>
                                <option> Haute-Marne </option>
                                <option> Mayenne </option>
                                <option> Meurthe-et-Moselle </option>
                                <option> Meuse </option>
                                <option> Morbihan </option>
                                <option> Moselle </option>
                                <option> Nièvre </option>
                                <option> Nord </option>
                                <option> Oise </option>
                                <option> Orne </option>
                                <option> Pas-de-Calais </option>
                                <option> Puy-de-Dôme </option>
                                <option> Pyrénées-Atlantiques </option>
                                <option> Hautes-Pyrénées </option>
                                <option> Pyrénées-Orientales </option>
                                <option> Bas-Rhin </option>
                                <option> Haut-Rhin </option>
                                <option> Rhône </option>
                                <option> Haute-Saône </option>
                                <option> Saône-et-Loire </option>
                                <option> Sarthe </option>
                                <option> Savoie </option>
                                <option> Haute-Savoie </option>
                                <option> Paris </option>
                                <option> Seine-Maritime </option>
                                <option> Seine-et-Marne </option>
                                <option> Yvelines </option>
                                <option> Deux-Sèvres </option>
                                <option> Somme </option>
                                <option> Tarn </option>
                                <option> Tarn-et-Garonne </option>
                                <option> Var </option>
                                <option> Vaucluse </option>
                                <option> Vendée </option>
                                <option> Vienne </option>
                                <option> Haute-Vienne </option>
                                <option> Vosges </option>
                                <option> Yonne </option>
                                <option> Territoire de Belfort </option>
                                <option> Essonne </option>
                                <option> Hauts-de-Seine </option>
                                <option> Seine-Saint-Denis </option>
                                <option> Val-de-Marne </option>
                                <option> Val-d'oise </option>
                                <option> Mayotte </option>
                                <option> Guadeloupe </option>
                                <option> Guyane </option>
                                <option> Martinique </option>
                                <option> Réunion </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group">
                            <label for="sel1">Pays</label>
                            <select class="form-control" id="country" name="pays" required>
                                <option> Afghanistan </option>
                                <option> Afrique du Sud </option>
                                <option> Albanie </option>
                                <option> Algérie </option>
                                <option> Allemagne </option>
                                <option> Andorre </option>
                                <option> Angola </option>
                                <option> Antigua-et-Barbuda </option>
                                <option> Arabie saoudite </option>
                                <option> Argentine </option>
                                <option> Arménie </option>
                                <option> Australie </option>
                                <option> Autriche </option>
                                <option> Azerbaïdjan </option>
                                <option> Bahamas </option>
                                <option> Bahreïn </option>
                                <option> Bangladesh </option>
                                <option> Barbade </option>
                                <option> Bélarus </option>
                                <option> Belgique </option>
                                <option> Belize </option>
                                <option> Bénin </option>
                                <option> Bhoutan </option>
                                <option> Bolivie </option>
                                <option> Bosnie-Herzégovine </option>
                                <option> Botswana </option>
                                <option> Brésil </option>
                                <option> Brunéi Darussalam </option>
                                <option> Bulgarie </option>
                                <option> Burkina Faso </option>
                                <option> Burundi </option>
                                <option> Cambodge </option>
                                <option> Cameroun </option>
                                <option> Canada </option>
                                <option> Cap-Vert </option>
                                <option> Chili </option>
                                <option> Chine </option>
                                <option> Chypre </option>
                                <option> Colombie </option>
                                <option> Comores </option>
                                <option> Congo </option>
                                <option> Congo, (République démocratique du) </option>
                                <option> Corée, (République de) </option>
                                <option> Corée, (République populaire démocratique de) </option>
                                <option> Costa Rica </option>
                                <option> Côte d'Ivoire </option>
                                <option> Croatie </option>
                                <option> Cuba </option>
                                <option> Danemark </option>
                                <option> Djibouti </option>
                                <option> Dominique </option>
                                <option> Egypte </option>
                                <option> El Salvador </option>
                                <option> Emirats arabes unis </option>
                                <option> Equateur </option>
                                <option> Erythrée </option>
                                <option> Espagne </option>
                                <option> Estonie </option>
                                <option> Etats-Unis </option>
                                <option> Ethiopie </option>
                                <option> Fidji </option>
                                <option> Finlande </option>
                                <option> France </option>
                                <option> Gabon </option>
                                <option> Gambie </option>
                                <option> Géorgie </option>
                                <option> Ghana </option>
                                <option> Grèce </option>
                                <option> Grenade </option>
                                <option> Guatemala </option>
                                <option> Guinée </option>
                                <option> Guinée-Bissau </option>
                                <option> Guinée équatoriale </option>
                                <option> Guyana </option>
                                <option> Haïti </option>
                                <option> Honduras </option>
                                <option> Hongrie </option>
                                <option> Iles Cook </option>
                                <option> Iles Marshall </option>
                                <option> Iles Salomon </option>
                                <option> Inde </option>
                                <option> Indonésie </option>
                                <option> Iran (République islamique d') </option>
                                <option> Iraq </option>
                                <option> Irlande </option>
                                <option> Islande </option>
                                <option> Israël </option>
                                <option> Italie </option>
                                <option> Jamahiriya arabe libyenne </option>
                                <option> Jamaïque </option>
                                <option> Japon </option>
                                <option> Jordanie </option>
                                <option> Kazakhstan </option>
                                <option> Kenya </option>
                                <option> Kirghizistan </option>
                                <option> Kiribati </option>
                                <option> Koweït </option>
                                <option> l'ex-République yougoslave de Macédoine </option>
                                <option> Lesotho </option>
                                <option> Lettonie </option>
                                <option> Liban </option>
                                <option> Libéria </option>
                                <option> Liechtenstein </option>
                                <option> Lituanie </option>
                                <option> Luxembourg </option>
                                <option> Madagascar </option>
                                <option> Malaisie </option>
                                <option> Malawi </option>
                                <option> Maldives </option>
                                <option> Mali </option>
                                <option> Malte </option>
                                <option> Maroc </option>
                                <option> Maurice </option>
                                <option> Mauritanie </option>
                                <option> Mexique </option>
                                <option> Micronésie, (Etats fédérés de) </option>
                                <option> Moldova, (République de) </option>
                                <option> Monaco </option>
                                <option> Mongolie </option>
                                <option> Mozambique </option>
                                <option> Myanmar </option>
                                <option> Namibie </option>
                                <option> Nauru </option>
                                <option> Népal </option>
                                <option> Nicaragua </option>
                                <option> Niger </option>
                                <option> Nigéria </option>
                                <option> Nioué </option>
                                <option> Norvège </option>
                                <option> Nouvelle-Zélande </option>
                                <option> Oman </option>
                                <option> Ouganda </option>
                                <option> Ouzbékistan </option>
                                <option> Pakistan </option>
                                <option> Palaos </option>
                                <option> Panama </option>
                                <option> Papouasie-Nouvelle Guinée </option>
                                <option> Paraguay </option>
                                <option> Pays-Bas </option>
                                <option> Pérou </option>
                                <option> Philippines </option>
                                <option> Pologne </option>
                                <option> Portugal </option>
                                <option> Qatar </option>
                                <option> Rép. démocratique populaire lao </option>
                                <option> République centrafricaine </option>
                                <option> République dominicaine </option>
                                <option> République tchèque </option>
                                <option> Roumanie </option>
                                <option> Royaume-Uni </option>
                                <option> Russie, (Fédération de) </option>
                                <option> Rwanda </option>
                                <option> Sainte-Lucie </option>
                                <option> Saint-Kitts-et-Nevis </option>
                                <option> Saint-Marin </option>
                                <option> Saint-Siège </option>
                                <option> Saint-Vincent-et-Grenadines </option>
                                <option> Samoa </option>
                                <option> Sao Tomé-et-Principe </option>
                                <option> Sénégal </option>
                                <option> Serbie-et-Monténégro </option>
                                <option> Seychelles </option>
                                <option> Sierra Leone </option>
                                <option> Singapour </option>
                                <option> Slovaquie </option>
                                <option> Slovénie </option>
                                <option> Somalie </option>
                                <option> Soudan </option>
                                <option> Sri Lanka </option>
                                <option> Suède </option>
                                <option> Suisse </option>
                                <option> Suriname </option>
                                <option> Swaziland </option>
                                <option> Syrie, (République arabe de) </option>
                                <option> Tadjikistan </option>
                                <option> Tanzanie, (République-Unie de) </option>
                                <option> Tchad </option>
                                <option> Territoire palestinien occupé </option>
                                <option> Thaïlande </option>
                                <option> Timor-Leste </option>
                                <option> Togo </option>
                                <option> Tonga </option>
                                <option> Trinité-et-Tobago </option>
                                <option> Tunisie </option>
                                <option> Turkménistan </option>
                                <option> Turquie </option>
                                <option> Tuvalu </option>
                                <option> Ukraine </option>
                                <option> Uruguay </option>
                                <option> Vanuatu </option>
                                <option> Venezuela </option>
                                <option> Viet Nam </option>
                                <option> Yémen </option>
                                <option> Zambie </option>
                                <option> Zimbabwe </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputLongDescription">Profil recherché</label>
                    <textarea class="form-control large" name="profil" placeholder="Indiquez le profil recherché"
                        rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputLongDescription">Décrire le poste</label>
                    <textarea class="form-control large" name="description"
                        placeholder="Lister les missions principales et actions à réaliser sur le poste à pourvoir, vous pouvez également indiquer le rattachement hiéarchique du poste."
                        rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputLongDescription">Aspects particuliers (facultatif)</label>
                    <textarea class="form-control large" name="aspect"
                        placeholder="Préciser ensuite les aspects particuliers s’il y en a : horaires de travail (travail en équipe, travail de nuit, horaires décalés, etc…), déplacements professionnels (étendue géographique et fréquence), astreintes, contraintes spécifiques (manipulation de produits dangereux, travail sur chantier ou en atelier, etc…), etc…"
                        rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="exampleInputCompany">Type de poste</label>
                            <select class="form-control" id="sel1" name="type" required>
                                <option>Freelance / Indépendant</option>
                                <option>Contrat à durée indeterminée</option>
                                <option>Contrat à durée determinée</option>
                                <option>Temps plein</option>
                                <option>Temps partiel</option>
                                <option>Intérim</option>
                                <option>Apprentissage</option>
                                <option>Contrat pro</option>
                                <option>Stage</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="exampleInputCompany">Prise de poste</label>
                            <select class="form-control" id="sel1" name="disponibilite" required>
                                <option>Immédiat</option>
                                <option>Dans moins de 3 jours</option>
                                <option>Dans moins de 7 jours</option>
                                <option>Dans moins de 14 jours</option>
                                <option>Dans moins d'un mois</option>
                                <option>Plus d'un mois</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="exampleInputCompany">Niveaux d'études</label>
                            <select class="form-control" id="sel1" name="diplome" required>
                                <option>Pas necessaire</option>
                                <option>CAP, BEP</option>
                                <option>Baccalauréat</option>
                                <option>DEUG, BTS, DUT, DEUST</option>
                                <option>Licence, Licence LMD, licence professionnelle</option>
                                <option>Maîtrise</option>
                                <option>Master, DEA, DESS, diplôme d'ingénieur</option>
                                <option>Doctorat, habilitation à diriger des recherches</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label for="exampleInputCompany">Salaire mensuel</label>
                            <input type="text" class="form-control" name="salaire" placeholder="Ex: 2800" required />
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn Post-Job-Offer">Poster l'offre</button>
        </div>
    </div>
    </form>
    </div>
    </div>
</section>

@endsection