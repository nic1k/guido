import domReady from '@roots/sage/client/dom-ready';
import 'bootstrap';
import 'masonry-layout'
/**
 * Application entrypoint
 */
domReady(async () => {
  // ...

});


/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
