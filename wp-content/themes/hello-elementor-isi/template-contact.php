<?php
/*
Template Name: Contact Maquette
*/
?>
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact & FAQ - ISI SUPTECH</title>
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
  input,select,textarea{outline:none;transition:border-color .2s,box-shadow .2s}
  input:focus,select:focus,textarea:focus{border-color:#1f4085;box-shadow:0 0 0 3px rgba(31,64,133,.1)}
  .faq-item{border-bottom:1px solid #e2e8f0}
  .faq-item:last-child{border-bottom:none}
  .faq-answer{max-height:0;overflow:hidden;transition:max-height .35s ease,padding .35s ease}
  .faq-answer.open{max-height:300px;padding-bottom:16px}
  .faq-icon{transition:transform .3s ease}
  .faq-icon.rotate{transform:rotate(180deg)}
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
      <a href="<?php echo home_url('/a-propos/'); ?>" class="nav-link font-display font-medium text-sm text-slate-600 hover:text-primary">A Propos</a>
      <a href="<?php echo home_url('/contact/'); ?>" class="nav-link active font-display font-semibold text-sm text-primary">Contact</a>
    </nav>
    <div class="flex items-center gap-3">
      <a href="#" class="hidden md:inline text-sm font-semibold text-slate-500 hover:text-primary px-3">Espace Etudiant</a>
      <a href="<?php echo home_url('/admissions/'); ?>" class="bg-primary hover:bg-primary-mid text-white px-5 py-2.5 rounded-lg text-sm font-bold shadow-md transition-all">S'inscrire</a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="bg-primary-dark py-20 relative overflow-hidden">
  <div class="absolute inset-0 opacity-10" style="background-image:radial-gradient(circle at 1px 1px,rgba(255,255,255,.4) 1px,transparent 0);background-size:32px 32px"></div>
  <div class="relative max-w-7xl mx-auto px-6">
    <div class="badge bg-gold/20 text-gold border border-gold/30 mb-5 anim-1"><span class="material-symbols-outlined" style="font-size:13px">contact_support</span>Nous joindre</div>
    <h1 class="font-display font-black text-white text-5xl mb-4 anim-2">Contact & FAQ</h1>
    <p class="text-white/70 text-lg max-w-xl anim-2">Une question sur nos formations, l'admission ou la vie sur campus ? Consultez notre FAQ ou contactez-nous directement.</p>
  </div>
</section>

<!-- CONTACT CARDS -->
<section class="max-w-7xl mx-auto px-6 -mt-6 relative z-10 pb-0">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-lg p-6 flex gap-4 items-start">
      <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 shadow-md"><span class="material-symbols-outlined text-white text-xl">location_on</span></div>
      <div>
        <div class="font-display font-bold text-gray-900 mb-1">Adresse</div>
        <div class="text-slate-500 text-sm">ISI SUPTECH, Cocody Angre<br>BP 12345, Abidjan 08<br>Cote d'Ivoire</div>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-lg p-6 flex gap-4 items-start">
      <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 shadow-md"><span class="material-symbols-outlined text-white text-xl">phone</span></div>
      <div>
        <div class="font-display font-bold text-gray-900 mb-1">Telephone</div>
        <div class="text-slate-500 text-sm">Accueil : +225 27 22 XX XX XX<br>Admissions : +225 07 XX XX XX XX<br>Urgences : +225 05 XX XX XX XX</div>
      </div>
    </div>
    <div class="bg-white rounded-2xl border border-slate-100 shadow-lg p-6 flex gap-4 items-start">
      <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 shadow-md"><span class="material-symbols-outlined text-white text-xl">schedule</span></div>
      <div>
        <div class="font-display font-bold text-gray-900 mb-1">Horaires d'ouverture</div>
        <div class="text-slate-500 text-sm">Lun - Ven : 7h30 - 18h00<br>Samedi : 8h00 - 13h00<br>Dimanche : Ferme</div>
      </div>
    </div>
  </div>
</section>

<!-- FORMULAIRE + CARTE -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

    <!-- Formulaire -->
    <div>
      <h2 class="font-display font-black text-3xl text-gray-900 mb-2">Envoyez-nous un message</h2>
      <p class="text-slate-500 mb-7">Nous repondons sous 24 a 48h ouvrees.</p>
      <form class="space-y-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Nom <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Votre nom" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
          </div>
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Prenom <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Votre prenom" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
          </div>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
          <input type="email" placeholder="votre@email.com" class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white">
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">Objet <span class="text-red-500">*</span></label>
          <select class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white text-slate-600">
            <option value="">Selectionnez un objet...</option>
            <option>Information sur les formations</option>
            <option>Processus d'admission</option>
            <option>Frais de scolarite</option>
            <option>Stages et partenariats entreprise</option>
            <option>Vie sur le campus</option>
            <option>Autre demande</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
          <textarea rows="5" placeholder="Detaillez votre demande ici..." class="w-full border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white resize-none"></textarea>
        </div>
        <button type="submit" class="w-full bg-primary hover:bg-primary-mid text-white py-3.5 rounded-xl font-bold text-sm transition-colors flex items-center justify-center gap-2 shadow-lg">
          <span class="material-symbols-outlined" style="font-size:18px">send</span>
          Envoyer le message
        </button>
      </form>
    </div>

    <!-- Carte + Departments -->
    <div class="space-y-6">
      <!-- Carte simulee -->
      <div class="bg-primary-light/30 rounded-2xl overflow-hidden border border-primary-light h-64 flex items-center justify-center relative">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=700&q=70" class="w-full h-full object-cover opacity-40" alt="">
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="bg-primary text-white rounded-2xl px-6 py-4 shadow-xl text-center">
            <span class="material-symbols-outlined text-gold text-3xl block mb-1">location_on</span>
            <div class="font-bold">ISI SUPTECH</div>
            <div class="text-white/70 text-xs">Cocody Angre, Abidjan</div>
          </div>
        </div>
      </div>

      <!-- Contacts par departement -->
      <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
        <h3 class="font-display font-bold text-gray-900 mb-5">Contacts par service</h3>
        <div class="space-y-4">
          <div class="flex items-center justify-between py-3 border-b border-slate-50">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 bg-primary-light rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-primary" style="font-size:18px">school</span></div>
              <div>
                <div class="font-semibold text-gray-900 text-sm">Scolarite</div>
                <div class="text-xs text-slate-400">scolarite@isi-suptech.ci</div>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between py-3 border-b border-slate-50">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 bg-primary-light rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-primary" style="font-size:18px">edit_note</span></div>
              <div>
                <div class="font-semibold text-gray-900 text-sm">Admissions</div>
                <div class="text-xs text-slate-400">admissions@isi-suptech.ci</div>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between py-3 border-b border-slate-50">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 bg-primary-light rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-primary" style="font-size:18px">work</span></div>
              <div>
                <div class="font-semibold text-gray-900 text-sm">Relations Entreprises</div>
                <div class="text-xs text-slate-400">entreprises@isi-suptech.ci</div>
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between py-3">
            <div class="flex items-center gap-3">
              <div class="w-9 h-9 bg-primary-light rounded-lg flex items-center justify-center"><span class="material-symbols-outlined text-primary" style="font-size:18px">payments</span></div>
              <div>
                <div class="font-semibold text-gray-900 text-sm">Comptabilite / Frais</div>
                <div class="text-xs text-slate-400">finance@isi-suptech.ci</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Reseaux sociaux -->
      <div class="bg-primary rounded-2xl p-6">
        <h3 class="font-display font-bold text-white mb-4">Suivez-nous</h3>
        <div class="grid grid-cols-2 gap-3">
          <a href="#" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3 flex items-center gap-3 transition-colors">
            <span class="material-symbols-outlined text-gold" style="font-size:20px">open_in_new</span>
            <div><div class="text-white text-xs font-semibold">Facebook</div><div class="text-white/50 text-xs">@ISISuptech</div></div>
          </a>
          <a href="#" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3 flex items-center gap-3 transition-colors">
            <span class="material-symbols-outlined text-gold" style="font-size:20px">open_in_new</span>
            <div><div class="text-white text-xs font-semibold">LinkedIn</div><div class="text-white/50 text-xs">ISI SUPTECH</div></div>
          </a>
          <a href="#" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3 flex items-center gap-3 transition-colors">
            <span class="material-symbols-outlined text-gold" style="font-size:20px">open_in_new</span>
            <div><div class="text-white text-xs font-semibold">YouTube</div><div class="text-white/50 text-xs">ISI SUPTECH CI</div></div>
          </a>
          <a href="#" class="bg-white/10 hover:bg-white/20 border border-white/15 rounded-xl p-3 flex items-center gap-3 transition-colors">
            <span class="material-symbols-outlined text-gold" style="font-size:20px">open_in_new</span>
            <div><div class="text-white text-xs font-semibold">WhatsApp</div><div class="text-white/50 text-xs">+225 07 XX XX XX XX</div></div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="bg-white border-y border-slate-100 py-16">
  <div class="max-w-4xl mx-auto px-6">
    <div class="text-center mb-12">
      <div class="badge bg-primary-light text-primary mx-auto mb-4">Questions frequentes</div>
      <h2 class="font-display font-black text-4xl text-gray-900 mb-3">FAQ</h2>
      <p class="text-slate-500">Les reponses aux questions les plus posees par nos futurs etudiants</p>
    </div>

    <!-- Categorie : Admissions -->
    <h3 class="font-display font-bold text-lg text-gray-900 mb-4 flex items-center gap-2">
      <span class="w-1.5 h-6 bg-primary rounded-full"></span>Admissions
    </h3>
    <div class="bg-surface rounded-2xl border border-slate-100 overflow-hidden mb-8">
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Quel est le niveau requis pour entrer en Licence ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Pour la Licence, le niveau requis est le Baccalaureat (toutes series scientifiques et techniques : C, D, E, F2, F3) avec mention au minimum Passable. Un test de logique et un entretien de motivation font partie du processus de selection.
        </div>
      </div>
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Acceptez-vous les candidats de terminale ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Oui, les candidats de Terminale peuvent deposer un dossier de pre-inscription. L'admission definitive est conditionnee par l'obtention du Baccalaureat. Les candidats admis sous condition ont jusqu'a fin septembre pour fournir leur attestation de reussite.
        </div>
      </div>
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Puis-je integrer directement en 2eme ou 3eme annee ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Les integrations en cours de cursus (passerelle) sont possibles sur dossier. Elles sont soumises a une validation des acquis de l'experience ou des etudes anterieures (VAE/VAP). Contactez le service des admissions avec votre dossier academique complet pour une etude personnalisee.
        </div>
      </div>
    </div>

    <!-- Categorie : Frais & Financement -->
    <h3 class="font-display font-bold text-lg text-gray-900 mb-4 flex items-center gap-2">
      <span class="w-1.5 h-6 bg-gold rounded-full"></span>Frais & Financement
    </h3>
    <div class="bg-surface rounded-2xl border border-slate-100 overflow-hidden mb-8">
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Y a-t-il des facilites de paiement ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Oui, les frais de scolarite peuvent etre regle en 3 tranches : 50% a l'inscription (septembre), 30% en janvier, 20% en avril. Des facilites supplementaires peuvent etre accordees sur demande justifiee aupres du service financier.
        </div>
      </div>
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Des bourses sont-elles disponibles ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          ISI SUPTECH attribue chaque annee des bourses d'excellence (reduction de 30 a 100% des frais) aux candidats ayant obtenu une mention Tres Bien ou Bien au Baccalaureat, et aux etudiants maintenant un rang dans le top 3 de leur promotion.
        </div>
      </div>
    </div>

    <!-- Categorie : Formations -->
    <h3 class="font-display font-bold text-lg text-gray-900 mb-4 flex items-center gap-2">
      <span class="w-1.5 h-6 bg-primary-mid rounded-full"></span>Formations & Programmes
    </h3>
    <div class="bg-surface rounded-2xl border border-slate-100 overflow-hidden mb-8">
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Les diplomes ISI sont-ils reconnus par l'Etat ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Oui, tous nos diplomes (BTS, Licence, Master) sont reconnus par le Ministere de l'Enseignement Superieur et de la Recherche Scientifique de Cote d'Ivoire. Nos formations sont accreditees dans le cadre du systeme LMD (Licence-Master-Doctorat).
        </div>
      </div>
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Les cours sont-ils dispenses en francais ou en anglais ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          L'enseignement est principalement en francais. Des modules techniques sont dispenses en anglais, notamment les cours lies aux certifications internationales (Cisco, AWS). Un module d'anglais technique est obligatoire en Licence.
        </div>
      </div>
      <div class="faq-item">
        <button class="w-full text-left px-6 py-4 flex items-center justify-between font-semibold text-gray-900 text-sm hover:text-primary transition-colors" onclick="toggleFaq(this)">
          <span>Est-ce que les stages sont obligatoires ?</span>
          <span class="material-symbols-outlined faq-icon text-slate-400" style="font-size:20px">expand_more</span>
        </button>
        <div class="faq-answer px-6 text-slate-600 text-sm leading-relaxed">
          Oui, un stage de 3 mois minimum est obligatoire en 3eme annee de Licence et en 2eme annee de Master. Notre service des relations entreprises accompagne les etudiants dans la recherche de stage aupres de notre reseau de 200+ entreprises partenaires.
        </div>
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

<script>
function toggleFaq(btn) {
  const answer = btn.nextElementSibling;
  const icon = btn.querySelector('.faq-icon');
  answer.classList.toggle('open');
  icon.classList.toggle('rotate');
}
</script>
</body>
</html>
