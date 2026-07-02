// Ce fichier est charge par WordPress via wp_enqueue_script
( function( $ ) {
    'use strict';

    // Attendre que le DOM soit pret (jQuery)
    $( function() {

        // Scroll spy : mettre en evidence le lien actif dans le menu
        const sections = document.querySelectorAll( 'section[id]' );
        const navLinks = document.querySelectorAll( '.menu-item a' );

        const observer = new IntersectionObserver( ( entries ) => {
            entries.forEach( ( entry ) => {
                if ( entry.isIntersecting ) {
                    navLinks.forEach( ( link ) => {
                        link.classList.remove( 'active' );
                        if ( link.getAttribute( 'href' ) === '#' + entry.target.id ) {
                            link.classList.add( 'active' );
                        }
                    } );
                }
            } );
        }, { threshold: 0.4 } );

        sections.forEach( ( s ) => observer.observe( s ) );

        // Exemple d'appel AJAX WordPress
        $( '#btn-candidature' ).on( 'click', function() {
            $.ajax( {
                url: isiData.ajaxurl,
                type: 'POST',
                data: {
                    action: 'isi_submit_candidature',
                    nonce: isiData.nonce,
                    nom: $( '#nom' ).val(),
                    email: $( '#email' ).val(),
                },
                success: function( response ) {
                    if ( response.success ) {
                        alert( 'Candidature envoyee !' );
                    }
                },
            } );
        } );
    } );

} )( jQuery );
