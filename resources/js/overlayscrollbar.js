// import overlayScrollBar
import 'overlayscrollbars/overlayscrollbars.css';
import {
    OverlayScrollbars,
    ScrollbarsHidingPlugin,
    SizeObserverPlugin,
    ClickScrollPlugin
} from 'overlayscrollbars';

// simple initialization with an element
const osInstance = [
    OverlayScrollbars(document.querySelector('#main-content'), {}),
    OverlayScrollbars(document.querySelector('#sidebar-nav'), {})
];
