<?php

if (in_array(get_current_blog_id(), [1, 3, 4, 5, 6, 7])) {
    get_header();
} 
elseif (in_array(get_current_blog_id(), [13])) {
    get_header('online');
}
elseif (in_array(get_current_blog_id(), [19])) {
    get_header('quiz');
}
elseif (in_array(get_current_blog_id(), [17])) {
    get_header('exposee_v2');
}
elseif (in_array(get_current_blog_id(), [15, 16, 18])) {
    get_header('v2form');
}
else {
	get_header();
} 

// get_header();
 
/** Masterarbeit */
if (get_current_blog_id() === 1) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/price');
    get_template_part('template-parts/blocks/small-static-blocks2');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/work-progress-main');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/estimate');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/faq');
    get_template_part('template-parts/blocks/contacts');
}

/** Doktorarbeit */
if (get_current_blog_id() === 3) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/price');
    get_template_part('template-parts/blocks/small-static-blocks2');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/work-progress-main');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/estimate');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/faq');
    get_template_part('template-parts/blocks/contacts');
}

/** Statistische Auswertung */
if (get_current_blog_id() === 4) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/estimate-4-6');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/faq');
    get_template_part('template-parts/blocks/contacts');
}

/** Facharbeit */
if (get_current_blog_id() === 5) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details2');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/estimate');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** Abschlussarbeit */
if (get_current_blog_id() === 6) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/estimate-4-6');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** Forschungsartikel */
if (get_current_blog_id() === 7) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/small-static-blocks3');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/estimate-7');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}


/** Online */
if (get_current_blog_id() === 13) {
    // get_template_part('template-parts/blocks/header-online');
    get_template_part('template-parts/blocks/progress');
    get_template_part('template-parts/blocks/about-us');
    get_template_part('template-parts/blocks/details');
    // get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/welche-garantien');
    get_template_part('template-parts/blocks/rabbate');
    get_template_part('template-parts/blocks/estimate-online');
    get_template_part('template-parts/blocks/subjects-dissertation');
    // get_template_part('template-parts/blocks/estimate-7');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/small-static-blocks-online');
    // get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/work-progress-online');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** gwrites-ha-schreiben */
if (get_current_blog_id() === 15) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details-v3_height');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/how-work');
    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/estimate-7_v2'); 
    get_template_part('template-parts/blocks/small-static-blocks15');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** gwrites-ba.de */
if (get_current_blog_id() === 16) {
    // get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details-v3_height');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/questions');

    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/how-work');

    get_template_part('template-parts/blocks/warranty');

    get_template_part('template-parts/blocks/estimate-7_v2'); 

    get_template_part('template-parts/blocks/small-static-blocks16');

    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/work-progress-main');

    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** gwrites-exposee.de */
if (get_current_blog_id() === 17) {
    // get_template_part('template-parts/blocks/header');

    get_template_part('template-parts/blocks/small-static-blocks');
    
    get_template_part('template-parts/blocks/details-v3_height2');
    get_template_part('template-parts/blocks/you-receive');
    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/why-we');

    get_template_part('template-parts/blocks/how-work');

    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/estimate-7_v2');
    
    get_template_part('template-parts/blocks/small-static-blocks17');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/plagiarism');
    get_template_part('template-parts/blocks/work-progress');
    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');


    // get_template_part('template-parts/blocks/sie-konnen');

    // get_template_part('template-parts/blocks/absolut-gratis');

    // get_template_part('template-parts/blocks/plagiarism');

    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** gwrites-diplom.de */
if (get_current_blog_id() === 18) {
    get_template_part('template-parts/blocks/header');
    get_template_part('template-parts/blocks/small-static-blocks');
    get_template_part('template-parts/blocks/details');
    get_template_part('template-parts/blocks/you-receive');

    get_template_part('template-parts/blocks/additional-service');
    get_template_part('template-parts/blocks/questions');
    get_template_part('template-parts/blocks/why-we');
    get_template_part('template-parts/blocks/how-work');

    get_template_part('template-parts/blocks/warranty');
    get_template_part('template-parts/blocks/estimate-7_v2');

    get_template_part('template-parts/blocks/small-static-blocks18');
    get_template_part('template-parts/blocks/subjects-dissertation');
    get_template_part('template-parts/blocks/plagiarism');

    get_template_part('template-parts/blocks/work-progress');

    get_template_part('template-parts/blocks/authors');
    get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}

/** gwrites-ha.de */
if (get_current_blog_id() === 19) {
    // get_template_part('template-parts/blocks/header');

    // get_template_part('template-parts/blocks/small-static-blocks');
    
    // get_template_part('template-parts/blocks/details-v3_height2');
    
    // get_template_part('template-parts/blocks/small-static-blocks17');

    get_template_part('template-parts/blocks/quiz');

    get_template_part('template-parts/blocks/estimate-7');
    
    get_template_part('template-parts/blocks/why-we');
    // get_template_part('template-parts/blocks/questions');

    get_template_part('template-parts/blocks/how-work');
    
    get_template_part('template-parts/blocks/warranty');

    // get_template_part('template-parts/blocks/you-receive');


    // get_template_part('template-parts/blocks/sie-konnen');

    // get_template_part('template-parts/blocks/absolut-gratis');

    // get_template_part('template-parts/blocks/plagiarism');
    // get_template_part('template-parts/blocks/subjects-dissertation');
    // get_template_part('template-parts/blocks/estimate-7');
    // get_template_part('template-parts/blocks/work-progress');
    // get_template_part('template-parts/blocks/authors');
    // get_template_part('template-parts/blocks/reviews');
    get_template_part('template-parts/blocks/payment');
    get_template_part('template-parts/blocks/contacts');
}


get_template_part('template-parts/blocks/popups');

get_footer();