/* Masonry-settings-rtl.js v1.0 */
docReady( function() {
var container = document.querySelector('.js-masonry');
var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
  msnry = new Masonry( container, {
  columnWidth: container.querySelector('.post-entry-grid'),
  itemSelector: '.post-entry-grid',
  isOriginLeft: false
} );
});
});