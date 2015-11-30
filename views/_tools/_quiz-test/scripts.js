/* global jQuery */

(function( $ ) {
    $( '.quiz' ).elementalQuiz( {
        'score_max': 7,
        'answers': [ 'b', {'d':4, 'b': 3}, 'a', 'c' ],
        'brackets': { 100:'wizard', 75:'genius', 50:'average', 25:'poor', 0:'beginner' },
        'title': 'Test Quiz'
    } );
} )( jQuery );
