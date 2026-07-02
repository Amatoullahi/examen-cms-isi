<?php
/*
Template Name: Formations Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formations - ISI SUPTECH</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<script>
  tailwind.config = {
    theme: { extend: {
      colors: {
        primary:'#1f4085','primary-dark':'#162e5f','primary-mid':'#3a589e',
        'primary-light':'#dae2ff',gold:'#ffba2d','gold-light':'#fff3d0',
        surface:'#f7f9fb','surface-low':'#f2f4f6'
      },
      fontFamily: { display:['"Public Sans"','sans-serif'], body:['Inter','sans-serif'] }
    }}
  }
</script>
<style>
  *{box-sizing:border-box}
  .material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;vertical-align:middle;display:inline-block}
  .nav-link{position:relative}
  .nav-link::after{content:'';position:absolute;bottom:-2px;left:0;width:0;height:2px;background:#1f4085;transition:width .25s ease}
  .nav-link:hover::after,.nav-link.active::after{width:100%}
  .card-lift{transition:transform .25s ease,box-shadow .25s ease}
  .card-lift:hover{transform:translateY(-5px);box-shadow:0 24px 64px rgba(31,64,133,.12)}
  .img-zoom-wrap{overflow:hidden}
  .img-zoom-wrap img{transition:transform .55s ease}
  .card-lift:hover .img-zoom-wrap img{transform:scale(1.07)}
  .badge{display:inline-flex;align-items:center;gap:4px;padding:3px 11px;border-radius:9999px;font-size:11px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
  @keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
  .anim-1{opacity:0;animation:fadeInUp .7s .15s ease forwards}
  .anim-2{opacity:0;animation:fadeInUp .7s .30s ease forwards}
  .anim-3{opacity:0;animation:fadeInUp .7s .45s ease forwards}
  ::-webkit-scrollbar{width:5px}
  ::-webkit-scrollbar-thumb{background:#3a589e;border-radius:3px}
  .filter-btn{transition:all .2s}
  .filter-btn.active{background:#1f4085;color:#fff}
</style>
</head>
<body class="bg-surface font-body text-gray-900 antialiased">

<!-- HEADER -->
<header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
    <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-3 group flex-shrink-0">
      <div class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center text-white font-black text-[15px] shadow-lg group-hover:bg-primary-mid transition-colors duration-200">IS</div>
      <div class="hidden sm:block">
        <div class="font-display font-extrabold text-xl text-primary tracking-tight leading-none">ISI SUPTECH</div>
        <div class="text-[10px] text-slate-400 font-semibold tracking-widest uppercase">Institut Superieur d'Informatique</div>
      </div>
    </a>
    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?php echo home_url('/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Accueil</a>
      <a href="<?php echo home_url('/formations/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">Formations</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Admissions</a>
      <a href="<?php echo home_url('/vie-etudiante/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Vie Etudiante</a>
      <a href="<?php echo home_url('/a-propos/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Contact</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary transition-colors px-3">Espace Etudiant</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md hover:shadow-lg transition-all">S'inscrire</a>
    </div>
  </div>
</header>

<!-- PAGE HERO -->
<section class="relative bg-primary-dark overflow-hidden py-24">
  <div class="absolute inset-0 opacity-20" style="background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,.3) 1px,transparent 0);background-size:32px 32px"></div>
  <div class="absolute right-0 top-0 w-1/2 h-full opacity-10">
    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=900&q=70" class="w-full h-full object-cover" alt="">
  </div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="badge bg-gold/20 text-gold border border-gold/30 mb-5 anim-1">
      <span class="material-symbols-outlined" style="font-size:13px">book</span>
      Catalogue complet
    </div>
    <h1 class="font-display font-black text-white text-5xl leading-tight mb-4 anim-2">Nos Formations</h1>
    <p class="text-white/70 text-lg max-w-xl anim-3">Des programmes d'excellence de Bac+2 a Bac+5, concus pour repondre aux besoins du marche africain et international des technologies de l'information.</p>
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 mt-8 text-sm text-white/50">
      <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">Accueil</a>
      <span class="material-symbols-outlined text-white/30" style="font-size:16px">chevron_right</span>
      <span class="text-white/80">Formations</span>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="bg-white border-b border-slate-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 py-5 grid grid-cols-2 md:grid-cols-4 gap-6 divide-x divide-slate-100">
    <div class="px-6 first:pl-0 text-center">
      <div class="font-display font-black text-3xl text-primary">12</div>
      <div class="text-xs text-slate-500 font-medium mt-1">Programmes disponibles</div>
    </div>
    <div class="px-6 text-center">
      <div class="font-display font-black text-3xl text-primary">5</div>
      <div class="text-xs text-slate-500 font-medium mt-1">Domaines de specialite</div>
    </div>
    <div class="px-6 text-center">
      <div class="font-display font-black text-3xl text-primary">Bac+2</div>
      <div class="text-xs text-slate-500 font-medium mt-1">Niveau d'entree minimum</div>
    </div>
    <div class="px-6 text-center">
      <div class="font-display font-black text-3xl text-primary">94%</div>
      <div class="text-xs text-slate-500 font-medium mt-1">Insertion professionnelle</div>
    </div>
  </div>
</div>

<!-- FILTRES + GRILLE -->
<section class="max-w-7xl mx-auto px-6 py-16">

  <!-- Filtres -->
  <div class="flex flex-wrap gap-3 mb-12">
    <span class="text-sm font-semibold text-slate-500 self-center mr-2">Filtrer :</span>
    <button class="filter-btn active px-5 py-2 rounded-full border border-primary text-sm font-semibold">Tous</button>
    <button class="filter-btn px-5 py-2 rounded-full border border-slate-200 text-slate-600 text-sm font-semibold bg-white hover:border-primary hover:text-primary">Informatique</button>
    <button class="filter-btn px-5 py-2 rounded-full border border-slate-200 text-slate-600 text-sm font-semibold bg-white hover:border-primary hover:text-primary">Reseaux</button>
    <button class="filter-btn px-5 py-2 rounded-full border border-slate-200 text-slate-600 text-sm font-semibold bg-white hover:border-primary hover:text-primary">Management</button>
    <button class="filter-btn px-5 py-2 rounded-full border border-slate-200 text-slate-600 text-sm font-semibold bg-white hover:border-primary hover:text-primary">Master</button>
    <button class="filter-btn px-5 py-2 rounded-full border border-slate-200 text-slate-600 text-sm font-semibold bg-white hover:border-primary hover:text-primary">BTS</button>
  </div>

  <!-- Section : Licences & BTS -->
  <h2 class="font-display font-bold text-2xl text-gray-800 mb-6 flex items-center gap-2">
    <span class="w-1 h-6 bg-primary rounded-full inline-block"></span>
    Licences & BTS (Bac+2 a Bac+3)
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7 mb-16">

    <!-- Carte 1 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=600&q=70" class="w-full h-full object-cover" alt="Licence Informatique">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-primary-light text-primary">Bac+3</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Informatique</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Licence en Informatique</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Algorithmes, structures de donnees, POO, bases de donnees, developpement web et systemes d'exploitation.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 3 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 45 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Carte 2 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=70" class="w-full h-full object-cover" alt="Reseaux Telecoms">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-primary-light text-primary">Bac+3</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Reseaux</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Licence Reseaux & Telecoms</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Architecture reseau, protocols TCP/IP, securite reseau, administration systemes, VoIP et telecommunications.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 3 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 40 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Carte 3 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=70" class="w-full h-full object-cover" alt="BTS Informatique">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-gold-light text-yellow-800">Bac+2</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">BTS</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">BTS Informatique de Gestion</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Gestion de projets informatiques, comptabilite informatisee, ERP, bureautique avancee et developpement d'applications de gestion.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 2 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 50 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Carte 4 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=70" class="w-full h-full object-cover" alt="Data Science">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-primary-light text-primary">Bac+3</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Data</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Licence Data Science & BI</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Python, R, SQL avance, machine learning, visualisation de donnees, Power BI, Tableau et analyse statistique.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 3 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 35 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Carte 5 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=70" class="w-full h-full object-cover" alt="Cybersecurite">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-primary-light text-primary">Bac+3</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Securite</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Licence Cybersecurite</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Securite offensive, defensive, ethical hacking, forensics numerique, cryptographie, RGPD et gestion des risques SI.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 3 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 30 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Carte 6 -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=600&q=70" class="w-full h-full object-cover" alt="Management SI">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-primary-light text-primary">Bac+3</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Management</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Licence Management des SI</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Gouvernance IT, ITIL, conduite du changement, gestion de projets agile, Scrum, audit informatique.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 3 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 40 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

  </div>

  <!-- Section Masters -->
  <h2 class="font-display font-bold text-2xl text-gray-800 mb-6 flex items-center gap-2">
    <span class="w-1 h-6 bg-gold rounded-full inline-block"></span>
    Masters (Bac+5) - Programmes d'excellence
  </h2>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-7">

    <!-- Master RESI - Featured -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-primary-dark rounded-2xl overflow-hidden border border-primary/20 shadow-lg flex flex-col group col-span-1 lg:col-span-2">
      <div class="flex flex-col lg:flex-row">
        <div class="img-zoom-wrap lg:w-2/5 h-56 lg:h-auto">
          <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=70" class="w-full h-full object-cover" alt="Master RESI">
        </div>
        <div class="p-8 flex flex-col justify-between flex-1">
          <div>
            <div class="flex items-center gap-2 mb-4">
              <span class="badge bg-gold text-gray-900">Bac+5 Master</span>
              <span class="badge bg-white/10 text-white/80 border border-white/20">Programme Phare</span>
            </div>
            <h3 class="font-display font-black text-2xl text-white mb-3 group-hover:text-gold transition-colors">Master RESI - Reseaux, Systemes & Infrastructure</h3>
            <p class="text-white/65 leading-relaxed mb-6">Le programme d'excellence d'ISI SUPTECH. Formation intensive aux architectures cloud hybrides, DevSecOps, Zero Trust, et gestion des infrastructures critiques a grande echelle.</p>
            <div class="grid grid-cols-3 gap-4 mb-6">
              <div class="text-center p-3 bg-white/5 rounded-xl">
                <div class="font-black text-gold text-xl">2 ans</div>
                <div class="text-white/50 text-xs mt-1">Duree</div>
              </div>
              <div class="text-center p-3 bg-white/5 rounded-xl">
                <div class="font-black text-gold text-xl">25</div>
                <div class="text-white/50 text-xs mt-1">Places</div>
              </div>
              <div class="text-center p-3 bg-white/5 rounded-xl">
                <div class="font-black text-gold text-xl">98%</div>
                <div class="text-white/50 text-xs mt-1">Emploi</div>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <span class="bg-gold hover:bg-yellow-400 text-gray-900 px-6 py-2.5 rounded-xl text-sm font-bold transition-colors cursor-pointer">Decouvrir le Master</span>
            <span class="text-white/60 text-sm">Entree selective sur dossier</span>
          </div>
        </div>
      </div>
    </a>

    <!-- Master Dev -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1555099962-4199c345e5dd?w=600&q=70" class="w-full h-full object-cover" alt="Master Dev">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-gold-light text-yellow-800">Bac+5</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">Developpement</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Master Ingenierie Logicielle</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Architecture microservices, DevOps CI/CD, cloud natif, conception avancee, gestion de projets complexes.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 2 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 25 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

    <!-- Master IA -->
    <a href="<?php echo home_url('/formation-detail/'); ?>" class="card-lift bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm flex flex-col group">
      <div class="img-zoom-wrap h-48">
        <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=600&q=70" class="w-full h-full object-cover" alt="Master IA">
      </div>
      <div class="p-6 flex flex-col flex-1">
        <div class="flex items-center gap-2 mb-3">
          <span class="badge bg-gold-light text-yellow-800">Bac+5</span>
          <span class="badge bg-surface text-slate-500 border border-slate-200">IA & Data</span>
        </div>
        <h3 class="font-display font-bold text-lg text-gray-900 mb-2 group-hover:text-primary transition-colors">Master Intelligence Artificielle</h3>
        <p class="text-slate-500 text-sm leading-relaxed flex-1">Deep learning, NLP, computer vision, MLOps, IA generative et deploiement de modeles en production.</p>
        <div class="mt-5 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">schedule</span> 2 ans</span>
          <span class="flex items-center gap-1"><span class="material-symbols-outlined" style="font-size:15px">group</span> 20 places</span>
          <span class="text-primary font-semibold">Voir le programme &rarr;</span>
        </div>
      </div>
    </a>

  </div>

</section>

<!-- CTA ADMISSIONS -->
<section class="bg-primary py-16">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-8">
    <div>
      <h2 class="font-display font-black text-3xl text-white mb-2">Pret a rejoindre ISI SUPTECH ?</h2>
      <p class="text-white/70">Les candidatures pour l'annee 2024-2025 sont ouvertes. Places limitees.</p>
    </div>
    <div class="flex gap-4 flex-shrink-0">
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-gold hover:bg-yellow-400 text-gray-900 px-8 py-3 rounded-xl font-bold text-sm transition-colors">Candidater maintenant</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-8 py-3 rounded-xl font-bold text-sm transition-colors">Nous contacter</a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-primary-dark text-white/60 py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
    <div class="md:col-span-2">
      <div class="flex items-center gap-3 mb-4">
        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white font-black text-sm">IS</div>
        <span class="font-display font-extrabold text-lg text-white">ISI SUPTECH</span>
      </div>
      <p class="text-sm leading-relaxed mb-4">Institut Superieur d'Informatique et de Technologie. Former les experts numeriques du continent africain depuis 2003.</p>
    </div>
    <div>
      <h4 class="font-display font-bold text-white text-sm mb-4">Navigation</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">Accueil</a></li>
        <li><a href="<?php echo home_url('/formations/'); ?>" class="hover:text-white transition-colors">Formations</a></li>
        <li><a href="<?php echo home_url('/admissions/'); ?>" class="hover:text-white transition-colors">Admissions</a></li>
        <li><a href="<?php echo home_url('/vie-etudiante/'); ?>" class="hover:text-white transition-colors">Vie Etudiante</a></li>
        <li><a href="<?php echo home_url('/actualites/'); ?>" class="hover:text-white transition-colors">Actualites</a></li>
        <li><a href="<?php echo home_url('/a-propos/'); ?>" class="hover:text-white transition-colors">A Propos</a></li>
        <li><a href="<?php echo home_url('/contact/'); ?>" class="hover:text-white transition-colors">Contact</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-display font-bold text-white text-sm mb-4">Contact</h4>
      <ul class="space-y-2 text-sm">
        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px;margin-top:2px">location_on</span>Abidjan, Cocody - Cote d'Ivoire</li>
        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px;margin-top:2px">phone</span>+225 27 22 XX XX XX</li>
        <li class="flex items-start gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px;margin-top:2px">mail</span>contact@isi-suptech.ci</li>
      </ul>
    </div>
  </div>
  <div class="max-w-7xl mx-auto px-6 mt-8 pt-6 border-t border-white/10 text-center text-xs">
    &copy; 2025 ISI SUPTECH. Tous droits reserves.
  </div>
</footer>

</body>
</html>
