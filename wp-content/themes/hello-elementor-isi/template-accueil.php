<?php
/*
Template Name: Accueil Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ISI SUPTECH - Excellence Institutionnelle & Precision Technique</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#1f4085',
          'primary-dark': '#162e5f',
          'primary-mid': '#3a589e',
          'primary-light': '#dae2ff',
          gold: '#ffba2d',
          'gold-light': '#fff3d0',
          surface: '#f7f9fb',
          'surface-low': '#f2f4f6',
          'surface-container': '#eceef0',
        },
        fontFamily: {
          display: ['"Public Sans"', 'sans-serif'],
          body: ['Inter', 'sans-serif'],
        }
      }
    }
  }
</script>
<style>
  * { box-sizing: border-box; }
  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    vertical-align: middle;
    display: inline-block;
  }
  .star-fill { font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24; }

  /* Animated gradient text */
  .text-gradient {
    background: linear-gradient(135deg, #fff 0%, #b1c5ff 60%, #ffba2d 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* Nav link hover underline */
  .nav-link { position: relative; }
  .nav-link::after {
    content: '';
    position: absolute;
    bottom: -2px; left: 0;
    width: 0; height: 2px;
    background: #1f4085;
    transition: width 0.25s ease;
  }
  .nav-link:hover::after, .nav-link.active::after { width: 100%; }

  /* Card hover lift */
  .card-lift {
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }
  .card-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 24px 64px rgba(31, 64, 133, 0.12);
  }

  /* Image zoom in card */
  .img-zoom-wrap { overflow: hidden; }
  .img-zoom-wrap img { transition: transform 0.55s ease; }
  .card-lift:hover .img-zoom-wrap img { transform: scale(1.07); }

  /* Glassmorphism */
  .glass {
    background: rgba(255,255,255,0.88);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
  }

  /* Dot grid pattern */
  .dot-grid {
    background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.15) 1px, transparent 0);
    background-size: 32px 32px;
  }

  /* Scroll indicator bounce */
  @keyframes bounce-slow {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(6px); }
  }
  .bounce-slow { animation: bounce-slow 1.8s ease-in-out infinite; }

  /* Fade-in-up animation */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
  }
  .anim-1 { opacity:0; animation: fadeInUp 0.7s 0.15s ease forwards; }
  .anim-2 { opacity:0; animation: fadeInUp 0.7s 0.30s ease forwards; }
  .anim-3 { opacity:0; animation: fadeInUp 0.7s 0.45s ease forwards; }
  .anim-4 { opacity:0; animation: fadeInUp 0.7s 0.60s ease forwards; }
  .anim-5 { opacity:0; animation: fadeInUp 0.7s 0.80s ease forwards; }

  /* Progress bar */
  .progress-bar { height: 4px; border-radius: 2px; }

  /* Pill badge */
  .badge {
    display: inline-flex; align-items: center; gap: 4px;
    padding: 3px 11px;
    border-radius: 9999px;
    font-size: 11px; font-weight: 700;
    letter-spacing: 0.06em; text-transform: uppercase;
  }

  section { scroll-margin-top: 80px; }

  /* Custom scrollbar */
  ::-webkit-scrollbar { width: 5px; }
  ::-webkit-scrollbar-track { background: #f1f1f1; }
  ::-webkit-scrollbar-thumb { background: #3a589e; border-radius: 3px; }
</style>
</head>
<body class="bg-surface font-body text-gray-900 antialiased">

<!-- ===================== HEADER ===================== -->
<header id="top" class="bg-white/95 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

    <!-- Logo -->
    <a href="#top" class="flex items-center gap-3 group flex-shrink-0">
      <div class="w-11 h-11 bg-primary rounded-xl flex items-center justify-center text-white font-black text-[15px] shadow-lg group-hover:bg-primary-mid transition-colors duration-200">
        IS
      </div>
      <div class="hidden sm:block">
        <div class="font-display font-extrabold text-xl text-primary tracking-tight leading-none">ISI SUPTECH</div>
        <div class="text-[10px] text-slate-400 font-semibold tracking-widest uppercase">Institut Superieur d'Informatique</div>
      </div>
    </a>

    <!-- Navigation -->
    <nav class="hidden lg:flex items-center gap-8">
      <a href="<?php echo home_url('/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">Accueil</a>
      <a href="<?php echo home_url('/formations/'); ?>"     class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Formations</a>
      <a href="<?php echo home_url('/admissions/'); ?>"     class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Admissions</a>
      <a href="<?php echo home_url('/vie-etudiante/'); ?>"  class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Vie Etudiante</a>
      <a href="<?php echo home_url('/a-propos/'); ?>"       class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>"        class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary transition-colors">Contact</a>
    </nav>

    <!-- Actions -->
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary transition-colors px-3">Espace Etudiant</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md hover:shadow-lg transition-all active:scale-95">
        S'inscrire
      </a>
    </div>
  </div>
</header>

<!-- ===================== HERO ===================== -->
<section id="accueil" class="relative min-h-screen flex items-center overflow-hidden">

  <!-- Background image + overlays -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1562774053-701939374585?w=1920&q=80"
         alt="Campus ISI SUPTECH" class="w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/95 via-primary/85 to-primary/40"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/70 via-transparent to-transparent"></div>
  </div>

  <!-- Decorative blurs -->
  <div class="absolute top-20 right-20 w-96 h-96 bg-primary-light/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-32 right-60 w-64 h-64 bg-gold/15 rounded-full blur-2xl pointer-events-none"></div>

  <!-- Hero content -->
  <div class="relative z-10 max-w-7xl mx-auto px-6 py-28 w-full">
    <div class="max-w-2xl">

      <!-- Badge -->
      <div class="badge bg-gold/20 text-gold border border-gold/30 mb-7 anim-1">
        <span class="material-symbols-outlined" style="font-size:13px;">school</span>
        Excellence Institutionnelle
      </div>

      <!-- Headline -->
      <h1 class="font-display font-black text-white leading-[1.08] mb-6 anim-2"
          style="font-size: clamp(2.6rem, 5vw, 3.8rem);">
        Formez les Leaders<br>
        <span class="text-gradient">de l'Ere Numerique</span>
      </h1>

      <!-- Sub -->
      <p class="text-white/75 text-[1.1rem] leading-relaxed mb-10 max-w-xl anim-3">
        ISI SUPTECH prepare les talents de demain aux defis de l'informatique, des reseaux
        et du management moderne grace a une pedagogie de haute precision.
      </p>

      <!-- CTA buttons -->
      <div class="flex flex-wrap gap-4 anim-4">
        <a href="#programmes"
           class="inline-flex items-center gap-2 bg-white text-primary hover:bg-primary-light font-bold px-8 py-4 rounded-xl shadow-xl hover:shadow-2xl transition-all active:scale-95 text-[0.95rem]">
          Decouvrir nos cursus
          <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
        </a>
        <a href="#"
           class="inline-flex items-center gap-2 bg-white/10 border border-white/25 text-white hover:bg-white/20 font-bold px-8 py-4 rounded-xl transition-all backdrop-blur-sm text-[0.95rem]">
          <span class="material-symbols-outlined text-[20px]">download</span>
          Brochure
        </a>
      </div>
    </div>

    <!-- Floating stat cards (desktop only) -->
    <div class="absolute bottom-14 right-6 hidden xl:flex gap-4 anim-5">
      <div class="glass rounded-2xl px-6 py-5 shadow-2xl border border-white/20">
        <div class="text-3xl font-black text-primary leading-none mb-1">98%</div>
        <div class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Insertion pro.</div>
      </div>
      <div class="glass rounded-2xl px-6 py-5 shadow-2xl border border-white/20">
        <div class="text-3xl font-black text-primary leading-none mb-1">1200+</div>
        <div class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Diplomes</div>
      </div>
      <div class="glass rounded-2xl px-6 py-5 shadow-2xl border border-white/20">
        <div class="text-3xl font-black text-primary leading-none mb-1">250+</div>
        <div class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Partenaires</div>
      </div>
    </div>
  </div>

  <!-- Scroll hint -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-white/40 bounce-slow">
    <span class="text-[10px] font-semibold tracking-widest uppercase">Defiler</span>
    <div class="w-6 h-10 border-2 border-white/25 rounded-full flex justify-center pt-2">
      <div class="w-1.5 h-2.5 bg-white/40 rounded-full"></div>
    </div>
  </div>
</section>

<!-- ===================== STATS BAR ===================== -->
<section class="bg-white border-b border-slate-100 py-12">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 divide-x divide-slate-100">
      <div class="text-center px-4">
        <div class="font-display font-black text-5xl text-primary mb-1">98%</div>
        <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Insertion Pro.</div>
      </div>
      <div class="text-center px-4">
        <div class="font-display font-black text-5xl text-primary mb-1">250+</div>
        <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Partenaires</div>
      </div>
      <div class="text-center px-4">
        <div class="font-display font-black text-5xl text-primary mb-1">15</div>
        <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Laboratoires</div>
      </div>
      <div class="text-center px-4">
        <div class="font-display font-black text-5xl text-primary mb-1">1200</div>
        <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Diplomes / An</div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PROGRAMMES ===================== -->
<section id="programmes" class="py-24 bg-surface-low">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Section header -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end gap-4 mb-12">
      <div>
        <div class="badge bg-primary/10 text-primary mb-3">Academique</div>
        <h2 class="font-display font-bold text-4xl text-gray-900">Nos Formations</h2>
        <p class="text-slate-500 mt-2 max-w-lg text-[0.95rem]">Des parcours certifiants con&ccedil;us pour repondre aux besoins reels du marche technologique mondial.</p>
      </div>
      <a href="#" class="hidden sm:flex items-center gap-2 text-primary font-bold text-sm hover:gap-4 transition-all flex-shrink-0">
        Voir tous les programmes
        <span class="material-symbols-outlined">arrow_forward</span>
      </a>
    </div>

    <!-- 3-column cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">

      <!-- Bachelor Dev Web -->
      <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
        <div class="img-zoom-wrap h-52">
          <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&q=80"
               alt="Developpement Web" class="w-full h-full object-cover">
        </div>
        <div class="p-6 flex flex-col flex-1">
          <div class="badge bg-primary/10 text-primary mb-3">Bachelor - 3 ans</div>
          <h3 class="font-display font-bold text-xl mb-2">Developpement Web & Mobile</h3>
          <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
            Maitrisez React, Node.js, Flutter et les architectures cloud-native pour concevoir des applications performantes et scalables.
          </p>
          <div class="flex items-center justify-between pt-4 border-t border-slate-100 mt-auto">
            <div class="flex items-center gap-3 text-xs text-slate-400">
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">schedule</span> 3 ans
              </span>
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">school</span> 180 ECTS
              </span>
            </div>
            <a href="#" class="text-primary font-bold text-sm flex items-center gap-0.5 hover:gap-2 transition-all">
              Voir <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Bachelor Cybersec -->
      <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
        <div class="img-zoom-wrap h-52">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=800&q=80"
               alt="Cybersecurite" class="w-full h-full object-cover">
        </div>
        <div class="p-6 flex flex-col flex-1">
          <div class="badge bg-red-50 text-red-700 mb-3">Bachelor - 3 ans</div>
          <h3 class="font-display font-bold text-xl mb-2">Cybersecurite & Audit</h3>
          <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
            Apprenez a securiser les infrastructures, detecter les intrusions et auditer les systemes d'information critiques des entreprises.
          </p>
          <div class="flex items-center justify-between pt-4 border-t border-slate-100 mt-auto">
            <div class="flex items-center gap-3 text-xs text-slate-400">
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">schedule</span> 3 ans
              </span>
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">school</span> 180 ECTS
              </span>
            </div>
            <a href="#" class="text-primary font-bold text-sm flex items-center gap-0.5 hover:gap-2 transition-all">
              Voir <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Master Data IA -->
      <div class="card-lift bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
        <div class="img-zoom-wrap h-52">
          <img src="https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=800&q=80"
               alt="Data Science et IA" class="w-full h-full object-cover">
        </div>
        <div class="p-6 flex flex-col flex-1">
          <div class="badge bg-purple-50 text-purple-700 mb-3">Master - 2 ans</div>
          <h3 class="font-display font-bold text-xl mb-2">Data Engineering & IA</h3>
          <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">
            Specialisez-vous dans le traitement massif de donnees et le deploiement de modeles Machine Learning en production reelle.
          </p>
          <div class="flex items-center justify-between pt-4 border-t border-slate-100 mt-auto">
            <div class="flex items-center gap-3 text-xs text-slate-400">
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">schedule</span> 2 ans
              </span>
              <span class="flex items-center gap-1">
                <span class="material-symbols-outlined text-[15px]">school</span> 120 ECTS
              </span>
            </div>
            <a href="#" class="text-primary font-bold text-sm flex items-center gap-0.5 hover:gap-2 transition-all">
              Voir <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Wide featured card: Master RESI teaser -->
    <div class="card-lift bg-primary rounded-2xl overflow-hidden shadow-xl flex flex-col md:flex-row">
      <!-- Image side -->
      <div class="md:w-2/5 relative min-h-[300px]">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=800&q=80"
             alt="Reseaux" class="absolute inset-0 w-full h-full object-cover opacity-35">
        <div class="absolute inset-0 bg-gradient-to-r from-primary to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary-dark/60 to-transparent md:hidden"></div>
        <div class="absolute bottom-6 left-6">
          <div class="badge bg-gold/25 text-gold border border-gold/40">
            <span class="material-symbols-outlined star-fill text-[13px]">star</span>
            Formation Phare
          </div>
        </div>
      </div>
      <!-- Content side -->
      <div class="md:w-3/5 p-10 flex flex-col justify-between">
        <div>
          <h3 class="font-display font-black text-5xl text-white mb-2">Master RESI</h3>
          <p class="text-primary-light/70 font-semibold mb-5 text-sm tracking-wider uppercase">Reseaux, Systemes & Infrastructure</p>
          <p class="text-white/70 leading-relaxed text-[0.95rem] max-w-xl">
            Formation d'elite pour les experts de l'architecture reseau, du Cloud Computing et de la cybersecurite des systemes critiques. Taux d'insertion: <strong class="text-white">98%</strong>.
          </p>
        </div>
        <div class="flex flex-wrap gap-6 mt-6 mb-8">
          <div class="flex items-center gap-2 text-white/75 text-sm">
            <span class="material-symbols-outlined text-gold text-[20px]">verified</span> Diplome d'Etat
          </div>
          <div class="flex items-center gap-2 text-white/75 text-sm">
            <span class="material-symbols-outlined text-gold text-[20px]">work</span> Alternance possible
          </div>
          <div class="flex items-center gap-2 text-white/75 text-sm">
            <span class="material-symbols-outlined text-gold text-[20px]">trending_up</span> Salaire moy. 42k EUR
          </div>
        </div>
        <a href="#master"
           class="self-start bg-white text-primary font-bold px-8 py-3.5 rounded-xl hover:bg-primary-light transition-colors shadow-lg text-sm">
          Decouvrir le programme
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== MASTER RESI SHOWCASE ===================== -->
<section id="master" class="py-24 bg-gradient-to-b from-slate-900 to-primary-dark relative overflow-hidden">
  <div class="absolute inset-0 dot-grid pointer-events-none"></div>

  <!-- Background image -->
  <div class="absolute inset-0 opacity-15 pointer-events-none">
    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=1400&q=80"
         class="w-full h-full object-cover" alt="">
    <div class="absolute inset-0 bg-gradient-to-l from-transparent via-slate-900/70 to-slate-900"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <!-- Left: Content -->
      <div>
        <div class="badge bg-gold/20 text-gold border border-gold/35 mb-7">
          <span class="material-symbols-outlined text-[13px]">workspace_premium</span>
          Programme d'Excellence
        </div>
        <h2 class="font-display font-black text-white mb-3"
            style="font-size: clamp(2.8rem, 5vw, 4rem);">Master RESI</h2>
        <p class="text-slate-300 font-semibold text-lg mb-5">Reseaux, Systemes et Infrastructure</p>
        <p class="text-slate-400 leading-relaxed mb-10 text-[1rem]">
          Notre programme d'elite prepare les futurs experts capables de concevoir, deployer
          et securiser les architectures d'entreprise complexes a l'ere du Cloud et de la 5G.
          Trois specialisations distinctes: <strong class="text-white">Cloud Architect</strong>,
          <strong class="text-white">Expert Cybersecurite</strong>,
          <strong class="text-white">Ingenieur DevOps</strong>.
        </p>

        <!-- Features grid -->
        <div class="grid grid-cols-2 gap-4 mb-10">
          <div class="flex items-center gap-3 text-white/80">
            <span class="w-9 h-9 rounded-lg bg-primary-mid/50 flex items-center justify-center flex-shrink-0">
              <span class="material-symbols-outlined text-gold text-[19px]">cloud</span>
            </span>
            <span class="text-sm font-medium">Architecte Cloud</span>
          </div>
          <div class="flex items-center gap-3 text-white/80">
            <span class="w-9 h-9 rounded-lg bg-primary-mid/50 flex items-center justify-center flex-shrink-0">
              <span class="material-symbols-outlined text-gold text-[19px]">shield</span>
            </span>
            <span class="text-sm font-medium">Expert Cybersecurite</span>
          </div>
          <div class="flex items-center gap-3 text-white/80">
            <span class="w-9 h-9 rounded-lg bg-primary-mid/50 flex items-center justify-center flex-shrink-0">
              <span class="material-symbols-outlined text-gold text-[19px]">dns</span>
            </span>
            <span class="text-sm font-medium">Admin. Systemes</span>
          </div>
          <div class="flex items-center gap-3 text-white/80">
            <span class="w-9 h-9 rounded-lg bg-primary-mid/50 flex items-center justify-center flex-shrink-0">
              <span class="material-symbols-outlined text-gold text-[19px]">settings_ethernet</span>
            </span>
            <span class="text-sm font-medium">Ingenieur DevOps</span>
          </div>
        </div>

        <a href="#" class="inline-flex items-center gap-2 bg-white text-primary font-bold px-8 py-4 rounded-xl hover:bg-primary-light transition-colors shadow-xl">
          Demander la brochure
          <span class="material-symbols-outlined">download</span>
        </a>
      </div>

      <!-- Right: Stats panel -->
      <div class="bg-white/5 border border-white/10 rounded-3xl p-8 backdrop-blur-sm">
        <h3 class="font-display font-bold text-white text-xl mb-8 pb-5 border-b border-white/10">
          Indicateurs de Performance
        </h3>
        <div class="space-y-7">
          <!-- Stat 1 -->
          <div>
            <div class="flex justify-between items-baseline mb-2">
              <span class="text-slate-400 text-sm">Insertion professionnelle</span>
              <span class="text-3xl font-black text-white">98%</span>
            </div>
            <div class="w-full bg-white/10 rounded-full h-1.5">
              <div class="bg-gold h-1.5 rounded-full" style="width:98%"></div>
            </div>
          </div>
          <!-- Stat 2 -->
          <div>
            <div class="flex justify-between items-baseline mb-2">
              <span class="text-slate-400 text-sm">Partenaires entreprises</span>
              <span class="text-3xl font-black text-white">150+</span>
            </div>
            <div class="w-full bg-white/10 rounded-full h-1.5">
              <div class="bg-primary-light h-1.5 rounded-full" style="width:80%"></div>
            </div>
          </div>
          <!-- Stat 3 -->
          <div>
            <div class="flex justify-between items-baseline mb-2">
              <span class="text-slate-400 text-sm">Satisfaction etudiants</span>
              <span class="text-3xl font-black text-white">4.8/5</span>
            </div>
            <div class="w-full bg-white/10 rounded-full h-1.5">
              <div class="bg-green-400 h-1.5 rounded-full" style="width:96%"></div>
            </div>
          </div>
          <!-- Grid metrics -->
          <div class="pt-4 border-t border-white/10 grid grid-cols-3 gap-4">
            <div class="bg-white/5 rounded-2xl p-4 text-center">
              <div class="text-2xl font-black text-white">2 ans</div>
              <div class="text-[10px] text-slate-400 mt-1 uppercase tracking-wide">Duree</div>
            </div>
            <div class="bg-white/5 rounded-2xl p-4 text-center">
              <div class="text-2xl font-black text-white">42k</div>
              <div class="text-[10px] text-slate-400 mt-1 uppercase tracking-wide">Salaire moy.</div>
            </div>
            <div class="bg-white/5 rounded-2xl p-4 text-center">
              <div class="text-2xl font-black text-white">Bac+5</div>
              <div class="text-[10px] text-slate-400 mt-1 uppercase tracking-wide">Niveau</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== ENVIRONNEMENT TECHNIQUE ===================== -->
<section class="py-24 bg-surface-low">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16">
      <div class="badge bg-primary/10 text-primary mx-auto mb-4">Infrastructure</div>
      <h2 class="font-display font-bold text-4xl text-gray-900 mb-3">Un Environnement a la Pointe</h2>
      <p class="text-slate-500 max-w-2xl mx-auto text-[0.95rem]">
        Nos laboratoires et partenariats industriels offrent un cadre d'apprentissage unique, ancre dans la realite professionnelle.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Feature list -->
      <div class="space-y-5">
        <div class="card-lift bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex gap-5">
          <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-white flex-shrink-0 shadow-md">
            <span class="material-symbols-outlined">terminal</span>
          </div>
          <div>
            <h4 class="font-display font-bold text-lg mb-1">Labs de Certification</h4>
            <p class="text-slate-500 text-sm leading-relaxed">Centres d'examen agrees Cisco, Microsoft et AWS integres directement au campus, accessibles 24h/24.</p>
          </div>
        </div>

        <div class="card-lift bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex gap-5">
          <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-white flex-shrink-0 shadow-md">
            <span class="material-symbols-outlined">groups</span>
          </div>
          <div>
            <h4 class="font-display font-bold text-lg mb-1">Partenariats Industriels</h4>
            <p class="text-slate-500 text-sm leading-relaxed">Plus de 250 entreprises partenaires - Orange, Cisco, Huawei, Deloitte - pour vos stages et votre insertion.</p>
          </div>
        </div>

        <div class="card-lift bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex gap-5">
          <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center text-white flex-shrink-0 shadow-md">
            <span class="material-symbols-outlined">psychology</span>
          </div>
          <div>
            <h4 class="font-display font-bold text-lg mb-1">Pedagogie par Projet</h4>
            <p class="text-slate-500 text-sm leading-relaxed">80% du cursus base sur des cas reels, hackathons trimestriels et projets pour des clients industriels.</p>
          </div>
        </div>

        <div class="card-lift bg-white rounded-2xl p-6 shadow-sm border border-slate-100 flex gap-5">
          <div class="w-12 h-12 bg-gold rounded-xl flex items-center justify-center text-white flex-shrink-0 shadow-md">
            <span class="material-symbols-outlined">verified</span>
          </div>
          <div>
            <h4 class="font-display font-bold text-lg mb-1">Diplomes Reconnus</h4>
            <p class="text-slate-500 text-sm leading-relaxed">Formations accreditees reconnues par l'Etat et les grandes entreprises du secteur tech en Afrique et en Europe.</p>
          </div>
        </div>
      </div>

      <!-- Image with badges -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden shadow-2xl aspect-[4/3]">
          <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=900&q=80"
               alt="Etudiants ISI SUPTECH" class="w-full h-full object-cover">
        </div>
        <!-- Bottom-left badge -->
        <div class="absolute -bottom-5 -left-5 glass border border-white/30 rounded-2xl p-5 shadow-2xl">
          <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-5xl text-primary">terminal</span>
            <div>
              <div class="font-black text-2xl text-primary leading-none">100%</div>
              <div class="text-[11px] text-slate-500 font-semibold mt-0.5">Environnement Labs</div>
            </div>
          </div>
        </div>
        <!-- Top-right badge -->
        <div class="absolute -top-5 -right-5 bg-primary text-white rounded-2xl px-5 py-4 shadow-2xl">
          <div class="text-2xl font-black leading-none">15</div>
          <div class="text-[11px] font-semibold opacity-75 mt-0.5">Labs Certifies</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== PARTENAIRES ===================== -->
<section class="py-16 bg-white border-y border-slate-100">
  <div class="max-w-7xl mx-auto px-6">
    <p class="text-center text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em] mb-10">
      Ils font confiance a ISI SUPTECH
    </p>
    <div class="flex flex-wrap justify-center items-center gap-x-14 gap-y-6 opacity-35 hover:opacity-55 grayscale hover:grayscale-0 transition-all duration-700">
      <span class="text-2xl font-black text-slate-700">ORANGE</span>
      <span class="text-2xl font-black text-slate-700">CISCO</span>
      <span class="text-2xl font-black text-slate-700">HUAWEI</span>
      <span class="text-2xl font-black text-slate-700">DELOITTE</span>
      <span class="text-2xl font-black text-slate-700">MICROSOFT</span>
      <span class="text-2xl font-black text-slate-700">AWS</span>
    </div>
  </div>
</section>

<!-- ===================== TEMOIGNAGES ===================== -->
<section class="py-24 bg-slate-900 relative overflow-hidden">
  <div class="absolute inset-0 dot-grid pointer-events-none opacity-50"></div>
  <div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none">
    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=600&q=60" class="w-full h-full object-cover" alt="">
    <div class="absolute inset-0 bg-gradient-to-l from-transparent to-slate-900"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6">
    <div class="mb-14">
      <div class="badge bg-white/10 text-white mb-4">Temoignages</div>
      <h2 class="font-display font-bold text-4xl text-white">Ils ont choisi ISI SUPTECH</h2>
      <p class="text-slate-400 mt-2 text-[0.95rem]">Parcours et retours d'experience de nos diplomes</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Testimonial 1 -->
      <div class="card-lift bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-sm">
        <div class="flex gap-1 text-gold mb-6">
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
        </div>
        <p class="text-slate-300 italic leading-relaxed mb-8 text-[0.9rem]">
          "La formation en Genie Informatique est extremement rigoureuse. Aujourd'hui je travaille comme Lead Developer dans une fintech berlinoise grace aux competences acquises a l'ISI."
        </p>
        <div class="flex items-center gap-3 pt-5 border-t border-white/10">
          <div class="w-11 h-11 rounded-full bg-primary-mid flex items-center justify-center text-white font-bold text-sm">AD</div>
          <div>
            <div class="font-bold text-white text-sm">Amadou Diop</div>
            <div class="text-[11px] text-slate-400 mt-0.5">Diplome Master RESI - Lead Dev @ Fintech Berlin</div>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="card-lift bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-sm">
        <div class="flex gap-1 text-gold mb-6">
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
        </div>
        <p class="text-slate-300 italic leading-relaxed mb-8 text-[0.9rem]">
          "Le pole gestion m'a donne toutes les cles pour lancer mon entreprise. Les professeurs sont des professionnels du secteur tres accessibles et veritablement inspir­ants."
        </p>
        <div class="flex items-center gap-3 pt-5 border-t border-white/10">
          <div class="w-11 h-11 rounded-full bg-gold flex items-center justify-center text-white font-bold text-sm">FS</div>
          <div>
            <div class="font-bold text-white text-sm">Fatou Sow</div>
            <div class="text-[11px] text-slate-400 mt-0.5">Licence en Gestion - Fondatrice startup EdTech</div>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="card-lift bg-white/5 border border-white/10 rounded-2xl p-8 backdrop-blur-sm">
        <div class="flex gap-1 text-gold mb-6">
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
          <span class="material-symbols-outlined star-fill text-[19px]">star</span>
        </div>
        <p class="text-slate-300 italic leading-relaxed mb-8 text-[0.9rem]">
          "Une infrastructure moderne et un reseau de partenaires incroyable. ISI SUPTECH est vraiment l'ecole du futur, j'ai decroché mon poste avant même la soutenance."
        </p>
        <div class="flex items-center gap-3 pt-5 border-t border-white/10">
          <div class="w-11 h-11 rounded-full bg-purple-600 flex items-center justify-center text-white font-bold text-sm">MC</div>
          <div>
            <div class="font-bold text-white text-sm">Moussa Camara</div>
            <div class="text-[11px] text-slate-400 mt-0.5">Master Data Engineering - Data Scientist @ Orange</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CTA ADMISSIONS ===================== -->
<section id="admissions" class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="bg-gradient-to-br from-primary via-primary to-primary-dark rounded-3xl p-16 relative overflow-hidden shadow-2xl">
      <!-- Decorative circles -->
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-white/5 rounded-full pointer-events-none"></div>
      <div class="absolute -bottom-16 -left-16 w-72 h-72 bg-gold/8 rounded-full pointer-events-none"></div>
      <div class="absolute top-8 right-8 w-24 h-24 bg-white/5 rounded-full pointer-events-none"></div>

      <div class="relative z-10 max-w-2xl">
        <div class="badge bg-white/15 text-white border border-white/20 mb-7">
          <span class="material-symbols-outlined text-[13px]">calendar_today</span>
          Admissions Ouvertes - Rentree 2024
        </div>
        <h2 class="font-display font-black text-white mb-5"
            style="font-size: clamp(2rem, 4vw, 3rem);">
          Pret a rejoindre l'elite de l'informatique ?
        </h2>
        <p class="text-white/65 text-[1.05rem] leading-relaxed mb-10">
          Les inscriptions pour la rentree prochaine sont ouvertes. Rejoignez une communaute
          d'excellence et donnez un coup d'accelerateur a votre carriere numerique.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#contact"
             class="inline-flex items-center gap-2 bg-white text-primary font-bold px-10 py-4 rounded-xl hover:bg-primary-light transition-colors shadow-xl text-[0.95rem]">
            Deposer ma candidature
          </a>
          <a href="#contact"
             class="inline-flex items-center gap-2 bg-transparent border-2 border-white/30 text-white hover:bg-white/10 font-bold px-10 py-4 rounded-xl transition-colors text-[0.95rem]">
            Contacter un conseiller
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== CONTACT ===================== -->
<section id="contact" class="py-24 bg-surface-low">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

      <!-- Contact form (7/12) -->
      <div class="lg:col-span-7 bg-white rounded-3xl p-10 shadow-sm border border-slate-100">
        <h2 class="font-display font-bold text-3xl text-gray-900 mb-1">Nous contacter</h2>
        <p class="text-slate-500 mb-8 text-sm">Notre equipe vous repond sous 24h.</p>
        <form class="space-y-5" onsubmit="return false;">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="space-y-1.5">
              <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider">Prenom & Nom</label>
              <input type="text" placeholder="Votre nom complet"
                     class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all bg-surface">
            </div>
            <div class="space-y-1.5">
              <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider">Email</label>
              <input type="email" placeholder="votre@email.com"
                     class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all bg-surface">
            </div>
          </div>
          <div class="space-y-1.5">
            <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider">Formation souhaitee</label>
            <select class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all bg-surface">
              <option value="">Selectionner une formation</option>
              <option>Bachelor Developpement Web & Mobile</option>
              <option>Bachelor Cybersecurite</option>
              <option>Master RESI</option>
              <option>Master Data Engineering & IA</option>
              <option>Pole Gestion</option>
            </select>
          </div>
          <div class="space-y-1.5">
            <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider">Message</label>
            <textarea rows="4" placeholder="Votre message..."
                      class="w-full px-4 py-3 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all bg-surface resize-none"></textarea>
          </div>
          <button type="submit"
                  class="w-full bg-primary hover:bg-primary-mid text-white font-bold py-4 rounded-xl shadow-md hover:shadow-lg transition-all active:scale-95">
            Envoyer le message
          </button>
        </form>
      </div>

      <!-- Contact info (5/12) -->
      <div class="lg:col-span-5 flex flex-col gap-6">
        <!-- Dark info card -->
        <div class="bg-primary rounded-3xl p-8 text-white flex-1">
          <h3 class="font-display font-bold text-2xl mb-8">Coordonnees</h3>
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-gold">location_on</span>
              </div>
              <div>
                <div class="text-[10px] uppercase tracking-wider text-white/45 mb-1">Adresse</div>
                <div class="font-semibold text-sm leading-relaxed">Km 5 Avenue Cheikh Anta Diop<br>Dakar, Senegal</div>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-gold">phone</span>
              </div>
              <div>
                <div class="text-[10px] uppercase tracking-wider text-white/45 mb-1">Telephone</div>
                <div class="font-semibold text-sm">+221 33 824 00 00</div>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                <span class="material-symbols-outlined text-gold">mail</span>
              </div>
              <div>
                <div class="text-[10px] uppercase tracking-wider text-white/45 mb-1">Email</div>
                <div class="font-semibold text-sm">contact@isisuptech.edu</div>
              </div>
            </div>
          </div>
          <div class="mt-8 pt-8 border-t border-white/10">
            <div class="text-[10px] uppercase tracking-wider text-white/45 mb-4">Heures d'ouverture</div>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-white/60">Lundi - Vendredi</span>
                <span class="font-semibold">08:00 - 20:00</span>
              </div>
              <div class="flex justify-between">
                <span class="text-white/60">Samedi</span>
                <span class="font-semibold">09:00 - 16:00</span>
              </div>
              <div class="flex justify-between text-white/40">
                <span>Dimanche</span>
                <span>Ferme</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Map placeholder -->
        <div class="bg-slate-100 rounded-3xl h-48 relative overflow-hidden border border-slate-200 flex items-center justify-center">
          <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-primary/10"></div>
          <div class="text-center relative z-10">
            <span class="material-symbols-outlined text-5xl text-primary/25">map</span>
            <p class="text-slate-400 text-xs mt-2 font-medium">Carte Google Maps (a integrer)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FOOTER ===================== -->
<footer class="bg-slate-900 text-white">
  <div class="max-w-7xl mx-auto px-6 pt-16 pb-8">
    <div class="grid grid-cols-1 md:grid-cols-5 gap-12 pb-12 border-b border-white/10">

      <!-- Brand col -->
      <div class="md:col-span-2">
        <div class="flex items-center gap-3 mb-5">
          <div class="w-11 h-11 bg-primary-mid rounded-xl flex items-center justify-center font-black text-[15px] shadow-lg">IS</div>
          <span class="font-display font-extrabold text-xl tracking-tight">ISI SUPTECH</span>
        </div>
        <p class="text-slate-400 text-sm leading-relaxed mb-6 max-w-xs">
          L'institution de reference pour les metiers du numerique et de la gestion technologique au Senegal depuis 1994.
        </p>
        <div class="flex gap-3">
          <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-primary-mid flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-[17px]">public</span>
          </a>
          <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-primary-mid flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-[17px]">groups</span>
          </a>
          <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-primary-mid flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-[17px]">share</span>
          </a>
        </div>
      </div>

      <!-- Formations -->
      <div>
        <h5 class="font-bold text-white text-xs uppercase tracking-widest mb-5">Formations</h5>
        <ul class="space-y-3">
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Pole Informatique</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Pole Gestion</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Master RESI</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Formations Pro</a></li>
        </ul>
      </div>

      <!-- Liens -->
      <div>
        <h5 class="font-bold text-white text-xs uppercase tracking-widest mb-5">Liens Utiles</h5>
        <ul class="space-y-3">
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Admissions</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Espace Etudiant</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Reseau Alumni</a></li>
          <li><a href="#" class="text-slate-400 text-sm hover:text-white transition-colors">Carrieres</a></li>
        </ul>
      </div>

      <!-- Newsletter -->
      <div>
        <h5 class="font-bold text-white text-xs uppercase tracking-widest mb-5">Newsletter</h5>
        <p class="text-slate-400 text-sm mb-4">Restez informe de nos actualites.</p>
        <div class="flex gap-2">
          <input type="email" placeholder="Votre email"
                 class="bg-white/10 border border-white/10 rounded-lg px-3 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-primary-mid flex-1">
          <button class="bg-primary hover:bg-primary-mid px-3 rounded-lg transition-colors">
            <span class="material-symbols-outlined text-[18px]">send</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
      <p class="text-slate-500 text-xs">&copy; 2024 ISI SUPTECH. Excellence Institutionnelle & Precision Technique.</p>
      <div class="flex gap-6">
        <a href="#" class="text-slate-500 hover:text-slate-300 text-xs transition-colors">Mentions Legales</a>
        <a href="#" class="text-slate-500 hover:text-slate-300 text-xs transition-colors">Confidentialite</a>
        <a href="#" class="text-slate-500 hover:text-slate-300 text-xs transition-colors">CGU</a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
