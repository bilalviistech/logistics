import odinFaqs from '../../app/blocks/faqs/script.js';
import odinGallery from '../../app/blocks/gallery/script.js';

const blocks = {
    'odin-faqs': odinFaqs,
    'odin-gallery': odinGallery,
};

jQuery.each(blocks, function (block_name, method) {
    jQuery(document).ready(method);
    jQuery(document).on('mb_blocks_preview/' + block_name, method);
});

// DISABLE BLOCK PREVIEW ANCHORS
jQuery(document).on('mb_blocks_preview', function (e) {
    // jQuery('.mb-block-preview').on('click', jQuery(e.target).find('a'), function(e){
    // 	e.preventDefault();
    // });
});
