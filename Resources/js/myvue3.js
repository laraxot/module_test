/**
 * @link https://www.freecodecamp.org/news/migrate-from-vue2-to-vue3-with-example-project/
 */

/*
app.config.isCustomElement = tag => tag.startsWith('input-')
*/
var path = require("path");

import { createApp } from 'vue';
//import TinymceComponent from './components/TinymceComponent.vue';
//import ExampleComponent from '../../../components/ExampleComponent.vue';
//import Noui from './components/slider/Noui.vue';
//import Videojs from path.resolve(extra, 'videoplayer/Videojs.vue'); //errore

import ExampleComponent from '../../../../Modules/Test/Resources/js/components/ExampleComponent.vue';

//import TinymceComponent from './components/wysiwyg/Tinymce2Component.vue';

const app = createApp({
    data() {
        return {
            count: 0
        }
    }
});


app.component('v-example', ExampleComponent);

//per richiamarlo <videoplayer-component id='xxx' src='yyyy'>
//to call the component <videoplayer-component id='xxx' src='yyyy'>

app.mount('#app');