<?php
/*
Template Name: Formation Detail Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Licence Informatique - ISI SUPTECH</title>
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
        surface:'#f7f9fb'
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
  .badge{display:inline-flex;align-items:center;gap:4px;padding:3px 11px;border-radius:9999px;font-size:11px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
  @keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
  .anim-1{opacity:0;animation:fadeInUp .7s .15s ease forwards}
  .anim-2{opacity:0;animation:fadeInUp .7s .30s ease forwards}
  .anim-3{opacity:0;animation:fadeInUp .7s .45s ease forwards}
  .tab-btn.active{background:#1f4085;color:#fff}
  .tab-content{display:none}
  .tab-content.active{display:block}
  ::-webkit-scrollbar{width:5px}
  ::-webkit-scrollbar-thumb{background:#3a589e;border-radius:3px}
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

<!-- HERO FORMATION -->
<section class="relative bg-primary-dark overflow-hidden">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=1600&q=70" class="w-full h-full object-cover opacity-20" alt="">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark via-primary-dark/90 to-primary-dark/50"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-6 py-20">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 mb-6 text-sm text-white/50">
      <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">Accueil</a>
      <span class="material-symbols-outlined text-white/30" style="font-size:16px">chevron_right</span>
      <a href="<?php echo home_url('/formations/'); ?>" class="hover:text-white transition-colors">Formations</a>
      <span class="material-symbols-outlined text-white/30" style="font-size:16px">chevron_right</span>
      <span class="text-white/80">Licence Informatique</span>
    </div>
    <div class="flex flex-col lg:flex-row gap-12 items-start">
      <div class="flex-1">
        <div class="flex items-center gap-2 mb-4 anim-1">
          <span class="badge bg-primary-light text-primary">Bac+3 - Licence</span>
          <span class="badge bg-gold/20 text-gold border border-gold/30">Informatique</span>
        </div>
        <h1 class="font-display font-black text-white text-5xl leading-tight mb-5 anim-2">Licence en<br>Informatique</h1>
        <p class="text-white/70 text-lg leading-relaxed max-w-xl mb-8 anim-3">Une formation solide et polyvalente qui couvre l'ensemble du spectre informatique : programmation, bases de donnees, systemes, reseaux et developpement web.</p>
        <div class="flex flex-wrap gap-4 anim-3">
          <a href="<?php echo home_url('/admissions/'); ?>" class="bg-gold hover:bg-yellow-400 text-gray-900 px-7 py-3 rounded-xl font-bold text-sm transition-colors">Candidater</a>
          <a href="#programme" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-7 py-3 rounded-xl font-bold text-sm transition-colors">Voir le programme</a>
        </div>
      </div>
      <!-- Fiche rapide -->
      <div class="bg-white/10 backdrop-blur border border-white/15 rounded-2xl p-7 w-full lg:w-80 flex-shrink-0">
        <h3 class="font-display font-bold text-white text-base mb-5">Fiche formation</h3>
        <ul class="space-y-4">
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">schedule</span><div><div class="text-white/50 text-xs">Duree</div><div class="text-white font-semibold">3 ans (6 semestres)</div></div></li>
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">school</span><div><div class="text-white/50 text-xs">Diplome</div><div class="text-white font-semibold">Licence d'Informatique d'Etat</div></div></li>
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">group</span><div><div class="text-white/50 text-xs">Capacite d'accueil</div><div class="text-white font-semibold">45 etudiants / promotion</div></div></li>
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">payments</span><div><div class="text-white/50 text-xs">Frais de scolarite</div><div class="text-white font-semibold">1 800 000 FCFA / an</div></div></li>
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">work</span><div><div class="text-white/50 text-xs">Insertion pro</div><div class="text-white font-semibold">92% en 6 mois</div></div></li>
          <li class="flex items-center gap-3 text-sm"><span class="material-symbols-outlined text-gold" style="font-size:20px">event</span><div><div class="text-white/50 text-xs">Rentree</div><div class="text-white font-semibold">Octobre 2025</div></div></li>
        </ul>
        <a href="<?php echo home_url('/admissions/'); ?>" class="mt-6 w-full bg-gold hover:bg-yellow-400 text-gray-900 py-2.5 rounded-xl font-bold text-sm transition-colors text-center block">Dossier de candidature</a>
      </div>
    </div>
  </div>
</section>

<!-- ONGLETS CONTENU -->
<section id="programme" class="max-w-7xl mx-auto px-6 py-16">

  <!-- Tab nav -->
  <div class="flex flex-wrap gap-2 mb-10 bg-white border border-slate-100 rounded-xl p-1.5 shadow-sm w-fit">
    <button class="tab-btn active px-5 py-2 rounded-lg text-sm font-semibold transition-all" onclick="showTab('programme')">Programme</button>
    <button class="tab-btn px-5 py-2 rounded-lg text-sm font-semibold text-slate-500 hover:text-primary transition-all" onclick="showTab('debouches')">Debouches</button>
    <button class="tab-btn px-5 py-2 rounded-lg text-sm font-semibold text-slate-500 hover:text-primary transition-all" onclick="showTab('temoignages')">Temoignages</button>
    <button class="tab-btn px-5 py-2 rounded-lg text-sm font-semibold text-slate-500 hover:text-primary transition-all" onclick="showTab('admission')">Admission</button>
  </div>

  <!-- Tab : Programme -->
  <div id="tab-programme" class="tab-content active">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 space-y-6">

        <!-- S1-S2 -->
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
          <div class="bg-primary/5 border-b border-slate-100 px-6 py-4 flex items-center gap-3">
            <span class="w-8 h-8 bg-primary text-white rounded-lg flex items-center justify-center font-bold text-sm flex-shrink-0">1</span>
            <h3 class="font-display font-bold text-gray-900">1ere Annee - Fondamentaux</h3>
          </div>
          <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">terminal</span><div><div class="font-semibold text-gray-800">Algorithmique & Structures de donnees</div><div class="text-slate-500 text-xs">60h CM + 40h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">code</span><div><div class="font-semibold text-gray-800">Programmation C/Java</div><div class="text-slate-500 text-xs">50h CM + 60h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">storage</span><div><div class="font-semibold text-gray-800">Bases de donnees relationnelles</div><div class="text-slate-500 text-xs">40h CM + 40h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">computer</span><div><div class="font-semibold text-gray-800">Architecture des ordinateurs</div><div class="text-slate-500 text-xs">40h CM + 20h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">calculate</span><div><div class="font-semibold text-gray-800">Mathematiques pour l'informatique</div><div class="text-slate-500 text-xs">60h CM</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">language</span><div><div class="font-semibold text-gray-800">Anglais Technique</div><div class="text-slate-500 text-xs">40h CM + TP</div></div></div>
          </div>
        </div>

        <!-- S3-S4 -->
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
          <div class="bg-primary/5 border-b border-slate-100 px-6 py-4 flex items-center gap-3">
            <span class="w-8 h-8 bg-primary text-white rounded-lg flex items-center justify-center font-bold text-sm flex-shrink-0">2</span>
            <h3 class="font-display font-bold text-gray-900">2eme Annee - Approfondissement</h3>
          </div>
          <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">hub</span><div><div class="font-semibold text-gray-800">Reseaux informatiques</div><div class="text-slate-500 text-xs">50h CM + 40h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">web</span><div><div class="font-semibold text-gray-800">Developpement Web (HTML/CSS/JS/PHP)</div><div class="text-slate-500 text-xs">40h CM + 60h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">developer_mode</span><div><div class="font-semibold text-gray-800">POO avancee & Patterns</div><div class="text-slate-500 text-xs">50h CM + 50h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">dns</span><div><div class="font-semibold text-gray-800">Systemes d'exploitation</div><div class="text-slate-500 text-xs">40h CM + 30h TP</div></div></div>
          </div>
        </div>

        <!-- S5-S6 -->
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
          <div class="bg-primary/5 border-b border-slate-100 px-6 py-4 flex items-center gap-3">
            <span class="w-8 h-8 bg-gold text-gray-900 rounded-lg flex items-center justify-center font-bold text-sm flex-shrink-0">3</span>
            <h3 class="font-display font-bold text-gray-900">3eme Annee - Specialisation + Projet</h3>
          </div>
          <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">smartphone</span><div><div class="font-semibold text-gray-800">Developpement Mobile (Android/iOS)</div><div class="text-slate-500 text-xs">40h CM + 60h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">cloud</span><div><div class="font-semibold text-gray-800">Cloud Computing & DevOps</div><div class="text-slate-500 text-xs">30h CM + 40h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-surface rounded-lg"><span class="material-symbols-outlined text-primary" style="font-size:18px">shield</span><div><div class="font-semibold text-gray-800">Introduction a la Cybersecurite</div><div class="text-slate-500 text-xs">30h CM + 20h TP</div></div></div>
            <div class="flex items-start gap-3 text-sm p-3 bg-gold-light/60 rounded-lg border border-gold/20"><span class="material-symbols-outlined text-yellow-700" style="font-size:18px">description</span><div><div class="font-semibold text-gray-800">Projet de fin d'etudes + Stage</div><div class="text-slate-500 text-xs">3 mois entreprise</div></div></div>
          </div>
        </div>
      </div>

      <!-- Sidebar compétences -->
      <div class="space-y-5">
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
          <h4 class="font-display font-bold text-gray-900 mb-4">Competences acquises</h4>
          <ul class="space-y-2 text-sm">
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Developpement logiciel multi-langages</li>
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Conception et administration BDD</li>
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Architecture reseaux TCP/IP</li>
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Developpement web fullstack</li>
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Gestion de projets informatiques</li>
            <li class="flex items-center gap-2 text-slate-600"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check_circle</span>Administration systemes Linux/Windows</li>
          </ul>
        </div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
          <h4 class="font-display font-bold text-gray-900 mb-4">Technologies enseignees</h4>
          <div class="flex flex-wrap gap-2">
            <span class="badge bg-surface text-slate-600 border border-slate-200">Java</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">Python</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">PHP</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">MySQL</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">React</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">Linux</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">Docker</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">Git</span>
            <span class="badge bg-surface text-slate-600 border border-slate-200">Android</span>
          </div>
        </div>
        <div class="bg-primary rounded-2xl p-6 text-white">
          <h4 class="font-display font-bold text-base mb-3">Prochaine rentre</h4>
          <div class="text-3xl font-black text-gold mb-1">Octobre 2025</div>
          <p class="text-white/60 text-sm mb-4">Cloture des dossiers : 30 Aout 2025</p>
          <a href="<?php echo home_url('/admissions/'); ?>" class="block w-full text-center bg-gold hover:bg-yellow-400 text-gray-900 py-2.5 rounded-xl font-bold text-sm transition-colors">Candidater maintenant</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Tab : Debouches -->
  <div id="tab-debouches" class="tab-content">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
        <div class="w-14 h-14 bg-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4"><span class="material-symbols-outlined text-primary">developer_mode</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Developpeur Logiciel</h3>
        <p class="text-slate-500 text-sm">Conception et developpement d'applications web, mobile et desktop pour les entreprises.</p>
        <div class="mt-4 font-bold text-primary text-lg">700k - 1.2M FCFA/mois</div>
      </div>
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
        <div class="w-14 h-14 bg-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4"><span class="material-symbols-outlined text-primary">hub</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Administrateur Systemes</h3>
        <p class="text-slate-500 text-sm">Gestion et maintenance des infrastructures informatiques, serveurs et reseaux d'entreprise.</p>
        <div class="mt-4 font-bold text-primary text-lg">600k - 1.0M FCFA/mois</div>
      </div>
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
        <div class="w-14 h-14 bg-primary-light rounded-2xl flex items-center justify-center mx-auto mb-4"><span class="material-symbols-outlined text-primary">support_agent</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Technicien Support N2/N3</h3>
        <p class="text-slate-500 text-sm">Support utilisateur avance, diagnostic et resolution des incidents complexes.</p>
        <div class="mt-4 font-bold text-primary text-lg">500k - 800k FCFA/mois</div>
      </div>
    </div>
  </div>

  <!-- Tab : Temoignages -->
  <div id="tab-temoignages" class="tab-content">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7">
        <div class="flex items-center gap-1 mb-4">
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
        </div>
        <p class="text-slate-600 italic mb-5">"La Licence en Informatique d'ISI m'a donne une base solide. Moins de 3 mois apres l'obtention de mon diplome, j'etais recrute dans une multinationale comme developpeur senior."</p>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-primary-light flex items-center justify-center font-bold text-primary text-sm">KA</div>
          <div><div class="font-semibold text-gray-900 text-sm">Koffi Adjei</div><div class="text-xs text-slate-500">Promo 2022 - Developpeur chez Orange CI</div></div>
        </div>
      </div>
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7">
        <div class="flex items-center gap-1 mb-4">
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
          <span class="material-symbols-outlined text-gold text-xl" style="font-variation-settings:'FILL' 1">star</span>
        </div>
        <p class="text-slate-600 italic mb-5">"Les TP intensifs en laboratoire m'ont permis d'arriver en entreprise avec une experience concrete. Les projets de groupe simulaient de vrais contextes professionnels."</p>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-gold-light flex items-center justify-center font-bold text-yellow-800 text-sm">FD</div>
          <div><div class="font-semibold text-gray-900 text-sm">Fatoumata Diallo</div><div class="text-xs text-slate-500">Promo 2023 - Admise en Master RESI</div></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tab : Admission -->
  <div id="tab-admission" class="tab-content">
    <div class="max-w-2xl bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
      <h3 class="font-display font-bold text-xl text-gray-900 mb-6">Conditions d'admission</h3>
      <ul class="space-y-4">
        <li class="flex items-start gap-3 text-sm text-slate-600"><span class="material-symbols-outlined text-primary" style="font-size:20px">check_circle</span><div><strong>Baccalaureat scientifique ou technique</strong> (C, D, E, F2, F3) avec mention Passable minimum.</div></li>
        <li class="flex items-start gap-3 text-sm text-slate-600"><span class="material-symbols-outlined text-primary" style="font-size:20px">check_circle</span><div><strong>Entretien de motivation</strong> - evaluation des aptitudes et de la motivation du candidat.</div></li>
        <li class="flex items-start gap-3 text-sm text-slate-600"><span class="material-symbols-outlined text-primary" style="font-size:20px">check_circle</span><div><strong>Test de logique</strong> (QCM de 45 minutes) portant sur la logique mathematique et la culture numerique.</div></li>
        <li class="flex items-start gap-3 text-sm text-slate-600"><span class="material-symbols-outlined text-primary" style="font-size:20px">check_circle</span><div><strong>Dossier complet</strong> : copies de releves de notes, photocopies de pieces d'identite, lettre de motivation.</div></li>
      </ul>
      <a href="<?php echo home_url('/admissions/'); ?>" class="mt-7 inline-flex items-center gap-2 bg-primary hover:bg-primary-mid text-white px-7 py-3 rounded-xl font-bold text-sm transition-colors">
        <span class="material-symbols-outlined" style="font-size:18px">description</span>
        Deposer ma candidature
      </a>
    </div>
  </div>

</section>

<!-- FOOTER -->
<footer class="bg-primary-dark text-white/60 py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
    <div class="md:col-span-2">
      <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center text-white font-black text-sm">IS</div><span class="font-display font-extrabold text-lg text-white">ISI SUPTECH</span></div>
      <p class="text-sm leading-relaxed">Institut Superieur d'Informatique et de Technologie. Former les experts numeriques du continent africain depuis 2003.</p>
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
  <div class="max-w-7xl mx-auto px-6 mt-8 pt-6 border-t border-white/10 text-center text-xs">&copy; 2025 ISI SUPTECH. Tous droits reserves.</div>
</footer>

<script>
function showTab(name) {
  document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
  document.getElementById('tab-' + name).classList.add('active');
  event.target.classList.add('active');
}
</script>
</body>
</html>
