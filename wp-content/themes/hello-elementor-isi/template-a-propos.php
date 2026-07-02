<?php
/*
Template Name: A Propos Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>A Propos - ISI SUPTECH</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<script>
  tailwind.config = {
    theme: { extend: {
      colors: { primary:'#1f4085','primary-dark':'#162e5f','primary-mid':'#3a589e','primary-light':'#dae2ff',gold:'#ffba2d','gold-light':'#fff3d0',surface:'#f7f9fb' },
      fontFamily: { display:['"Public Sans"','sans-serif'], body:['Inter','sans-serif'] }
    }}
  }
</script>
<style>
  *{box-sizing:border-box}
  .material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 24;vertical-align:middle;display:inline-block}
  .nav-link{position:relative}.nav-link::after{content:'';position:absolute;bottom:-2px;left:0;width:0;height:2px;background:#1f4085;transition:width .25s ease}
  .nav-link:hover::after,.nav-link.active::after{width:100%}
  .badge{display:inline-flex;align-items:center;gap:4px;padding:3px 11px;border-radius:9999px;font-size:11px;font-weight:700;letter-spacing:.06em;text-transform:uppercase}
  .card-lift{transition:transform .25s ease,box-shadow .25s ease}
  .card-lift:hover{transform:translateY(-5px);box-shadow:0 24px 64px rgba(31,64,133,.12)}
  @keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
  .anim-1{opacity:0;animation:fadeInUp .7s .15s ease forwards}
  .anim-2{opacity:0;animation:fadeInUp .7s .30s ease forwards}
  .timeline-item::before{content:'';position:absolute;left:-29px;top:6px;width:10px;height:10px;border-radius:50%;background:#1f4085;border:2px solid #fff;box-shadow:0 0 0 3px #1f4085}
  ::-webkit-scrollbar{width:5px}
  ::-webkit-scrollbar-thumb{background:#3a589e;border-radius:3px}
</style>
</head>
<body class="bg-surface font-body text-gray-900 antialiased">

<!-- HEADER -->
<header class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
    <a href="<?php echo home_url('/'); ?>" class="flex items-center gap-3 group flex-shrink-0">
      <div class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center text-white font-black text-[15px] shadow-lg group-hover:bg-primary-mid transition-colors">IS</div>
      <div class="hidden sm:block">
        <div class="font-display font-extrabold text-xl text-primary tracking-tight leading-none">ISI SUPTECH</div>
        <div class="text-[10px] text-slate-400 font-semibold tracking-widest uppercase">Institut Superieur d'Informatique</div>
      </div>
    </a>
    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?php echo home_url('/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">Accueil</a>
      <a href="<?php echo home_url('/formations/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">Formations</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">Admissions</a>
      <a href="<?php echo home_url('/vie-etudiante/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">Vie Etudiante</a>
      <a href="<?php echo home_url('/a-propos/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">Contact</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary px-3">Espace Etudiant</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md transition-all">S'inscrire</a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="relative overflow-hidden min-h-[440px] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1600&q=70" class="w-full h-full object-cover" alt="">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark/96 to-primary-dark/70"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-6 py-24 flex flex-col lg:flex-row items-center gap-16">
    <div class="flex-1">
      <div class="badge bg-gold/20 text-gold border border-gold/30 mb-5 anim-1"><span class="material-symbols-outlined" style="font-size:13px">info</span>Notre histoire</div>
      <h1 class="font-display font-black text-white text-5xl leading-tight mb-4 anim-2">A Propos d'ISI SUPTECH</h1>
      <p class="text-white/70 text-lg leading-relaxed max-w-xl anim-2">Depuis 2003, ISI SUPTECH forme les meilleurs specialistes IT d'Afrique de l'Ouest. Plus de 5000 laureats dans 18 pays. Une institution de reference.</p>
    </div>
    <div class="grid grid-cols-2 gap-4 flex-shrink-0 w-full lg:w-80">
      <div class="bg-white/10 border border-white/15 rounded-2xl p-5 text-center"><div class="font-black text-gold text-4xl">22</div><div class="text-white/60 text-xs mt-1">Annees d'existence</div></div>
      <div class="bg-white/10 border border-white/15 rounded-2xl p-5 text-center"><div class="font-black text-gold text-4xl">5k+</div><div class="text-white/60 text-xs mt-1">Laureats diplomes</div></div>
      <div class="bg-white/10 border border-white/15 rounded-2xl p-5 text-center"><div class="font-black text-gold text-4xl">18</div><div class="text-white/60 text-xs mt-1">Pays representes</div></div>
      <div class="bg-white/10 border border-white/15 rounded-2xl p-5 text-center"><div class="font-black text-gold text-4xl">85+</div><div class="text-white/60 text-xs mt-1">Enseignants experts</div></div>
    </div>
  </div>
</section>

<!-- MISSION & VALEURS -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
    <div>
      <h2 class="font-display font-black text-4xl text-gray-900 mb-5">Notre Mission</h2>
      <p class="text-slate-600 text-lg leading-relaxed mb-5">ISI SUPTECH a pour mission de former des professionnels de haut niveau, capables de concevoir, deployer et gerer les systemes d'information et les infrastructures technologiques qui soutiennent le developpement economique de l'Afrique.</p>
      <p class="text-slate-600 leading-relaxed">Nous croyons que l'education technologique de qualite est le levier le plus puissant pour la transformation numerique du continent. Chaque etudiant forme est un agent de changement potentiel.</p>
    </div>
    <div class="relative">
      <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=700&q=70" class="rounded-2xl shadow-xl w-full h-72 object-cover" alt="">
      <div class="absolute -bottom-5 -left-5 bg-primary rounded-xl p-4 shadow-xl">
        <div class="font-black text-gold text-3xl">N°1</div>
        <div class="text-white/70 text-xs">Ecole IT en Cote d'Ivoire</div>
      </div>
    </div>
  </div>

  <!-- Valeurs -->
  <h2 class="font-display font-black text-3xl text-gray-900 mb-8 text-center">Nos valeurs fondatrices</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="card-lift bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
      <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg"><span class="material-symbols-outlined text-white text-2xl">workspace_premium</span></div>
      <h3 class="font-display font-bold text-gray-900 mb-2">Excellence</h3>
      <p class="text-slate-500 text-sm">Nous visons les plus hauts standards dans l'enseignement, la recherche et l'insertion professionnelle.</p>
    </div>
    <div class="card-lift bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
      <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg"><span class="material-symbols-outlined text-white text-2xl">lightbulb</span></div>
      <h3 class="font-display font-bold text-gray-900 mb-2">Innovation</h3>
      <p class="text-slate-500 text-sm">Nous encourageons la crativite, l'entrepreneuriat technologique et la culture de l'experimentation.</p>
    </div>
    <div class="card-lift bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
      <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg"><span class="material-symbols-outlined text-white text-2xl">handshake</span></div>
      <h3 class="font-display font-bold text-gray-900 mb-2">Integrite</h3>
      <p class="text-slate-500 text-sm">L'honnetete intellectuelle, l'ethique professionnelle et le respect mutuel guident toutes nos actions.</p>
    </div>
    <div class="card-lift bg-white rounded-2xl border border-slate-100 shadow-sm p-6 text-center">
      <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg"><span class="material-symbols-outlined text-white text-2xl">public</span></div>
      <h3 class="font-display font-bold text-gray-900 mb-2">Impact Africain</h3>
      <p class="text-slate-500 text-sm">Nous formons des talents qui contribuent au developpement numerique et economique de l'Afrique.</p>
    </div>
  </div>
</section>

<!-- TIMELINE HISTORIQUE -->
<section class="bg-primary-dark py-16">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="font-display font-black text-3xl text-white mb-2">Notre histoire</h2>
    <p class="text-white/60 mb-12">Deux decennies de croissance et d'excellence</p>
    <div class="relative max-w-2xl border-l-2 border-primary-mid pl-8 ml-4">
      <div class="timeline-item relative mb-10">
        <div class="font-black text-gold text-lg mb-1">2003</div>
        <h3 class="font-display font-bold text-white mb-2">Fondation de l'ISI</h3>
        <p class="text-white/60 text-sm">Creation de l'Institut Superieur d'Informatique a Abidjan avec 3 formations et 120 etudiants. Vision : former les specialistes IT dont l'Afrique a besoin.</p>
      </div>
      <div class="timeline-item relative mb-10">
        <div class="font-black text-gold text-lg mb-1">2008</div>
        <h3 class="font-display font-bold text-white mb-2">Accreditation nationale</h3>
        <p class="text-white/60 text-sm">Obtention de l'accreditation du Ministere de l'Enseignement Superieur. Lancement des premiers programmes de Licence reconnus par l'Etat.</p>
      </div>
      <div class="timeline-item relative mb-10">
        <div class="font-black text-gold text-lg mb-1">2013</div>
        <h3 class="font-display font-bold text-white mb-2">Lancement des Masters</h3>
        <p class="text-white/60 text-sm">Ouverture du programme Master RESI, qui deviendra le fleuron de l'institution. 1000eme etudiant diplome. Demenagement sur le campus actuel de Cocody.</p>
      </div>
      <div class="timeline-item relative mb-10">
        <div class="font-black text-gold text-lg mb-1">2018</div>
        <h3 class="font-display font-bold text-white mb-2">Partenariats internationaux</h3>
        <p class="text-white/60 text-sm">Conventions avec des universites francaises (ESIEA, ISEP) et canadiennes (UQAM). Programme d'echanges etudiants. Cisco Academy officielle.</p>
      </div>
      <div class="timeline-item relative">
        <div class="font-black text-gold text-lg mb-1">2025</div>
        <h3 class="font-display font-bold text-white mb-2">ISI SUPTECH 2.0</h3>
        <p class="text-white/60 text-sm">Nouveau nom, nouveau campus, nouveau laboratoire IA. 1200 etudiants, 12 programmes, 5000+ laureats dans 18 pays. Le meilleur reste a venir.</p>
      </div>
    </div>
  </div>
</section>

<!-- EQUIPE DIRIGEANTE -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="font-display font-black text-3xl text-gray-900 mb-2 text-center">Equipe de direction</h2>
  <p class="text-slate-500 text-center mb-10">Des leaders experts au service de votre reussite</p>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden text-center">
      <div class="h-48 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=70" class="w-full h-full object-cover object-top" alt="">
      </div>
      <div class="p-5">
        <h4 class="font-display font-bold text-gray-900">Prof. Kouadio N'Dri</h4>
        <div class="text-primary text-xs font-semibold mt-1 mb-2">Directeur General</div>
        <p class="text-slate-500 text-xs">PhD Informatique - Universite de Montpellier. 20 ans d'experience dans l'enseignement superieur technologique.</p>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden text-center">
      <div class="h-48 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&q=70" class="w-full h-full object-cover object-top" alt="">
      </div>
      <div class="p-5">
        <h4 class="font-display font-bold text-gray-900">Dr. Awa Sow</h4>
        <div class="text-primary text-xs font-semibold mt-1 mb-2">Directrice Pedagogique</div>
        <p class="text-slate-500 text-xs">PhD Systemes d'Information - ESCP. Ancienne DSI chez MTN Cote d'Ivoire. Specialiste en innovation pedagogique.</p>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden text-center">
      <div class="h-48 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&q=70" class="w-full h-full object-cover object-top" alt="">
      </div>
      <div class="p-5">
        <h4 class="font-display font-bold text-gray-900">M. Ibrahima Balde</h4>
        <div class="text-primary text-xs font-semibold mt-1 mb-2">Directeur des Etudes</div>
        <p class="text-slate-500 text-xs">Ingenieur INSA Lyon. Certifie Cisco CCIE, AWS Solutions Architect. Ex-consultant Senior chez Capgemini.</p>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden text-center">
      <div class="h-48 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&q=70" class="w-full h-full object-cover object-top" alt="">
      </div>
      <div class="p-5">
        <h4 class="font-display font-bold text-gray-900">Mme Fatou Diagne</h4>
        <div class="text-primary text-xs font-semibold mt-1 mb-2">Responsable Admissions</div>
        <p class="text-slate-500 text-xs">MBA Management - EMLYON. 10 ans dans l'orientation et l'accompagnement etudiant dans les ecoles d'excellence africaines.</p>
      </div>
    </div>
  </div>
</section>

<!-- PARTENAIRES -->
<section class="bg-white border-y border-slate-100 py-14">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="font-display font-bold text-xl text-gray-900 mb-2">Partenaires institutionnels & entreprises</h2>
    <p class="text-slate-500 text-sm mb-10">Ils font confiance a ISI SUPTECH pour leurs recrutements et projets</p>
    <div class="grid grid-cols-3 md:grid-cols-6 gap-4 items-center">
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-primary text-lg">Cisco</div></div>
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-orange-600 text-lg">AWS</div></div>
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-blue-600 text-lg">MTN</div></div>
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-red-600 text-lg">Orange</div></div>
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-green-700 text-lg">Microsoft</div></div>
      <div class="bg-surface rounded-xl p-4 flex items-center justify-center h-16 grayscale hover:grayscale-0 transition-all"><div class="font-black text-slate-700 text-lg">IBM</div></div>
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
</body>
</html>
