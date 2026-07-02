<?php
/*
Template Name: Vie Etudiante Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vie Etudiante - ISI SUPTECH</title>
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
  .img-zoom-wrap{overflow:hidden}
  .img-zoom-wrap img{transition:transform .55s ease}
  .card-lift:hover .img-zoom-wrap img{transform:scale(1.07)}
  @keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
  .anim-1{opacity:0;animation:fadeInUp .7s .15s ease forwards}
  .anim-2{opacity:0;animation:fadeInUp .7s .30s ease forwards}
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
      <a href="<?php echo home_url('/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Accueil</a>
      <a href="<?php echo home_url('/formations/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Formations</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Admissions</a>
      <a href="<?php echo home_url('/vie-etudiante/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">Vie Etudiante</a>
      <a href="<?php echo home_url('/a-propos/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Contact</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary transition-colors px-3">Espace Etudiant</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md hover:shadow-lg transition-all">S'inscrire</a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="relative overflow-hidden min-h-[420px] flex items-center">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1600&q=70" class="w-full h-full object-cover" alt="">
    <div class="absolute inset-0 bg-gradient-to-r from-primary-dark/95 to-primary/70"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-6 py-24">
    <div class="badge bg-gold/20 text-gold border border-gold/30 mb-5 anim-1"><span class="material-symbols-outlined" style="font-size:13px">groups</span>Campus & associations</div>
    <h1 class="font-display font-black text-white text-5xl leading-tight mb-4 anim-2">Vie Etudiante</h1>
    <p class="text-white/70 text-lg max-w-xl anim-2">Un campus vivant, des associations dynamiques, des evenements tech toute l'annee. L'ISI SUPTECH c'est bien plus qu'une simple formation.</p>
  </div>
</section>

<!-- CAMPUS EN CHIFFRES -->
<div class="bg-white border-b border-slate-100">
  <div class="max-w-7xl mx-auto px-6 py-6 grid grid-cols-2 md:grid-cols-4 gap-4 divide-x divide-slate-100">
    <div class="px-6 first:pl-0 text-center"><div class="font-display font-black text-3xl text-primary">1 200</div><div class="text-xs text-slate-500 mt-1">Etudiants inscrits</div></div>
    <div class="px-6 text-center"><div class="font-display font-black text-3xl text-primary">8</div><div class="text-xs text-slate-500 mt-1">Associations actives</div></div>
    <div class="px-6 text-center"><div class="font-display font-black text-3xl text-primary">12</div><div class="text-xs text-slate-500 mt-1">Laboratoires equipes</div></div>
    <div class="px-6 text-center"><div class="font-display font-black text-3xl text-primary">20+</div><div class="text-xs text-slate-500 mt-1">Evenements / an</div></div>
  </div>
</div>

<!-- GALERIE CAMPUS -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="font-display font-black text-3xl text-gray-900 mb-2">Le Campus</h2>
  <p class="text-slate-500 mb-8">Des infrastructures modernes au service de votre apprentissage</p>
  <div class="grid grid-cols-2 md:grid-cols-4 grid-rows-2 gap-4 h-[480px]">
    <div class="col-span-2 row-span-2 img-zoom-wrap rounded-2xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=800&q=70" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="Campus principal">
    </div>
    <div class="img-zoom-wrap rounded-2xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?w=500&q=70" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="Labo informatique">
    </div>
    <div class="img-zoom-wrap rounded-2xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500&q=70" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="Salle TP">
    </div>
    <div class="img-zoom-wrap rounded-2xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=500&q=70" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="Bibliotheque">
    </div>
    <div class="img-zoom-wrap rounded-2xl overflow-hidden">
      <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=500&q=70" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" alt="Salle coworking">
    </div>
  </div>
</section>

<!-- INFRASTRUCTURES -->
<section class="bg-white border-y border-slate-100 py-16">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="font-display font-black text-3xl text-gray-900 mb-2">Nos infrastructures</h2>
    <p class="text-slate-500 mb-10">Des equipements de pointe pour une formation au niveau de l'industrie</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">computer</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">12 Laboratoires informatiques</h3>
        <p class="text-slate-500 text-sm">Plus de 300 postes de travail avec les dernieres configurations (Core i7, 32 Go RAM, SSD). Acces 24h/24 avec badge etudiant.</p>
      </div>
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">hub</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Labo Reseaux & Cisco</h3>
        <p class="text-slate-500 text-sm">Equipements Cisco certifies (routeurs, switchs, firewalls). Preparation aux certifications CCNA/CCNP. Racks physiques disponibles.</p>
      </div>
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">cloud</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Cloud Lab & Serveurs</h3>
        <p class="text-slate-500 text-sm">Infrastructure cloud privee (VMware, Proxmox) avec acces AWS et Azure pour les projets. Chaque etudiant dispose d'un VPS personnel en Master.</p>
      </div>
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">auto_stories</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Mediatheque numerique</h3>
        <p class="text-slate-500 text-sm">Acces illimite a plus de 5000 ressources numeriques : livres techniques, cours Udemy, formations LinkedIn Learning, IEEE papers.</p>
      </div>
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">wifi</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">WiFi Fibre sur tout le campus</h3>
        <p class="text-slate-500 text-sm">Connexion fibre optique 1 Gbps partagee. 100% du campus couvert. Acces VPN inclus pour les projets distants et le teletravail pedagogique.</p>
      </div>
      <div class="card-lift p-6 bg-surface rounded-2xl border border-slate-100">
        <div class="w-12 h-12 bg-primary-light rounded-xl flex items-center justify-center mb-4"><span class="material-symbols-outlined text-primary text-2xl">groups</span></div>
        <h3 class="font-display font-bold text-gray-900 mb-2">Espaces de coworking</h3>
        <p class="text-slate-500 text-sm">4 espaces de travail collaboratif avec tableaux blancs, TV pour les presentations et cabines phoniques pour les visioconferences.</p>
      </div>
    </div>
  </div>
</section>

<!-- ASSOCIATIONS -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="font-display font-black text-3xl text-gray-900 mb-2">Associations & clubs</h2>
  <p class="text-slate-500 mb-10">Des espaces pour developper vos competences au-dela des cours</p>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

    <div class="card-lift bg-white rounded-2xl border border-slate-100 p-6 shadow-sm text-center">
      <div class="w-14 h-14 bg-gradient-to-br from-primary to-primary-mid rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
        <span class="material-symbols-outlined text-white text-2xl">code</span>
      </div>
      <h3 class="font-display font-bold text-gray-900 mb-2">ISI Dev Club</h3>
      <p class="text-slate-500 text-xs leading-relaxed mb-3">Hackathons, projets open source, contributions GitHub. 180 membres actifs.</p>
      <span class="badge bg-primary-light text-primary">Programmation</span>
    </div>

    <div class="card-lift bg-white rounded-2xl border border-slate-100 p-6 shadow-sm text-center">
      <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
        <span class="material-symbols-outlined text-white text-2xl">security</span>
      </div>
      <h3 class="font-display font-bold text-gray-900 mb-2">CyberISI</h3>
      <p class="text-slate-500 text-xs leading-relaxed mb-3">CTF competitions, pentesting ethique, workshops securite. Equipe nationale de CTF.</p>
      <span class="badge bg-red-100 text-red-700">Cybersecurite</span>
    </div>

    <div class="card-lift bg-white rounded-2xl border border-slate-100 p-6 shadow-sm text-center">
      <div class="w-14 h-14 bg-gradient-to-br from-gold to-yellow-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
        <span class="material-symbols-outlined text-white text-2xl">rocket_launch</span>
      </div>
      <h3 class="font-display font-bold text-gray-900 mb-2">ISI Startup</h3>
      <p class="text-slate-500 text-xs leading-relaxed mb-3">Incubateur de startups etudiantes. Mentoring, pitchs, financement des meilleurs projets.</p>
      <span class="badge bg-gold-light text-yellow-800">Entrepreneuriat</span>
    </div>

    <div class="card-lift bg-white rounded-2xl border border-slate-100 p-6 shadow-sm text-center">
      <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
        <span class="material-symbols-outlined text-white text-2xl">public</span>
      </div>
      <h3 class="font-display font-bold text-gray-900 mb-2">ISI International</h3>
      <p class="text-slate-500 text-xs leading-relaxed mb-3">Echanges universitaires, conferences internationales, mobilite etudiante Europe/Canada.</p>
      <span class="badge bg-green-100 text-green-700">International</span>
    </div>

  </div>
</section>

<!-- EVENEMENTS A VENIR -->
<section class="bg-primary-dark py-16">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="font-display font-black text-3xl text-white mb-2">Prochains evenements</h2>
    <p class="text-white/60 mb-10">Ne manquez pas les rendez-vous de l'annee</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
      <div class="bg-white/10 backdrop-blur border border-white/15 rounded-2xl p-6">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-14 h-14 bg-gold rounded-xl flex flex-col items-center justify-center flex-shrink-0 text-gray-900">
            <div class="font-black text-xl leading-none">15</div>
            <div class="text-xs font-semibold">JUIN</div>
          </div>
          <div>
            <div class="font-display font-bold text-white">ISI Hackathon 2025</div>
            <div class="text-white/50 text-xs">48h non-stop - Equipes de 3-5</div>
          </div>
        </div>
        <p class="text-white/60 text-sm">Thematique : Solutions numeriques pour l'Afrique. Prix : 1M, 500k et 250k FCFA. Ouvert a tous les etudiants.</p>
      </div>
      <div class="bg-white/10 backdrop-blur border border-white/15 rounded-2xl p-6">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-14 h-14 bg-primary-mid rounded-xl flex flex-col items-center justify-center flex-shrink-0 text-white">
            <div class="font-black text-xl leading-none">22</div>
            <div class="text-xs font-semibold">JUIL</div>
          </div>
          <div>
            <div class="font-display font-bold text-white">Forum des entreprises</div>
            <div class="text-white/50 text-xs">Journee emploi - 60 entreprises</div>
          </div>
        </div>
        <p class="text-white/60 text-sm">Rencontrez les recruteurs des grandes entreprises IT d'Afrique de l'Ouest. CV, entretiens et offres de stage/CDI.</p>
      </div>
      <div class="bg-white/10 backdrop-blur border border-white/15 rounded-2xl p-6">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-14 h-14 bg-green-600 rounded-xl flex flex-col items-center justify-center flex-shrink-0 text-white">
            <div class="font-black text-xl leading-none">05</div>
            <div class="text-xs font-semibold">SEPT</div>
          </div>
          <div>
            <div class="font-display font-bold text-white">CTF CyberISI Challenge</div>
            <div class="text-white/50 text-xs">Competition capture-the-flag</div>
          </div>
        </div>
        <p class="text-white/60 text-sm">Competition nationale de cybersecurite. Epreuves de hacking ethique, crypto, forensics. Ouverte aux etablissements partenaires.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEMOIGNAGES VIE ETU -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="font-display font-black text-3xl text-gray-900 mb-10 text-center">Ils racontent leur vie a l'ISI</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7">
      <p class="text-slate-600 italic text-sm leading-relaxed mb-5">"Le ISI Dev Club m'a permis de contribuer a des projets concrets. J'ai appris plus en 6 mois de club que dans certains cours. L'ambiance est excellente."</p>
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-primary-light flex items-center justify-center font-bold text-primary text-sm">AK</div>
        <div><div class="font-semibold text-gray-900 text-sm">Amara Kone</div><div class="text-xs text-slate-500">L2 Informatique</div></div>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7">
      <p class="text-slate-600 italic text-sm leading-relaxed mb-5">"Grace au Forum des entreprises de l'ISI, j'ai signe mon contrat de stage avant meme la fin de ma 3eme annee. Le reseau alumni est tres actif."</p>
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-gold-light flex items-center justify-center font-bold text-yellow-800 text-sm">SM</div>
        <div><div class="font-semibold text-gray-900 text-sm">Safiatou Mbaye</div><div class="text-xs text-slate-500">M1 RESI</div></div>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7">
      <p class="text-slate-600 italic text-sm leading-relaxed mb-5">"Les labos sont vraiment bien equipes. Avoir des serveurs physiques pour pratiquer le reseau, c'est quelque chose que peu d'ecoles offrent en Afrique."</p>
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center font-bold text-green-800 text-sm">YT</div>
        <div><div class="font-semibold text-gray-900 text-sm">Yves Traore</div><div class="text-xs text-slate-500">L3 Reseaux</div></div>
      </div>
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
