<?php
/*
Template Name: Admissions Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admissions - ISI SUPTECH</title>
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
  @keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
  .anim-1{opacity:0;animation:fadeInUp .7s .15s ease forwards}
  .anim-2{opacity:0;animation:fadeInUp .7s .30s ease forwards}
  .anim-3{opacity:0;animation:fadeInUp .7s .45s ease forwards}
  .step-line::before{content:'';position:absolute;left:19px;top:40px;bottom:-20px;width:2px;background:linear-gradient(to bottom,#1f4085,#dae2ff)}
  input,select,textarea{outline:none;transition:border-color .2s,box-shadow .2s}
  input:focus,select:focus,textarea:focus{border-color:#1f4085;box-shadow:0 0 0 3px rgba(31,64,133,.1)}
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
      <a href="<?php echo home_url('/admissions/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">Admissions</a>
      <a href="<?php echo home_url('/vie-etudiante/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Vie Etudiante</a>
      <a href="<?php echo home_url('/a-propos/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Contact</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary transition-colors px-3">Espace Etudiant</a>
      <a href="#formulaire" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md hover:shadow-lg transition-all">S'inscrire</a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="relative bg-primary-dark overflow-hidden py-24">
  <div class="absolute inset-0 opacity-10" style="background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,.4) 1px,transparent 0);background-size:32px 32px"></div>
  <div class="relative max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-12">
    <div class="flex-1 anim-2">
      <div class="badge bg-gold/20 text-gold border border-gold/30 mb-5 anim-1"><span class="material-symbols-outlined" style="font-size:13px">event</span>Rentree 2025-2026</div>
      <h1 class="font-display font-black text-white text-5xl leading-tight mb-4">Rejoignez ISI SUPTECH</h1>
      <p class="text-white/70 text-lg leading-relaxed mb-8 max-w-lg">Les candidatures pour la rentree 2025-2026 sont ouvertes. Decouvrez les etapes, les conditions et deposez votre dossier en ligne.</p>
      <div class="grid grid-cols-3 gap-4">
        <div class="bg-white/10 rounded-xl p-4 text-center"><div class="font-black text-gold text-2xl">15</div><div class="text-white/60 text-xs mt-1">Aout 2025</div><div class="text-white/40 text-xs">Ouverture dossiers</div></div>
        <div class="bg-white/10 rounded-xl p-4 text-center"><div class="font-black text-gold text-2xl">30</div><div class="text-white/60 text-xs mt-1">Aout 2025</div><div class="text-white/40 text-xs">Cloture dossiers</div></div>
        <div class="bg-white/10 rounded-xl p-4 text-center"><div class="font-black text-gold text-2xl">Oct.</div><div class="text-white/60 text-xs mt-1">2025</div><div class="text-white/40 text-xs">Debut des cours</div></div>
      </div>
    </div>
    <div class="w-full lg:w-96 flex-shrink-0">
      <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=600&q=70" class="rounded-2xl shadow-2xl object-cover w-full h-64 lg:h-80" alt="Etudiants ISI">
    </div>
  </div>
</section>

<!-- PROCESSUS -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-12">
    <h2 class="font-display font-black text-4xl text-gray-900 mb-3">Le processus d'admission</h2>
    <p class="text-slate-500 text-lg">5 etapes simples pour rejoindre l'ISI SUPTECH</p>
  </div>
  <div class="relative max-w-3xl mx-auto">
    <div class="space-y-0">

      <div class="relative flex gap-6 pb-10 step-line">
        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-black text-sm flex-shrink-0 z-10 shadow-lg">1</div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex-1">
          <h3 class="font-display font-bold text-gray-900 mb-2">Choisir sa formation</h3>
          <p class="text-slate-500 text-sm">Consultez le catalogue des formations et identifiez le programme qui correspond a votre profil, vos ambitions et les prerequisites requis.</p>
          <a href="<?php echo home_url('/formations/'); ?>" class="inline-flex items-center gap-1 text-primary font-semibold text-sm mt-3 hover:gap-2 transition-all">Voir les formations <span class="material-symbols-outlined" style="font-size:16px">arrow_forward</span></a>
        </div>
      </div>

      <div class="relative flex gap-6 pb-10 step-line">
        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-black text-sm flex-shrink-0 z-10 shadow-lg">2</div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex-1">
          <h3 class="font-display font-bold text-gray-900 mb-2">Preparer son dossier</h3>
          <p class="text-slate-500 text-sm mb-3">Rassemblez les documents necessaires :</p>
          <ul class="space-y-1 text-sm text-slate-500">
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary" style="font-size:16px">check</span>Photocopies des releves de notes (3 dernieres annees)</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary" style="font-size:16px">check</span>Photocopie de la piece d'identite ou passeport</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary" style="font-size:16px">check</span>Lettre de motivation (1 page max)</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary" style="font-size:16px">check</span>2 photos d'identite recentes</li>
            <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary" style="font-size:16px">check</span>CV pour les Masters</li>
          </ul>
        </div>
      </div>

      <div class="relative flex gap-6 pb-10 step-line">
        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-black text-sm flex-shrink-0 z-10 shadow-lg">3</div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex-1">
          <h3 class="font-display font-bold text-gray-900 mb-2">Soumettre sa candidature</h3>
          <p class="text-slate-500 text-sm">Remplissez le formulaire en ligne ci-dessous ou deposez votre dossier physique au bureau des admissions (bâtiment A, RDC). Les dossiers incomplets ne seront pas traites.</p>
        </div>
      </div>

      <div class="relative flex gap-6 pb-10 step-line">
        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-black text-sm flex-shrink-0 z-10 shadow-lg">4</div>
        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 flex-1">
          <h3 class="font-display font-bold text-gray-900 mb-2">Tests de selection</h3>
          <p class="text-slate-500 text-sm">Les candidats selectionnes sur dossier sont convoques pour : un test de logique (45 min, QCM) et un entretien individuel de motivation. Convocation envoyee par email 72h avant.</p>
        </div>
      </div>

      <div class="relative flex gap-6">
        <div class="w-10 h-10 bg-gold rounded-full flex items-center justify-center text-gray-900 font-black text-sm flex-shrink-0 z-10 shadow-lg">5</div>
        <div class="bg-gold-light rounded-2xl border border-gold/20 p-6 flex-1">
          <h3 class="font-display font-bold text-gray-900 mb-2">Confirmation d'inscription</h3>
          <p class="text-slate-600 text-sm">Apres acceptation, vous recevez votre lettre d'admission. Confirmez votre inscription en reglant les frais d'inscription (150 000 FCFA) dans les 5 jours. Bienvenue a l'ISI SUPTECH !</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FORMULAIRE -->
<section id="formulaire" class="bg-white border-y border-slate-100 py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

      <!-- Infos -->
      <div>
        <h2 class="font-display font-black text-3xl text-gray-900 mb-3">Candidature en ligne</h2>
        <p class="text-slate-500 mb-8">Remplissez ce formulaire et nous vous contacterons sous 48h ouvrees.</p>
        <div class="space-y-5">
          <div class="flex items-start gap-4 p-4 bg-surface rounded-xl">
            <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-primary" style="font-size:20px">email</span></div>
            <div><div class="font-semibold text-gray-900 text-sm">Email</div><div class="text-slate-500 text-sm">admissions@isi-suptech.ci</div></div>
          </div>
          <div class="flex items-start gap-4 p-4 bg-surface rounded-xl">
            <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-primary" style="font-size:20px">phone</span></div>
            <div><div class="font-semibold text-gray-900 text-sm">Telephone</div><div class="text-slate-500 text-sm">+225 27 22 XX XX XX</div></div>
          </div>
          <div class="flex items-start gap-4 p-4 bg-surface rounded-xl">
            <div class="w-10 h-10 bg-primary-light rounded-xl flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-primary" style="font-size:20px">schedule</span></div>
            <div><div class="font-semibold text-gray-900 text-sm">Horaires admissions</div><div class="text-slate-500 text-sm">Lun-Ven : 8h - 17h</div></div>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="lg:col-span-2">
        <form class="bg-surface rounded-2xl border border-slate-100 p-8 space-y-5">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
              <input type="text" placeholder="Votre nom de famille" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
            </div>
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Prenoms <span class="text-red-500">*</span></label>
              <input type="text" placeholder="Vos prenoms" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
              <input type="email" placeholder="votre@email.com" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
            </div>
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Telephone <span class="text-red-500">*</span></label>
              <input type="tel" placeholder="+225 XX XX XX XX XX" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
            </div>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Formation souhaitee <span class="text-red-500">*</span></label>
            <select class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white text-slate-600">
              <option value="">Choisissez une formation...</option>
              <option>BTS Informatique de Gestion</option>
              <option>Licence en Informatique</option>
              <option>Licence Reseaux & Telecoms</option>
              <option>Licence Data Science & BI</option>
              <option>Licence Cybersecurite</option>
              <option>Licence Management des SI</option>
              <option>Master RESI</option>
              <option>Master Ingenierie Logicielle</option>
              <option>Master Intelligence Artificielle</option>
            </select>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Dernier diplome obtenu</label>
              <select class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white text-slate-600">
                <option>Baccalaureat</option>
                <option>BTS</option>
                <option>Licence</option>
                <option>Master 1</option>
              </select>
            </div>
            <div>
              <label class="block text-sm font-semibold text-gray-700 mb-2">Annee d'obtention</label>
              <input type="number" placeholder="ex: 2024" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
            </div>
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Lettre de motivation <span class="text-red-500">*</span></label>
            <textarea rows="4" placeholder="Presentez-vous brievement et expliquez votre motivation a rejoindre ISI SUPTECH..." class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white resize-none"></textarea>
          </div>
          <div class="flex items-start gap-3">
            <input type="checkbox" id="cgu" class="mt-1 w-4 h-4 accent-primary">
            <label for="cgu" class="text-sm text-slate-600">J'accepte les <a href="#" class="text-primary underline">conditions d'utilisation</a> et la politique de confidentialite d'ISI SUPTECH.</label>
          </div>
          <button type="submit" class="w-full bg-primary hover:bg-primary-mid text-white py-3.5 rounded-xl font-bold text-sm transition-colors flex items-center justify-center gap-2 shadow-lg">
            <span class="material-symbols-outlined" style="font-size:18px">send</span>
            Soumettre ma candidature
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FRAIS & BOURSES -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <div class="text-center mb-10">
    <h2 class="font-display font-black text-3xl text-gray-900 mb-2">Frais de scolarite</h2>
    <p class="text-slate-500">Des tarifs accessibles et des facilites de paiement</p>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7 text-center">
      <div class="badge bg-gold-light text-yellow-800 mx-auto mb-4">BTS - 2 ans</div>
      <div class="font-black text-4xl text-gray-900 mb-1">1.2M</div>
      <div class="text-slate-500 text-sm mb-5">FCFA / an</div>
      <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Acces laboratoires 24/7</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Support pedagogique inclus</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Materiel de cours numerique</li>
      </ul>
      <a href="#formulaire" class="block w-full text-center bg-primary text-white py-2.5 rounded-xl font-bold text-sm hover:bg-primary-mid transition-colors">Candidater</a>
    </div>
    <div class="bg-primary rounded-2xl shadow-xl p-7 text-center border-4 border-gold relative">
      <div class="absolute -top-3 left-1/2 -translate-x-1/2 badge bg-gold text-gray-900">Le plus choisi</div>
      <div class="badge bg-white/15 text-white mx-auto mb-4">Licence - 3 ans</div>
      <div class="font-black text-4xl text-white mb-1">1.8M</div>
      <div class="text-white/60 text-sm mb-5">FCFA / an</div>
      <ul class="space-y-2 text-sm text-white/80 text-left mb-6">
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px">check</span>Tout BTS inclus</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px">check</span>Stages en entreprise organises</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px">check</span>Certifications preparatoires</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-gold" style="font-size:16px">check</span>Reseau alumni actif</li>
      </ul>
      <a href="#formulaire" class="block w-full text-center bg-gold hover:bg-yellow-400 text-gray-900 py-2.5 rounded-xl font-bold text-sm transition-colors">Candidater</a>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-7 text-center">
      <div class="badge bg-primary-light text-primary mx-auto mb-4">Master - 2 ans</div>
      <div class="font-black text-4xl text-gray-900 mb-1">2.4M</div>
      <div class="text-slate-500 text-sm mb-5">FCFA / an</div>
      <ul class="space-y-2 text-sm text-slate-600 text-left mb-6">
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Tout Licence inclus</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Projets avec entreprises</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Certifications officielles</li>
        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-green-500" style="font-size:16px">check</span>Coaching carriere individuel</li>
      </ul>
      <a href="#formulaire" class="block w-full text-center bg-primary text-white py-2.5 rounded-xl font-bold text-sm hover:bg-primary-mid transition-colors">Candidater</a>
    </div>
  </div>
  <div class="mt-6 p-5 bg-surface rounded-xl border border-slate-100 text-center text-sm text-slate-500">
    <span class="material-symbols-outlined text-gold align-middle" style="font-size:18px">info</span>
    Des facilites de paiement en 3 tranches sont disponibles. Des bourses d'excellence sont attribuees aux meilleurs candidats. Contactez le bureau des admissions pour plus d'informations.
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
